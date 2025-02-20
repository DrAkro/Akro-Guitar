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
            $table->string('proof');
            $table->foreignId('user_id')->constrained();
            $table->text('description')->nullable();
            $table->integer('total');
            $table->date('transaction_date');
            $table->enum('status', ['pending', 'success', 'failed']);
            $table->string('promo_code')->nullable();
            $table->decimal('discount', 15, 2)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
