<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Hudson',
            'lastName' => 'Tadeu',
            'email' => 'contato@hudson.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
