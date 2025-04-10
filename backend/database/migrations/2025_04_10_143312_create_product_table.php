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
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name', 100);
            $table->string('product_description', 255);
            $table->decimal('product_price', 10, 2);
            $table->integer('stock');
            $table->enum('category',['remera', 'pantalon', 'calzado', 'abrigo']);
            $table->enum('genre',['hombre', 'mujer']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
