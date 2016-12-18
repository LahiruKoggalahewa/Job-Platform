<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationInstituteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_institute', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ei_id')->unsigned();
            $table->string('address_1');
            $table->string('address_2');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('type');
            $table->string('phone');
            $table->date('start_date');
            $table->timestamps();

            $table->foreign('ei_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
