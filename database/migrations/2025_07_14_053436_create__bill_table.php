<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('_bill', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('zipcode');
            $table->string('date');
            $table->string('source');
            $table->string('Srequest');
            $table->string('lastName');
            $table->string('phoneWork');
            $table->string('address');
            $table->string('state');
            $table->string('time');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('_bill');
    }
};
