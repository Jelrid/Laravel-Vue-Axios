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
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('quanity');
            $table->string('source');
            $table->integer('laser')->nullable();
            $table->integer('welding')->nullable();
            $table->integer('construct')->nullable();
            $table->integer('electro')->nullable();

            $table->unsignedBigInteger('orders_id');
            $table->foreign('orders_id')->references('id')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_orders');
    }
};