<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\City;
use App\Models\User;
use App\Models\Offer;
use function Symfony\Component\String\s;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Create the admin@admin.com user
        $admin = User::query()->firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'username'      => 'admin',        // if you have this column
                'role'          => 'admin',        // optional but realistic
                'password' => Hash::make('password'), // prior ist was 'admin' or just 'password' if your model uses 'password'
            ]
        );

        //Seed (create) some Cities
        $cities = collect(['Berlin', 'Vienna', 'Lisbon', 'Paris', 'Munich'])
            ->map(fn ($name) => City::query()->firstOrCreate(['name' => $name]));

        //create offers linked to admin user and random city
        Offer::factory()
            ->count(20)
            ->state(fn () => [
                'user_id' => $admin->id,
                'city_id' => $cities->random()->id,
            ])
            ->create();


    }
}



// With DB:: I write static rows manually
/*
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
*/
