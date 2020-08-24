<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourGuideImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_guide_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guide_id'); // foreign key -> references 'id' on tour_guides migration
            $table->foreign('guide_id')->references('id')->on('tour_guides');
            $table->string('thumbnail'); // Ảnh checkin các địa điểm trong tour
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
        Schema::dropIfExists('tour_guide_images');
    }
}
