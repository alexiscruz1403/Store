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
        Schema::create('purchase_status', function (Blueprint $table) {
            $table->bigInteger('purchase_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->primary(['purchase_id', 'status_id']);
            $table->foreign('purchase_id')->references('purchase_id')->on('purchase')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('status_id')->references('status_id')->on('status')->onUpdate('cascade')->onDelete('restrict');
            $table->datetimes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_state');
    }
};
