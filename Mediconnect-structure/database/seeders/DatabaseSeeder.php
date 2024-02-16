<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\specialitie::create([
            'name' => 'Test 1',
      
        ]);
        \App\Models\specialitie::create([
            'name' => 'Test 2',
      
        ]);
        \App\Models\specialitie::create([
            'name' => 'Test 3',
      
        ]);
    }
}
