<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'akro',
            'email' => 'akro@gmail.com',
            'phone' => '085784723458',
            'password' => 'password',
        ])->assignRole('customers');

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '085784723459',
            'password' => 'password',
        ])->assignRole('admin');
    }
    }

