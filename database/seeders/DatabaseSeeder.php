<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        DB::table('contacts')->insert([

            [
                'name' => 'Harry Potter',
                'email' => Str::random(10).'@example.com',
                'phone' => random_int(1000000000,9999999999),
                'address' => fake()->sentence(10)
            ],

            [
                'name' => 'Charry Potter',
                'email' => Str::random(10).'@example.com',
                'phone' => random_int(1000000000,9999999999),
                'address' => fake()->sentence(10)
            ],

            [
                'name' => 'Prisoner of Azkaban',
                'email' => Str::random(10).'@example.com',
                'phone' => random_int(1000000000,9999999999),
                'address' => fake()->sentence(10)
            ],

            [
                'name' => 'Tom Bruce',
                'email' => Str::random(10).'@example.com',
                'phone' => random_int(1000000000,9999999999),
                'address' => fake()->sentence(10)
            ],

            [
                'name' => 'Cindrella Tabassum',
                'email' => Str::random(10).'@example.com',
                'phone' => random_int(1000000000,9999999999),
                'address' => fake()->sentence(10)
            ],

            [
                'name' => 'Naina Bose',
                'email' => Str::random(10).'@example.com',
                'phone' => random_int(1000000000,9999999999),
                'address' => fake()->sentence(10)
            ],

            [
                'name' => 'The Shining Mina',
                'email' => Str::random(10).'@example.com',
                'phone' => random_int(1000000000,9999999999),
                'address' => fake()->sentence(10)
            ],

            [
                'name' => 'Raju Mia',
                'email' => Str::random(10).'@example.com',
                'phone' => random_int(1000000000,9999999999),
                'address' => fake()->sentence(10)
            ],

            [
                'name' => 'Tomy Mia',
                'email' => Str::random(10).'@example.com',
                'phone' => random_int(1000000000,9999999999),
                'address' => fake()->sentence(10)
            ]

        ]);

    }
}
