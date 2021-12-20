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
            'username' => 'machmudrachimi@gmail.com',
            'password' => bcrypt('machmudrachimi@gmail.com'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 3,
            'username' => 'jarodiogo@gmail.com',
            'password' => bcrypt('jarodiogo@gmail.com'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 4,
            'username' => 'dolvianusnana@gmail.com',
            'password' => bcrypt('olvianusnana@gmail.com'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 5,
            'username' => 'chikaparamitha@gmail.com',
            'password' => bcrypt('chikaparamitha@gmail.com'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 6,
            'username' => 'tryhitaayu@gmail.com',
            'password' => bcrypt('tryhitaayu@gmail.com'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 7,
            'username' => 'christinasidauruk@gmail.com',
            'password' => bcrypt('christinasidauruk@gmail.com'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 8,
            'username' => 'lingga@gmail.com',
            'password' => bcrypt('lingga@gmail.com'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 9,
            'username' => 'dinnyhadiyani@gmail.com',
            'password' => bcrypt('dinnyhadiyani@gmail.com'),
            'is_active' => 1
        ]);
    }
    
}
