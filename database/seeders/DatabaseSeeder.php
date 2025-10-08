<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        {
        // A few specific offers:
        DB::table('offers')->insert([
            'title' => 'Luxury Apartment in Paris',
            'description' => 'Near the Eiffel Tower.',
            'city_id' => 3,
            'rent' => 1800,
            'available_from' => '2025-12-01',
        ]);

        // Plus 10 random offers for testing:
        Offer::factory(10)->create();
    }


        DB::table('users')->insert([
            'username' => 'Test User',
            'role' => 'admin',
            'email' => 'test@example.com',
            'password_hash' => Hash::make('password'),
        ]);
    }
}
