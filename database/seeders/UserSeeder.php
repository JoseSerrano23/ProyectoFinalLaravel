<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@usuario.com',
            'password' => bcrypt('usuario')
        ])->assignRole('Usuario');
    }
}
