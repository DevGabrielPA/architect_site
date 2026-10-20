<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Um pagamento do Teste de Estilo, gravado pelo StripeWebhookController.
 * O valor fica em centavos (amount) e nada do cartão é guardado aqui.
 */
class Payment extends Model
{
    /**
     * Campos que podem ser preenchidos de uma vez (create/fill).
     *
     * @var list<string>
     */
    protected $fillable = [
        'stripe_checkout_session_id',
        'stripe_event_id',
        'stripe_payment_intent_id',
        'status',
        'amount',
        'currency',
        'buyer_email',
        'locale',
        'winning_style',
        'result_email_sent_at',
        'paid_at',
    ];

    /**
     * Converte as colunas de data em objetos Carbon e o valor em inteiro.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'amount' => 'integer',
            'result_email_sent_at' => 'datetime',
            'paid_at' => 'datetime',
        ];
    }
}
