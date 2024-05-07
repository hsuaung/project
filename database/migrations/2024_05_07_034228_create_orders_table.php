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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->String('paymenttype');
            $table->foreignId('customer_id')->references('id')->on('customers')->cascadeOnDelete()->cascadeOnUpdate()->constrained();
            $table->float('totalprice');
            $table->String('name');
            $table->String('deliveryaddress');
            $table->String('buyerphone');
            $table->String('byeremail');
            $table->String('byername');
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
        Schema::dropIfExists('orders');
    }
};
