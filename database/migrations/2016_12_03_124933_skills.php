<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Skills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('skills', function (Blueprint $table) {
            $table->increments('table_id');
            $table->integer('es_id')->unsigned();
            $table->string('skill1');
            $table->string('skill2');
            $table->string('skill3');
            $table->string('skill4');
            $table->string('skill5');
            $table->string('skill6');
            $table->string('skill7');
            $table->string('skill8');
            $table->string('skill9');
            $table->string('skill10');
            $table->timestamps();

            $table->foreign('es_id')->references('es_id')->on('employees');
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
