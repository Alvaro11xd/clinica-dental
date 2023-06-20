<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'=>'Alvaro Villanueva',
            'email'=>'alvaro@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Diego',
            'email'=>'diego@gmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Doctor');

        User::factory(20)->create();
    }
}
