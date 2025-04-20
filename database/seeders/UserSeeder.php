<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'admin',
            'email' => 'Admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345'),
            ],
            [
            'name' => 'user',
            'email' => 'User@gmail.com',
            'role' => 'user',
            'password' => bcrypt('12345'),
            ],
            [
            'name' => 'pembina',
            'email' => 'Pembina@gmail.com',
            'role' => 'pembina',
            'password' => bcrypt('12345'),
            ],
            [
            'name' => 'ketua',
            'email' => 'Ketua@gmail.com',
            'role' => 'ketua',
            'password' => bcrypt('12345'),
            ],
            
        ]);
    }
}
