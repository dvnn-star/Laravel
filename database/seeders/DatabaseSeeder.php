<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::firstOrCreate([
            'name' => 'admin',
            'email' => 'delvintan@gmail.com',
            'password' => 'delvin12',
            'roles' => 'admin'
        ]);

        $this->call([
            MentorSeeder::class,
            siswaSeeder::class,
            UserSeeder::class
        ]);
    }
}
