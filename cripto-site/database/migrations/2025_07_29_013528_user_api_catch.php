<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            //$table->integer('user');
            // Relacionamento com usuário
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            //$table->foreign('user')->references('id')->on('users')->onDelete('cascade');

            // Tipo de transação
            $table->enum('transaction_type', [
                'TRADE', 'DEPOSIT', 'WITHDRAWAL', 'INCOME',
                'CONVERT', 'REWARD', 'BSWAP', 'FUTURE', 'MARGIN'
            ]);

            // Informações de ativos e pares
            $table->string('symbol', 20)->nullable();           // BTCUSDT
            $table->string('base_asset', 10)->nullable();        // BTC
            $table->string('quote_asset', 10)->nullable();       // USDT

            // Valores da transação
            $table->decimal('amount', 32, 16)->nullable();       // Quantidade de cripto
            $table->decimal('price', 32, 16)->nullable();        // Preço por unidade
            $table->decimal('total', 32, 16)->nullable();        // Total da transação (amount * price)
            $table->decimal('fiat_value', 32, 2)->nullable();    // Valor equivalente em moeda fiduciária
            $table->string('fiat_currency', 10)->nullable();     // Ex: USD, BRL

            // Taxas
            $table->decimal('fee', 32, 16)->nullable();
            $table->string('fee_asset', 10)->nullable();         // Moeda usada para taxa

            // Lucro e metadados
            $table->decimal('pnl', 32, 16)->nullable();          // Para operações de FUTURE
            $table->text('description')->nullable();            // Info adicional da Binance
            $table->string('external_id', 100)->nullable();     // ID externo da Binance

            // Data da transação
            $table->dateTime('executed_at')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};