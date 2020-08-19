<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_guides', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id'); // foreign key -> references to 'id' on table 'accounts'
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->string('full_name');
            $table->integer('age');
            $table->double('price');
            $table->string('phone');
            $table->string('email');
            $table->text('description');
            $table->string('thumbnail');
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
        Schema::dropIfExists('tour_guides');
    }
}
