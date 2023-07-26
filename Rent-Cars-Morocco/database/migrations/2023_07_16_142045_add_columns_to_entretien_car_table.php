<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('entretien_car', function (Blueprint $table) {
            $table->unsignedBigInteger('km')->after('car_id');
            $table->string('type_entretien')->after('km');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('entretien_car', function (Blueprint $table) {
            $table->dropColumn('km');
            $table->dropColumn('type_entretien');
        });
    }
};
