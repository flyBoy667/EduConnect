<?php

namespace Database\Seeders;

use App\Models\PersonnelAdministratif;
use App\Models\Professeur;
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

        $admin = User::factory()->create();
        $professeur = User::factory()->create();

        PersonnelAdministratif::factory()->create([
            'user_id' => $admin->id,
            'role' => 1, // Administratif
        ]);

        Professeur::factory()->create([
            'user_id' => $professeur->id,
        ]);


    }
}
