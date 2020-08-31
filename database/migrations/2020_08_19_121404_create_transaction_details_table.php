<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_detail_id'); // foreign key -> references 'id' on transactions migration
            $table->foreign('transaction_detail_id')->references('id')->on('transactions');
            $table->unsignedBigInteger('guide_id'); // foreign key -> references 'id' on tour_guides migration
            $table->foreign('guide_id')->references('id')->on('tour_guides');
            $table->string('guide_name');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('status');// 0 chưa thanh toán // 1 đã thanh toán// -1 hủy
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
        Schema::dropIfExists('transaction_details');
    }
}
