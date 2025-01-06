<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::query();

        if ($request->has('search')) {
            $courses->where('title', 'like', '%' . $request->search . '%');
        }

        $courses = $courses->get();

        return view('courses.index', compact('courses'));
    }
}

