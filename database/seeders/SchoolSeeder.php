<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        School::create([
            'name' => 'مركز اونلاين التعليمي',
            'description' => '',
        ]);
        School::create([
            'name' => 'Math Plus Syria',
            'description' => '',
        ]);
        School::create([
            'name' => 'MK Academy',
            'description' => '',
        ]);
        School::create([
            'name' => 'Youth College',
            'description' => '',
        ]);

    }
}
