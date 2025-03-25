<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        // User::factory(10)->create();
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin'
            ],
            [
                'name' => 'nazih',
                'email' => 'nazih@gmail.com',
                'password' => Hash::make('nazih123'),
                'role' => 'user'
            ]
        ]);
        $this->call(SettingSeeder::class);
    }
}
