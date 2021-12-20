<?php

use App\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $z = Carbon\Carbon::now()->subMonth()->endOfMonth();

        Employee::updateOrCreate([
            'id' => 2,
            'full_name' => 'DR. H. Machmud Rachimi SH, MH.',
            'address' => 'Cakung, Jakarta, Indonesia',
            'phone' => '08123456789',
            'marital_status' => 1,
            'number_of_children' => 1,
            'profile_pic' => 'default.png',
            'user_id' => 2,
            'position_id' => 2,
            'created_at' => $z
        ]);

        Employee::updateOrCreate([
            'id' => 3,
            'full_name' => 'L. Jaro Diogo, SH',
            'address' => 'Meikarta, Jakarta, Indonesia',
            'phone' => '08912345678',
            'marital_status' => 1,
            'number_of_children' => 3,
            'profile_pic' => 'default.png',
            'user_id' => 3,
            'position_id' => 3,
            'created_at' => $z
        ]);

        Employee::updateOrCreate([
            'id' => 4,
            'full_name' => 'Dolvianus Nana, SH',
            'address' => 'Kembangan, Jakarta, Indonesia',
            'phone' => '0812345671',
            'marital_status' => 0,
            'number_of_children' => 0,
            'profile_pic' => 'default.png',
            'user_id' => 4,
            'position_id' => 3,
            'created_at' => $z
        ]);

        Employee::updateOrCreate([
            'id' => 5,
            'full_name' => 'Chika Paramitha',
            'address' => 'Menteng, Jakarta, Indonesia',
            'phone' => '0812345672',
            'marital_status' => 0,
            'number_of_children' => 0,
            'profile_pic' => 'default.png',
            'user_id' => 5,
            'position_id' => 4,
            'created_at' => $z
        ]);

        Employee::updateOrCreate([
            'id' => 6,
            'full_name' => 'Tryhita Ayu Gustanti, S. Kom',
            'address' => 'Kebayoran Baru, Jakarta, Indonesia',
            'phone' => '0812345673',
            'marital_status' => 1,
            'number_of_children' => 1,
            'profile_pic' => 'default.png',
            'user_id' => 6,
            'position_id' => 5,
            'created_at' => $z
        ]);

        Employee::updateOrCreate([
            'id' => 7,
            'full_name' => 'Christina Sidauruk, SH',
            'address' => 'Kalideres, Jakarta, Indonesia',
            'phone' => '0812345674',
            'marital_status' => 1,
            'number_of_children' => 1,
            'profile_pic' => 'default.png',
            'user_id' => 7,
            'position_id' => 3,
            'created_at' => $z
        ]);

        Employee::updateOrCreate([
            'id' => 8,
            'full_name' => 'Lingga',
            'address' => 'Cengkareng, Jakarta, Indonesia',
            'phone' => '0812345675',
            'marital_status' => 1,
            'number_of_children' => 1,
            'profile_pic' => 'default.png',
            'user_id' => 8,
            'position_id' => 6,
            'created_at' => $z
        ]);
        
        Employee::updateOrCreate([
            'id' => 9,
            'full_name' => 'Dinny Nur Hadiyani SH., LL.M.',
            'address' => 'Palmerah, Jakarta, Indonesia',
            'phone' => '0812345676',
            'marital_status' => 0,
            'number_of_children' => 0,
            'profile_pic' => 'default.png',
            'user_id' => 9,
            'position_id' => 7,
            'created_at' => $z
        ]);

        Employee::updateOrCreate([
            'id' => 10,
            'full_name' => 'Admin',
            'address' => '',
            'phone' => '',
            'marital_status' => 0,
            'number_of_children' => 0,
            'profile_pic' => 'logooo.png',
            'user_id' => 1,
            'position_id' => 5,
            'created_at' => $z
        ]);
    }
}
