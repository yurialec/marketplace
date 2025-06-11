<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        // Usuário Comum
        User::create([
            'name' => 'Usuário Comum',
            'email' => 'user@email.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
    }
}
