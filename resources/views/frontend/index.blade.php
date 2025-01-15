<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Discovery</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <center><h1>Course Discovery</h1></center>
    <div class="flex flex-col md:flex-row h-screen">
        <!-- Navigation Menu -->
        <div class="bg-gray-800 text-white w-full md:w-64 md:relative transition-all duration-300 ease-in-out">
            <button id="toggleNavMenu" class="text-white flex justify-between items-center w-full p-4 md:hidden">
                <span class="text-xl font-bold">Menu</span>
                <span id="navMenuIcon">▼</span>
            </button>
            <nav id="navContent" class="hidden md:block">
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Home</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Categories</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">About</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Contact</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col md:flex-row">
            @include('frontend.partials.filters')
            <main id="courseContainer" class="flex-1 p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Dynamic Course Content -->
            </main>
        </div>
    </div>

    <script>
        //const apiBaseUrl = '{{ url('/api/courses') }}';
		const apiBaseUrl = 'http://127.0.0.1:8000/api/courses'; // Set API Base URL

        async function fetchCourses(filters = {}) {
            try {
                const queryString = new URLSearchParams(filters).toString();
                const response = await fetch(`${apiBaseUrl}?${queryString}`);
                const data = await response.json();

                renderCourses(data);
            } catch (error) {
                console.error('Error fetching courses:', error);
            }
        }

        function renderCourses(courses) {
            const courseContainer = document.getElementById('courseContainer');
            courseContainer.innerHTML = '';

            if (courses.length === 0) {
                courseContainer.innerHTML = '<p class="text-gray-500">No courses found.</p>';
                return;
            }

            courses.forEach(course => {
                const courseElement = document.createElement('div');
                courseElement.classList.add('bg-white', 'rounded-lg', 'shadow-md', 'p-4');

                courseElement.innerHTML = `
                    <h2 class="text-lg font-bold">${course.title}</h2>
                    <p class="text-gray-600 mt-1">${course.description}</p>
                    <p class="font-semibold mt-2">Price: ${course.price}</p>
                    <p>Category: ${course.category}</p>
                    <p>Instructor: ${course.instructor}</p>
                `;

                courseContainer.appendChild(courseElement);
            });
        }

        document.getElementById('applyFilters').addEventListener('click', () => {
            const filters = {
                searchstr: document.getElementById('searchInput').value,
                category: document.getElementById('category').value,
                price: document.getElementById('price').value,
                difficulty: document.getElementById('difficulty').value,
                duration: document.getElementById('duration').value,
                ratings: document.getElementById('ratings').value,
                courseformat: document.getElementById('course-format').value,
                certification: document.getElementById('certification').value,
                releasedate: document.getElementById('release-date').value,
                popularity: document.getElementById('popularity').value,
            };

            fetchCourses(filters);
        });

        fetchCourses(); // Initial fetch
    </script>
</body>
</html>
