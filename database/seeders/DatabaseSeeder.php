<?php

namespace Database\Seeders;
Use App\Models\Curso;
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
        Curso::factory(50)->create();
        User::factory(50)->create();

        
    }
}
