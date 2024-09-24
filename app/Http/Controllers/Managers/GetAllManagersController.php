<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Material;
use App\Models\School;
use App\Models\Section;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GetAllManagersController extends Controller
{

    public function __invoke(Request $request)
    {
        //
        $categories = Category::all();
        //
        $materials= Material::all();
        //
        $schools= School::all();
        //
        $sections= Section::all();
        //
        $teachers=Teacher::all();
        //
        return response()->json([
        'status' => 'success',
        'data' => [
        [    "managers"=>[
            "categories"=>$categories,
            "materials"=>$materials,
            "schools"=>$schools,
            "sections"=>$sections,
            "teachers"=>$teachers,
        ],]
        ]
        ], 200);
    }
}
