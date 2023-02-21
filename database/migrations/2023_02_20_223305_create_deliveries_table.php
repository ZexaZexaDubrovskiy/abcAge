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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('number_delivery');

            $table->unsignedBigInteger('product_id');
            $table->index('product_id', 'delivery_product_idx');
            $table->foreign('product_id', 'delivery_product_fk')->on('products')->references('id');

            $table->unsignedBigInteger('quantity');
            $table->float('price', 16, 2);
            $table->date('date');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
