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
            $table->foreignId('counter_id')->nullable()->constrained('counters')->onDelete('set null'); 
            $table->foreignId('regime_id')->nullable()->constrained('regimes')->onDelete('set null');
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('phone')->unique()->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->string('full_name');
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('rfc')->nullable()->unique();
            $table->string('curp')->nullable()->unique();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('cp')->nullable();
            $table->string('nss')->nullable();
            $table->string('note')->nullable();
            $table->string('token', '8')->unique();
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
