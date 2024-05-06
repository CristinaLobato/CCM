<?php

namespace Database\Seeders;
use App\Models\Baja;
use App\Models\TCAT;
use App\Models\TCATP;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Baja::factory(5)->create();
        TCAT::factory(5)->create();
        TCATP::factory(5)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
