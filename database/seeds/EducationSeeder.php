<?php

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('educations')->delete();
        
        \DB::table('educations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'SD',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'SMP',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'SMA / SMK',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Diploma I',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Diploma II',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Diploma III',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Diploma IV',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'S1',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'S2',
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
        ));
    }
}
