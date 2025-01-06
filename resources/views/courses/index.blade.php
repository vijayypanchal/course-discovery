<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Discovery</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Courses</h1>

        <form method="GET" action="{{ url('/courses') }}" class="mb-4">
            <input type="text" name="search" placeholder="Search for courses..." class="p-2 border rounded">
            <button type="submit" class="ml-2 p-2 bg-blue-500 text-white rounded">Search</button>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($courses as $course)
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="font-semibold text-lg">{{ $course->title }}</h2>
                    <p class="text-sm text-gray-500">{{ $course->instructor }}</p>
                    <p class="text-sm">{{ $course->category }}</p>
                    <p class="text-gray-700">{{ $course->description }}</p>
                    <p class="font-bold text-lg">${{ $course->price }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>