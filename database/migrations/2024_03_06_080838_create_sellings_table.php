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
        Schema::create('sellings', function (Blueprint $table) {
            $table->id();
            $table->varchar('sell_id');
            $table->varchar('customer_id');
            $table->varchar('cashier_id');
            $table->date('date_sell');
            $table->enum('selling_status', ['active', 'inactive'])->default('active');
            $table->integer('grand_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellings');
    }
};
