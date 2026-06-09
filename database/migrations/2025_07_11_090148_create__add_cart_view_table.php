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
        Schema::create('_add_cart_view', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('productName');
            $table->string('price');
            $table->string('quantity');
            $table->string('Subtotal');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('_add_cart_view');
    }
};
