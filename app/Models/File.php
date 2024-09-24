<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year',
        'section_id',
        'material_id',
        'teacher_id',
        'school_id',
    ];
}
