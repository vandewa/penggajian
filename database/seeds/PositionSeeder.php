<?php

use App\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('positions')->delete();


        Position::updateOrCreate([
            'id' => 2,
            'position' => 'Advisor',
            'salary' => 15000000,
            'job_allowance' => 0
        ]);
        Position::updateOrCreate([
            'id' => 3,
            'position' => 'Divisi Legal',
            'salary' => 2000000,
            'job_allowance' => 0
        ]);
        Position::updateOrCreate([
            'id' => 4,
            'position' => 'Sekretaris',
            'salary' => 5000000,
            'job_allowance' => 0
        ]);
        Position::updateOrCreate([
            'id' => 5,
            'position' => 'HRD',
            'salary' => 4600000,
            'job_allowance' => 0
        ]);
        Position::updateOrCreate([
            'id' => 6,
            'position' => 'OB',
            'salary' => 2500000,
            'job_allowance' => 0
        ]);
        Position::updateOrCreate([
            'id' => 7,
            'position' => 'Direktur',
            'salary' => 30000000,
            'job_allowance' => 0
        ]);
    }
}
