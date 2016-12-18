<?php

use Illuminate\Database\Seeder;

class ESTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->truncate();
        //
        $employees =   DB::table('employees')->insert([
                    'es_id' => str_random(1),
                    'resume' => null,
                    'gender' => str_random(10),
                    'mobile_number' => str_random(10),
                    'nationality' => str_random(10),
                    'birth_date' => date("Y-m-d"),
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
        // make sure you do the insert
        DB::table('employees')->insert($employees);
    }
}
