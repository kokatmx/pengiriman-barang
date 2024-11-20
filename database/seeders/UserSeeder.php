<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name" => "admin",
            "email" => "admin@example.com",
            "password" => bcrypt("admin"),
            "role" => "admin"
        ]);
        DB::table("users")->insert([
            "name" => "kurir",
            "email" => "kurir@example.com",
            "password" => bcrypt("kurir"),
            "role" => "courier"
        ]);
    }
}
