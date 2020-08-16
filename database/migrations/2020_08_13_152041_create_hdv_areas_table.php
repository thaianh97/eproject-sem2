<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHdvAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hdv_areas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id'); // foreign key -> references to 'id' on areas migration
            $table->foreign('area_id')->references('id')->on('areas');
            $table->unsignedBigInteger('guide_id'); // foreign key -> references to 'id' on hdv migration
            $table->foreign('guide_id')->references('id')->on('hdv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_guide_areas');
    }
}
