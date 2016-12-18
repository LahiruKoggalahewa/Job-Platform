<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->char('type')->default('s');
            $table->char('role')->default('d');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
     * type char values
     * s = Employment seeker
     * p = Employment provider
     * i =  Education institute
     */

    /**
     * Role char values
     * d = default (cannot do changes)
     * a = admin
     * e = editor
     *
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
