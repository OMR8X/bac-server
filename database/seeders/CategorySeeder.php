<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'قواعد',
            'description' => '',
        ]);
        Category::create([
            'name' => 'قوانين',
            'description' => '',
        ]);
        Category::create([
            'name' => 'اختبارات',
            'description' => '',
        ]);
        Category::create([
            'name' => 'حلول',
            'description' => '',
        ]);
        Category::create([
            'name' => 'شروح',
            'description' => '',
        ]);
        Category::create([
            'name' => 'أسئلة',
            'description' => '',
        ]);
        Category::create([
            'name' => 'أسئلة دورات',
            'description' => '',
        ]);
        Category::create([
            'name' => 'نوط',
            'description' => '',
        ]);
        Category::create([
            'name' => 'نماذج',
            'description' => '',
        ]);
        Category::create([
            'name' => 'رسومات',
            'description' => '',
        ]);
        Category::create([
            'name' => 'مكثفات',
            'description' => '',
        ]);
        Category::create([
            'name' => 'كتب',
            'description' => '',
        ]);
        Category::create([
            'name' => 'ملحق',
            'description' => '',
        ]);
        Category::create([
            'name' => 'سلم',
            'description' => '',
        ]);
        Category::create([
            'name' => 'ملخص',
            'description' => '',
        ]);
        Category::create([
            'name' => 'مراجعة',
            'description' => '',
        ]);
        Category::create([
            'name' => 'مسائل',
            'description' => '',
        ]);
        Category::create([
            'name' => 'أفكار',
            'description' => '',
        ]);
    }
}
