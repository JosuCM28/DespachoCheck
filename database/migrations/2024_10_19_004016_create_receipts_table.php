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
            $table->foreignId('counter_id');
            $table->foreignId('client_id');
            $table->foreignId('category_id');
            $table->string('identificator', 10)->unique();
            $table->enum('pay_method',['cash', 'transfer'])->default('cash');
            $table->string('mount');
            $table->string('concept');
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
