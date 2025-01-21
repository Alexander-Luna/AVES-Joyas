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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->decimal('total_price', 10, 2);
            $table->decimal('total_shipping', 10, 2)->default(0.0);
            $table->string('ci')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
