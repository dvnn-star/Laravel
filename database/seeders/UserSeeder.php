<?php

namespace Database\Seeders;

use App\Models\siswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          User::firstOrCreate(
            ['email' => 'delvintan@gmail.com'],
            [
            'name' => 'admin',
            'password' => Hash::make('delvin12'),
            'roles' => 'admin'
        ]);
        User::factory()->count(5)->create();
    }
}
