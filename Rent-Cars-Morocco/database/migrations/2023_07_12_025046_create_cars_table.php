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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('marque_id');
            $table->unsignedBigInteger('model_id');
            $table->integer('year');
            $table->string('color');
            $table->string('picture');
            $table->decimal('price_per_day', 8, 2);
            $table->boolean('is_available')->default(true);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('marque_id')->references('id')->on('marque_cars');
            $table->foreign('model_id')->references('id')->on('model_cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
