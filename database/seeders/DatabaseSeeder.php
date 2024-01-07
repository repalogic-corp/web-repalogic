<?php

namespace Database\Seeders;

use Database\Seeders\AkTahunAjarSemesterSeeder;
use Database\Seeders\AkProgramKeahlianSeeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AkTahunAjarSemesterSeeder::class,
            AkProgramKeahlianSeeder::class,

            //Tambahkan seeder lainnya jika ada
        ]);
    }
}
