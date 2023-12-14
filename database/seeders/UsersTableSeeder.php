<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //Admin
            [
                'full_name'=>'rama Admin',
                'username'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('12345678'),
                'role'=>'admin',
                'status'=>'active',
            ],

            //Vendor
            [
                'full_name'=>'josua Vendor',
                'username'=>'Vendor',
                'email'=>'vendor@gmail.com',
                'password'=>Hash::make('josua123'),
                'role'=>'vendor',
                'status'=>'active',
            ],
            //Customer
            [
                'full_name'=>'radit Customer',
                'username'=>'Customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('radit123'),
                'role'=>'customer',
                'status'=>'active',
            ],

            ]);
    }
}
