<?php

use Illuminate\Database\Seeder;
use app\Employee;

class employeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('employees')->truncate();



        $employees = array(
            array(  'name' => 'local_test',
                'email' => 'nathan@abc.com',
                'password' => Hash::make('local'),
            )
        );

        // make sure you do the insert
        DB::table('employees')->insert($employees);

    }
}
