<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        User::factory()->create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@markit.test',
        ]);

        $this->call([
            CountrySeeder::class,
            CitySeeder::class,
            AreaSeeder::class,
            CategorySeeder::class,
            CurrencySeeder::class,
            ProductSeeder::class,
        ]);

    }
}
