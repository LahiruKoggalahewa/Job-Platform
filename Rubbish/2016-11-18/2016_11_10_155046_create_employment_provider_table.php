<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_provider', function (Blueprint $table) {
            $table->increments('ep_id');
            $table->integer('employer_id')->unsigned();
            $table->string('company_name');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('size');
            $table->string('type');
            $table->string('phone');
            $table->date('start_date');
            $table->timestamps();

            $table->foreign('ep_id')->references('id')->on('users');
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
