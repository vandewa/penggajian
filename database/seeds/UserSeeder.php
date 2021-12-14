<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();


        User::updateOrCreate([
            'id' => 1,
            'username' => 'superadmin@app.com',
            'password' => bcrypt('password'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 2,
            'username' => 'herdi@app.com',
            'password' => bcrypt('herdi'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 3,
            'username' => 'devan@app.com',
            'password' => bcrypt('devan'),
            'is_active' => 1
        ]);
    }
}
