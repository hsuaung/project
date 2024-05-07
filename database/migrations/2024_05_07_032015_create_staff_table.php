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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email');
            $table->String('address');
            $table->integer('age');
            $table->String('phone');
            $table->foreignId('role_id')->references('id')->on('roles')->cascadeOnDelete()->cascadeOnUpdate()->constrained();
            $table->String('password');
            $table->String('image');
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
        Schema::dropIfExists('staff');
    }
};
