<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'price', 'instructor', 'category', 
        'difficulty_level', 'duration', 'ratings', 'course_format', 
        'certification', 'release_date', 'popularity',
    ];
}

