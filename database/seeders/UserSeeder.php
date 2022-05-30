<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Super Admin',
            'last_name' => 'superadmin',
            'email' => 'admin@cyberolympus.com',
            'password' => bcrypt('cyberadmin'),
            'pin' => NULL,
            'phone' => '082220093197',
            'account_type' => 1,
            'account_role' => 'superadmin',
            'photo' => 'avatar.png',
            'last_login' => '2019-09-27 21:46:11',
            'account_status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
