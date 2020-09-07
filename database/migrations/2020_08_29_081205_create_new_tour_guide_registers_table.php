<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewTourGuideRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_tour_guide_registers', function (Blueprint $table) {
            $table->id();
            $table->string('userName');
            $table->string('full_name');
            $table->integer('year_of_birth');
            $table->integer('gender'); // 1. Nam | 2. Nữ |3. Khác
            $table->string('phone');
            $table->string('email');
            $table->text('description');
            $table->string('avatar'); // ảnh đại diện
            $table->boolean('card'); // có thẻ HDV hay không
            $table->boolean('mc_gala_dinner'); // có làm MC gala dinner hay ko?
            $table->boolean('team_building'); // có tổ chức chơi team-building hay ko?
            $table->integer('status'); // 1. Open | 2. Occupied | 3. Stop working
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
        Schema::dropIfExists('new_tour_guide_registers');
    }
}
