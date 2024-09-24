<?php

namespace Database\Seeders;

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
        $this->call([
            CategorySeeder::class,
        ]);
        $this->call([
            MaterialSeeder::class,
        ]);
        $this->call([
            SchoolSeeder::class,
        ]);
        $this->call([
            SectionSeeder::class,
        ]);
        $this->call([
            TeacherSeeder::class,
        ]);

    }
}
