<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Pagamentos do Teste de Estilo confirmados pela Stripe. Guarda só o que
// identifica o pagamento — nunca dados de cartão (regra 1 da seção 3 em
// docs/arquitetura/DECISOES_CONTAS_E_BANCO.md). Os campos de dono
// (guest_profile_id, user_id, quiz_result_id) entram nas etapas 2 e 3.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            // Único: é o que impede o webhook de gravar/enviar o mesmo
            // pagamento duas vezes quando a Stripe reentrega o evento.
            $table->string('stripe_checkout_session_id')->unique();
            $table->string('stripe_event_id')->nullable();
            $table->string('stripe_payment_intent_id')->nullable();
            $table->string('status');
            $table->unsignedInteger('amount'); // em centavos (300 = US$ 3,00)
            $table->char('currency', 3);
            $table->string('buyer_email')->nullable();
            $table->string('locale')->nullable();
            $table->string('winning_style')->nullable();
            // Preenchido depois que o e-mail do resultado sai; se já tiver
            // valor, o webhook não envia de novo.
            $table->timestamp('result_email_sent_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
