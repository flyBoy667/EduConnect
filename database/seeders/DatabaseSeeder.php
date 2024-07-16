<?php

namespace Database\Seeders;

use App\Models\PersonnelAdministratif;
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

        $user = User::factory()->create();

        PersonnelAdministratif::factory()->create([
            'user_id' => $user->id,
            'role' => 1, // Administratif
        ]);
    }
}
