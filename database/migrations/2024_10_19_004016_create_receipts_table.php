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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('counter_id')->constrained('counters')->onDelete('cascade');  // Contador que crea el recibo
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');  // Cliente asociado al recibo
            $table->foreignId('category_id')->constrained('categories');  // Categoría del recibo
            $table->string('identificator', 10)->unique();
            $table->enum('pay_method',['cash', 'transfer'])->default('cash');
            $table->decimal('mount', 10, 2);  // Monto del recibo
            $table->string('concept');  // Concepto del recibo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
