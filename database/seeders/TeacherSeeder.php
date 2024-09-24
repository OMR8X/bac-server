<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'name' => 'فارس جغل',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'وضاح معلا',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'عبد العزيز شملان',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'عادل طنيش',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'علي شباط',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'محمد لبابيدي',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'فراس النجار',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'أمير سكيكر',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'همام حمدان',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'عبد اللطيف ضعيف',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'رامي تكريتي',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'رابح الخليل',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'طارق غبرا',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'سامح الغلاب',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'أسامة الحصري',
            'description' => '',
        ]);
        Teacher::create([
            'name' => 'هند حج حسن',
            'description' => '',
        ]);

        Teacher::create([
            'name' => 'أحمد إسماعيل',
            'description' => '',
        ]);


    }
}
