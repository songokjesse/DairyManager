<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('amount')->nullable();
            $table->float('MilkingSession')->nullable();
            $table->integer('animal_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->foreign('user_id')->references('id')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productions');
    }
}
