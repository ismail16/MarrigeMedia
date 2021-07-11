<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'u_id' => 1111201,
            'role_id' => 1,
            'first_name' => "First Admin",
            'last_name' => 'Last Admin',
            'mobile' => '01717111111',
            'email' => 'admin@email.com',
            'guardian_mobile' => '01717111111',
            'country' => 'Bangladesh',
            'district' => 'Dhaka',
            'gender' => 'Male',
            'marital_status' => 'Male',
            'profession' => 'Teacher',
            'birthday' => '10-12-2020',
            'createdby' => 'Self',
            'religion' => 'Islam',
            'social_order' => 'null',
            'looking_for' => 'female',
            'address' => 'Dhaka',
            'password' => bcrypt('11111111'),
            'agreement' => '1',
            'status' => '1',
        ]);


        DB::table('users')->insert([
            'u_id' => 1111202,
            'role_id' => 2,
            'first_name' => "First author",
            'last_name' => 'Last author',
            'mobile' => '01717222222',
            'email' => 'author@email.com',
            'guardian_mobile' => '01717111111',
            'country' => 'Bangladesh',
            'district' => 'Dhaka',
            'gender' => 'Male',
            'marital_status' => 'Male',
            'profession' => 'Teacher',
            'birthday' => '10-12-2020',
            'createdby' => 'Self',
            'religion' => 'Islam',
            'social_order' => 'null',
            'looking_for' => 'female',
            'address' => 'Dhaka',
            'password' => bcrypt('22222222'),
            'agreement' => '1',
            'status' => '1',
        ]);
    }
}
