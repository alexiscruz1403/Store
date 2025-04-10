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
        Schema::create('product_image', function (Blueprint $table) {
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('image_id')->unsigned();
            $table->primary(['product_id', 'image_id']);
            $table->foreign('product_id')->references('product_id')->on('product')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('image_id')->references('image_id')->on('image')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_image');
    }
};
