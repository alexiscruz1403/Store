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
        Schema::create('product_purchase', function (Blueprint $table) {
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('purchase_id')->unsigned();
            $table->primary(['product_id', 'purchase_id']);
            $table->integer('quantity');
            $table->foreign('product_id')->references('product_id')->on('product')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('purchase_id')->references('purchase_id')->on('purchase')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_purchase');
    }
};
