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
        Schema::create('products_graphic', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->integer('price');
            $table->string('category');
            $table->string('brand');
            $table->binary('image');
            $table->string('fullname');
            $table->string('size');
            $table->string('chipset');
            $table->string('producer');
            $table->string('Frequency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_graphic');
    }
};
