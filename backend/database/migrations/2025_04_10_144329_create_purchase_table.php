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
        Schema::create('purchase', function (Blueprint $table) {
            $table->bigIncrements('purchase_id');
            $table->dateTime('purchase_date');
            $table->enum('purchase_type',['envio a domicilio','retiro en local']);
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase');
    }
};
