<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'administrator',
            'email'=>'admin@admin',
            'email_verified_at'=>'2021-10-21 22:43:50',
            'password'=>HASH::make('admin'),
            'role'=>'0'
                                       ]);
    }
}
