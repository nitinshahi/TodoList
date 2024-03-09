<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Uzen ',
            'email' => 'uzen@gmail.com',
            'password' => Hash::make('uzen123'),
            'number' => '981026845',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Ram ',
            'email' => 'ram@gmail.com',
            'password' => Hash::make('ram123'),
            'number' => '984026866',
        ]);
    }
}
