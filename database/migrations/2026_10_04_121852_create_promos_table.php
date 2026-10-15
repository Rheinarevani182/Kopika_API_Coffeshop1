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
        Schema::create('promos', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description');
    $table->string('label')->nullable();
    $table->string('promo_code')->nullable();
    $table->integer('discount')->default(0);
    $table->string('image')->nullable();
    $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
