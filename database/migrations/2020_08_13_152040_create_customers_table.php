<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->unsignedBigInteger('account_id'); // foreign key -> references to 'id' on table 'accounts'
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->string('phone');
            $table->integer('year_of_birth');
            $table->string('email');
            $table->string('address');
            $table->integer('status'); // 1. Active | 2. Inactive | 3. Deleted
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
        Schema::dropIfExists('customers');
    }
}
