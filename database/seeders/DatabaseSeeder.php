<?php

namespace Database\Seeders;

use App\Models\Teacher;
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
        Teacher::insert([
            'teacher_name'=> 'Christina Ardiyanti, S.Pd',
            'NIP' => '123456789',
            'job' => 'Kepala Sekolah',
            'image' => 'teachers/kepsek.png',
            'starting_year' => '2010',
        ]);
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
