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
        User::factory(1000)->create();

        // Seed Students table with sample data
        Students::create([
            'name' => 'Jaymark Duran',
            'age' => 20,
        ]);

        Students::create([
            'name' => 'JP Moto',
            'age' => 22,
        ]);
    }
}
