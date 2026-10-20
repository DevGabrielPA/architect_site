<?php

namespace Tests\Feature;

use App\Mail\QuizResultUnlockedMail;
use App\Models\Payment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

// Webhook da Stripe gravando o pagamento na tabela payments (SQLite em
// memória) e enviando o e-mail do resultado uma única vez.
class StripeWebhookTest extends TestCase
{
    use RefreshDatabase;

    private const SECRET = 'whsec_test_secret';

    protected function setUp(): void
    {
        parent::setUp();

        config(['services.stripe.webhook_secret' => self::SECRET]);
        Mail::fake();
    }

    public function test_payments_migration_creates_the_table(): void
    {
        $this->assertTrue(Schema::hasTable('payments'));
        $this->assertTrue(Schema::hasColumns('payments', [
            'stripe_checkout_session_id', 'result_email_sent_at', 'amount', 'currency',
        ]));
    }

    public function test_valid_event_records_payment_and_sends_email_once(): void
    {
        $this->postEvent($this->checkoutEvent())->assertOk();

        Mail::assertSent(QuizResultUnlockedMail::class, 1);
        Mail::assertSent(QuizResultUnlockedMail::class, fn ($mail) => $mail->hasTo('buyer@example.com'));

        $payment = Payment::sole();
        $this->assertSame('cs_test_123', $payment->stripe_checkout_session_id);
        $this->assertSame('evt_test_123', $payment->stripe_event_id);
        $this->assertSame('pi_test_123', $payment->stripe_payment_intent_id);
        $this->assertSame('paid', $payment->status);
        $this->assertSame(300, $payment->amount);
        $this->assertSame('usd', $payment->currency);
        $this->assertSame('buyer@example.com', $payment->buyer_email);
        $this->assertSame('pt', $payment->locale);
        $this->assertSame('minimalist', $payment->winning_style);
        $this->assertNotNull($payment->paid_at);
        $this->assertNotNull($payment->result_email_sent_at);
    }

    public function test_same_event_delivered_twice_sends_only_one_email(): void
    {
        $event = $this->checkoutEvent();

        $this->postEvent($event)->assertOk();
        $this->postEvent($event)->assertOk();

        Mail::assertSent(QuizResultUnlockedMail::class, 1);
        $this->assertSame(1, Payment::count());
    }

    public function test_invalid_signature_is_rejected(): void
    {
        $payload = json_encode($this->checkoutEvent());

        $this->call('POST', '/stripe/webhook', [], [], [], [
            'CONTENT_TYPE' => 'application/json',
            'HTTP_STRIPE_SIGNATURE' => 't=' . time() . ',v1=' . str_repeat('0', 64),
        ], $payload)->assertStatus(400);

        Mail::assertNothingSent();
        $this->assertSame(0, Payment::count());
    }

    /**
     * Evento checkout.session.completed como a Stripe envia, com um
     * quiz_token de verdade (20 respostas "B" = estilo minimalista).
     */
    private function checkoutEvent(): array
    {
        app()->setLocale('pt');
        $token = quiz_mint_unpaid_token(array_fill(0, 20, 'B'));

        return [
            'id' => 'evt_test_123',
            'object' => 'event',
            'type' => 'checkout.session.completed',
            'data' => [
                'object' => [
                    'id' => 'cs_test_123',
                    'object' => 'checkout.session',
                    'payment_status' => 'paid',
                    'payment_intent' => 'pi_test_123',
                    'amount_total' => 300,
                    'currency' => 'usd',
                    'customer_details' => ['email' => 'buyer@example.com'],
                    'metadata' => ['quiz_token' => $token],
                ],
            ],
        ];
    }

    /**
     * Envia o evento com o cabeçalho Stripe-Signature calculado como a
     * Stripe faz: HMAC-SHA256 de "{timestamp}.{corpo}" com o segredo.
     */
    private function postEvent(array $event)
    {
        $payload = json_encode($event);
        $timestamp = time();
        $signature = hash_hmac('sha256', "{$timestamp}.{$payload}", self::SECRET);

        return $this->call('POST', '/stripe/webhook', [], [], [], [
            'CONTENT_TYPE' => 'application/json',
            'HTTP_STRIPE_SIGNATURE' => "t={$timestamp},v1={$signature}",
        ], $payload);
    }
}
