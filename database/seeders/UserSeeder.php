<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Pembimbing Siswa',
        //     'email' => 'pembimbing@gmail.com',
        //     'password' => Hash::make('pembimbing'),
        //     'role' => 'ps'
        // ]);

        User::create([
            'name' => 'Administrator',       
            'email' => 'adminabsen@gmail.com',
            'password' => Hash::make('adminabsen'),
            'role' => 'admin '
        ]);
    }
}
