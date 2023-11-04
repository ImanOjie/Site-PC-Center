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
        Schema::create('products_motherboard', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->decimal('price');
            $table->string('category');
            $table->string('brand');
            $table->binary('image');
            $table->string('fullname');
            $table->string('size');
            $table->string('format');
            $table->string('socket-type');
            $table->string('socket-num');
            $table->string('socket-fan');
            $table->string('chipset');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_motherboard');
    }
};
