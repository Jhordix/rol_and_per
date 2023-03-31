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
            'name' => 'Jhordix',
            'email' => 'jhordix@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Admin');
        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('1234567891')
        ])->assignRole('User');

    }
}
