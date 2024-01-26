<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // DB::table('admin')->insert([
        //     'admin_name' => 'Site Admin',
        //     'admin_email' => 'admin@example.com',
        //     'user_name' => 'admin',
        //     'user_pass' => Hash::make('123456')
        // ]);


        // DB::table('general_settings')->insert([
        //     'com_name' => 'Kaushal Nishad | HRM',
        //     'com_logo' => 'default.png',
        //     'com_email' => 'kaushalnishad212@email.com',
        //     'cur_format' => '$',
        //     'clock_in_time' => '09:00',
        //     'clock_in_time' => '18:00'
        // ]);
    }
}
