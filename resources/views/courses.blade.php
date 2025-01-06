<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Discovery</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        <!-- Search Filter Section -->
        <aside class="bg-gray-200 w-full md:w-1/4 p-4 transition-all duration-300 ease-in-out">
            <button id="toggleSearchFilter" class="flex justify-between items-center w-full text-gray-800 md:hidden">
                <span class="text-lg font-semibold">Filters</span>
                <span id="filterIcon">▼</span>
            </button>
            <div id="filterContent" class="hidden md:block mt-4 h-full md:h-[calc(100vh-4rem)] overflow-y-auto">
                <input type="text" id="searchInput" class="border border-gray-300 rounded p-2 w-full mb-4" placeholder="Search courses...">
                <div>
                    <label class="block mb-1 font-medium">Category</label>
                    <select id="category" class="border border-gray-300 rounded p-2 w-full mb-4">
                        <option value="Programming">Programming</option>
                        <option value="Design">Design</option>
                        <option value="Business">Business</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Price</label>
                    <select id="price" class="border border-gray-300 rounded p-2 w-full mb-4">
                        <option value="">All Price</option>
                        <option value="Free">Free</option>
                        <option value="Paid">Paid</option>
                        <option value="£10 - £100">£10 - £100</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Difficulty Level</label>
                    <select id="difficulty" class="border border-gray-300 rounded p-2 w-full mb-4">
                        <option value="">All Levels</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                </div>
				<div>
                    <label class="block mb-2 font-medium">Duration</label>
                    <select id="duration" class="w-full border-gray-300 rounded-md p-2">
                        <option value="">All Duration</option>
                        <option value="<2">< 2 hours</option>
                        <option value="2–5">2–5 hours</option>
                        <option value="5–10">5–10 hours</option>
						<option value=">10">> 10 hours</option>
                    </select>
                </div>
				<div>
                    <label class="block mb-2 font-medium">Rating</label>
                    <select id="ratings" class="w-full border-gray-300 rounded-md p-2">
                        <option value="">All rating</option>
                        <option value="4+">4+</option>
                        <option value="3+">3+</option>
                        <option value="2 or below">2 or below</option>
                    </select>
                </div>
				<div>
                    <label class="block mb-2 font-medium">Course Format</label>
                    <select id="course-format" class="w-full border-gray-300 rounded-md p-2">
                        <option value="">All Format</option>
                        <option value="Video">Video</option>
                        <option value="Text-based">Text-based,</option>
                        <option value="Interactive">Interactive/Live</option>
                    </select>
                </div>
				<div>
                    <label class="block mb-2 font-medium">Certification</label>
                    <select id="certification" class="w-full border-gray-300 rounded-md p-2">
                        <option value="">All Certification</option>
                        <option value="Available">Available Certification</option>
                        <option value="No">No Certification</option>
                    </select>
                </div>
				<div>
                    <label class="block mb-2 font-medium">Release Date</label>
                    <select id="release-date" class="w-full border-gray-300 rounded-md p-2">
                        <option value="">All Release Date</option>
                        <option value="Last 30 days">Last 30 days</option>
                        <option value="Last 6 months">Last 6 months</option>
						<option value="Last 1 year">Last 1 year</option>
                    </select>
                </div>
				<div>
                    <label class="block mb-2 font-medium">Popularity</label>
                    <select id="popularity" class="w-full border-gray-300 rounded-md p-2">
                        <option value="">All Popularity</option>
                        <option value="Most Enrolled">Most Enrolled</option>
                        <option value="Trending">Trending</option>
						<option value="Recently Viewed">Recently Viewed</option>
                    </select>
                </div><br>
				<div>
				<button 
                    id="applyFilters" 
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 w-full mb-2">
                    Apply Filters
                </button>
				</div>
            </div>
        </aside>
		
        <!-- Course Listing Section -->
        <main id="courseContainer" class="flex-1 p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
           
            <!-- Duplicate course cards as needed -->
        </main>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Toggle Navigation Menu
    const toggleNavMenu = document.getElementById('toggleNavMenu');
    const navContent = document.getElementById('navContent');
    const navMenuIcon = document.getElementById('navMenuIcon');

    toggleNavMenu.addEventListener('click', () => {
        navContent.classList.toggle('hidden');
        navMenuIcon.textContent = navContent.classList.contains('hidden') ? '▼' : '▲';
    });

    // Toggle Search Filter
    const toggleSearchFilter = document.getElementById('toggleSearchFilter');
    const filterContent = document.getElementById('filterContent');
    const filterIcon = document.getElementById('filterIcon');

    toggleSearchFilter.addEventListener('click', () => {
        filterContent.classList.toggle('hidden');
        filterIcon.textContent = filterContent.classList.contains('hidden') ? '▼' : '▲';
    });
</script>

    <script>
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
            const searchstr = document.getElementById('searchInput').value;
			const category = document.getElementById('category').value;
            const price = document.getElementById('price').value;
			const difficulty = document.getElementById('difficulty').value;
			const duration = document.getElementById('duration').value;
			const ratings = document.getElementById('ratings').value;
			const courseformat = document.getElementById('course-format').value;
			const certification = document.getElementById('certification').value;
			const releasedate = document.getElementById('release-date').value;
			const popularity = document.getElementById('popularity').value;

            const filters = {};
            if (searchstr) filters.searchstr = searchstr;
			if (category) filters.category = category;
            if (price) filters.price = price;
			if (difficulty) filters.difficulty = difficulty;
			if (duration) filters.duration = duration;
			if (ratings) filters.ratings = ratings;
			if (courseformat) filters.courseformat = courseformat;
			if (certification) filters.certification = certification;
			if (releasedate) filters.releasedate = releasedate;
			if (popularity) filters.popularity = popularity;
			
            fetchCourses(filters);
        });

        // Initial fetch
        fetchCourses();
    </script>
</body>
</html>
