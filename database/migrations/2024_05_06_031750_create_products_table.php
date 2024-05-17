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
            $table->String('name');
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete()->cascadeOnUpdate()->constrained();
            // $table->foreignId('code_id')->references('id')->on('codes')->cascadeOnDelete()->cascadeOnUpdate()->constrained();
            $table->foreignId('staff_id')->references('id')->on('staff')->cascadeOnDelete()->cascadeOnUpdate()->constrained();
            $table->String('detail');
            $table->String('code_name');
            $table->float('price');
            $table->Integer('stock');
            $table->String('description');
            $table->String('feature');
            $table->String('additioninfo');
            $table->String('uuid');
            $table->String('status');
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
