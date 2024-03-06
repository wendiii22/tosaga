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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->varchar('product_id');
            $table->string('product_name');  
            $table->integer('qty');
            $table->integer('sell_price');
            $table->integer('buy_price'); 
            $table->varchar('product_type'); 
            $table->enum('product_status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
//->integer
            //->date
            //->boolean
            //->text
            //->string('code', 5);
            //->string('name')->nullable();
            //->enum('product_status', ['active', inactive'])->default('active');