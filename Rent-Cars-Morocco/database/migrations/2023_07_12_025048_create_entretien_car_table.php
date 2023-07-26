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
        Schema::create('entretien_car', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->text('maintenance_description');
            $table->date('maintenance_date');
            $table->decimal('total_amount', 8, 2);
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entretien_car');
    }
};
