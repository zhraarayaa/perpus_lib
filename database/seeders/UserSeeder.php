<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Dimas',
            'email' => 'dimas@gamelab.id',
            'password' => bcrypt('dimas123'),
        ]);
    }
}