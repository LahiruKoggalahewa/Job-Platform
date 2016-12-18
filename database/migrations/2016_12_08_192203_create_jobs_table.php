<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('job_id');
            $table->integer('employer_id')->unsigned();
            $table->string('job_title');
            $table->string('location');
            $table->string('city');
            $table->string('job_role');
            $table->string('company_industry');
            $table->string('job_description');
            $table->string('employment_status');
            $table->string('employment_type');
            $table->string('career_level');
            $table->string('experiance');
            $table->string('major');
            $table->string('degree');
            $table->timestamps();

            $table->foreign('employer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
