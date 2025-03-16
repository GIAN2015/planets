<?php

namespace Database\Seeders;

use App\Models\planets;  // Usar el nombre correcto del modelo en minúsculas

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        planets::factory(10)->create();  // Usar planets::factory()
    }
}
