<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
		//print_r($request,)
        $courses = Course::query();

        if ($request->has('searchstr') && $request->searchstr!=null) {
                $searchStr = $request->searchstr;
				$courses->where(function ($query) use ($searchStr) {
					$query->where('title', 'like', "%{$searchStr}%")
						  ->orWhere('description', 'like', "%{$searchStr}%");
				});
        }

		if ($request->has('category') && $request->category!=null) {
            $courses->where('category', $request->category);
        }

        if ($request->has('difficulty') && $request->difficulty!=null) {
            $courses->where('difficulty_level', $request->difficulty);
        }

        if ($request->has('price') && $request->price!=null) {
            $courses->where('price', $request->price);
        }

        if ($request->has('duration') && $request->duration!=null) {
            $courses->where('duration', $request->duration);
        }

		if ($request->has('ratings') && $request->ratings!=null) {
            $courses->where('ratings', $request->ratings);
        }

		if ($request->has('courseformat') && $request->courseformat!=null) {
            $courses->where('course_format', $request->courseformat);
        }

		if ($request->has('certification') && $request->certification!=null) {
            $courses->where('certification', $request->certification);
        }

		if ($request->has('releasedate') && $request->releasedate!=null) {
            $courses->where('release_date', $request->releasedate);
        }

		if ($request->has('popularity') && $request->popularity!=null) {
            $courses->where('popularity', $request->popularity);
        }

        return response()->json($courses->get(), 200);
    }

    public function show($id)
    {
        $course = Course::find($id);
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
        return response()->json($course, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'instructor' => 'required|string',
            'category' => 'required|string',
            'difficulty_level' => 'required|string',
            'duration' => 'required|string',
            'ratings' => 'required|string',
            'course_format' => 'required|string',
            'certification' => 'required|string',
            'release_date' => 'required|string',
            'popularity' => 'required|string',
        ]);

        $course = Course::create($validated);
        return response()->json($course, 201);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'string|max:255',
            'description' => 'string',
            'price' => 'numeric',
            'instructor' => 'string',
            'category' => 'string',
            'difficulty_level' => 'string',
            'duration' => 'string',
            'ratings' => 'string',
            'course_format' => 'string',
            'certification' => 'string',
            'release_date' => 'string',
            'popularity' => 'string',
        ]);

        $course->update($validated);
        return response()->json($course, 200);
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $course->delete();
        return response()->json(['message' => 'Course deleted'], 200);
    }
}