<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Pengirim 1',
            'email' => 'pengirim1@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'pengirim',
        ]);
        DB::table('users')->insert([
            'nama' => 'Pengirim 2',
            'email' => 'pengirim2@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'pengirim',
        ]);
        DB::table('users')->insert([
            'nama' => 'Penerima 1',
            'email' => 'penerima1@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'penerima',
        ]);
        DB::table('users')->insert([
            'nama' => 'Penerima 2',
            'email' => 'penerima2@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'penerima',
        ]);
        DB::table('users')->insert([
            'nama' => 'Kurir 1',
            'email' => 'kurir1@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'kurir',
        ]);
        DB::table('users')->insert([
            'nama' => 'Kurir 2',
            'email' => 'kurir2@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'kurir',
        ]);
        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('1234567890'),
            'role' => 'admin',
        ]);
    }
}
