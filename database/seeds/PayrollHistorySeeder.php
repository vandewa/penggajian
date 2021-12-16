<?php

use App\PayrollHistory;
use App\Position;
use Illuminate\Database\Seeder;

class PayrollHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PayrollHistory::truncate();

        $z = Carbon\Carbon::now()->subMonth()->endOfMonth();

        PayrollHistory::updateOrCreate([
            'id' => 1,
            'employee_id' => 2,
            'gaji_pokok' => 15000000,
            'penambahan' => 0,
            'potongan' => 0,
            'gaji_bersih' => 15000000,
            'created_at' => $z
        ]);

        PayrollHistory::updateOrCreate([
            'id' => 2,
            'employee_id' => 3,
            'gaji_pokok' => 2000000,
            'penambahan' => 8000000,
            'potongan' => 0,
            'gaji_bersih' => 10000000,
            'created_at' => $z
        ]);

        PayrollHistory::updateOrCreate([
            'id' => 3,
            'employee_id' => 4,
            'gaji_pokok' => 2000000,
            'penambahan' => 7000000,
            'potongan' => 0,
            'gaji_bersih' => 9000000,
            'created_at' => $z
        ]);

        PayrollHistory::updateOrCreate([
            'id' => 4,
            'employee_id' => 5,
            'gaji_pokok' => 5000000,
            'penambahan' => 280000,
            'potongan' => 0,
            'gaji_bersih' => 5280000,
            'created_at' => $z
        ]);

        PayrollHistory::updateOrCreate([
            'id' => 5,
            'employee_id' => 6,
            'gaji_pokok' => 4600000,
            'penambahan' => 630000,
            'potongan' => 0,
            'gaji_bersih' => 5230000,
            'created_at' => $z
        ]);

        PayrollHistory::updateOrCreate([
            'id' => 6,
            'employee_id' => 7,
            'gaji_pokok' => 2000000,
            'penambahan' => 750000,
            'potongan' => 0,
            'gaji_bersih' => 270000,
            'created_at' => $z
        ]);

        PayrollHistory::updateOrCreate([
            'id' => 7,
            'employee_id' => 8,
            'gaji_pokok' => 2500000,
            'penambahan' => 0,
            'potongan' => 0,
            'gaji_bersih' => 2500000,
            'created_at' => $z
        ]);

        PayrollHistory::updateOrCreate([
            'id' => 8,
            'employee_id' => 9,
            'gaji_pokok' => 30000000,
            'penambahan' => 0,
            'potongan' => 0,
            'gaji_bersih' => 30000000,
            'created_at' => $z
        ]);
    }
    
}
