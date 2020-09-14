<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('guide_id'); // foreign key -> references to 'id' on tour_guides migration
//            $table->foreign('guide_id')->references('id')->on('tour_guides');
            $table->unsignedBigInteger('customer_id'); // foreign key -> references to 'id' on customer_accounts migration
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on('areas');
            $table->integer('party_number');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->double('total_cost');
            $table->integer('status');// -1 là hủy( detail status = 6 ) // 0 pending( detail status = 1,2,3,4,) // 1 done  ( detail status = 5)
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
        Schema::dropIfExists('transactions');
    }
}
