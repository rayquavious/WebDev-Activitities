<?php

namespace Database\Seeders;

use App\Models\Students;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed 1000 users using factory
         $this->call(ManagerSeeder::class);
        User::factory(10)->create();

        User::updateOrCreate(
    ['email' => 'test@example.com'], // Search condition
    [
        'name' => 'Test User',
        'gender' => 'Test Gender',
        'password' => bcrypt('password123'), // Add password if needed
    ]
);
    }
}
