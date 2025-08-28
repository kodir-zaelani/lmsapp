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
            $table->uuid('id')->primary();
            $table->string('booking_trx_id');
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('pricing_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger('sub_total_amount')->nullable();
            $table->unsignedInteger('grand_total_amount')->nullable();
            $table->unsignedInteger('total_tax_amount')->nullable();
            $table->boolean('is_paid');
            $table->string('payment_type');
            $table->string('proof')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->softDeletes();
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
