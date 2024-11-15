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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');  // Relación con `users`
            $table->foreignId('counter_id')->nullable()->constrained('counters')->onDelete('cascade');  // Contador asignado
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('phone')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('rfc')->nullable()->unique();
            $table->string('rfc_user')->nullable();
            $table->string('curp')->nullable()->unique();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('cp')->nullable();
            $table->string('nss')->nullable();
            $table->string('regimen')->nullable();
            $table->string('note')->nullable();
            $table->date('birthdate')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
