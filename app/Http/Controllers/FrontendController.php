<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /* public function index(Request $request)
    {
        $courses = Course::query();
    
        if ($request->has('search')) {
            $courses->where('title', 'like', '%' . $request->search . '%');
        }
    
        $courses = $courses->get();
    
        return view('courses.index', compact('courses'));
    }*/

	public function index()
    {
        return view('frontend.index');
    }

    public function fetchCourses(Request $request)
    {
        $courses = Course::query();

        if ($request->filled('searchstr')  && $request->searchstr!=null) {
            $courses->where('title', 'like', '%' . $request->searchstr . '%');
			$searchStr = $request->searchstr;
			$courses->where(function ($query) use ($searchStr) {
				$query->where('title', 'like', "%{$searchStr}%")
					  ->orWhere('description', 'like', "%{$searchStr}%");
			});
        }

        if ($request->filled('category')  && $request->category!=null) {
            $courses->where('category', $request->category);
        }

        if ($request->filled('price') && $request->price!=null) {
            $courses->where('price', $request->price);
        }

        if ($request->filled('difficulty') && $request->difficulty!=null) {
            $courses->where('difficulty_level', $request->difficulty);
        }

        if ($request->filled('duration') && $request->duration!=null) {
            $courses->where('duration', $request->duration);
        }

        if ($request->filled('ratings') && $request->ratings!=null) {
            $courses->where('ratings', '>=', (int)$request->ratings);
        }

        if ($request->filled('courseformat') && $request->courseformat!=null) {
            $courses->where('course_format', $request->courseformat);
        }

        if ($request->filled('certification') && $request->certification!=null) {
            $courses->where('certification', $request->certification);
        }

        if ($request->filled('releasedate') && $request->releasedate!=null) {
            // Example logic for release date filtering
            $releaseDate = match ($request->releasedate) {
                'Last 30 days' => now()->subDays(30),
                'Last 6 months' => now()->subMonths(6),
                'Last 1 year' => now()->subYear(),
                default => null,
            };
            if ($releaseDate) {
                $courses->where('release_date', '>=', $releaseDate);
            }
        }

        if ($request->filled('popularity') && $request->popularity!=null) {
            //$courses->orderBy('popularity', 'desc');
			$courses->where('popularity', $request->popularity);
        }

        return response()->json($courses->get());
    }
}

