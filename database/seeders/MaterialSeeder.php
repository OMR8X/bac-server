<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create([
            'name' => 'الرياضيات',
            'description' => '',
        ]);
        Material::create([
            'name' => 'الفيزياء',
            'description' => '',
        ]);
        Material::create([
            'name' => 'الكيمياء',
            'description' => '',
        ]);
        Material::create([
            'name' => 'علم الأحياء',
            'description' => '',
        ]);
        Material::create([
            'name' => 'التربية الوطنية',
            'description' => '',
        ]);
        Material::create([
            'name' => 'اللغة العربية',
            'description' => '',
        ]);
        Material::create([
            'name' => 'اللغة الإنجليزية',
            'description' => '',
        ]);
        Material::create([
            'name' => 'اللغة الروسية',
            'description' => '',
        ]);
        Material::create([
            'name' => 'اللغة الفرنسية',
            'description' => '',
        ]);
        Material::create([
            'name' => 'التربية الدينية الإسلامية',
            'description' => '',
        ]);
        Material::create([
            'name' => 'التربية الدينية المسيحية',
            'description' => '',
        ]);
        Material::create([
            'name' => 'الجغرافيا',
            'description' => '',
        ]);
        Material::create([
            'name' => 'التاريخ',
            'description' => '',
        ]);
        Material::create([
            'name' => 'الفلسفة',
            'description' => '',
        ]);

    }
}
