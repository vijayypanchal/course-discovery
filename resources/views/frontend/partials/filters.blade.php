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
                <option value="">All Categories</option>
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
                <option value="">All Ratings</option>
                <option value="4+">4+</option>
                <option value="3+">3+</option>
                <option value="2 or below">2 or below</option>
            </select>
        </div>

        <div>
            <label class="block mb-2 font-medium">Course Format</label>
            <select id="course-format" class="w-full border-gray-300 rounded-md p-2">
                <option value="">All Formats</option>
                <option value="Video">Video</option>
                <option value="Text-based">Text-based</option>
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
                <option value="">All Release Dates</option>
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
        </div>
		<br>
        <div>
            <button id="applyFilters" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 w-full mb-2">
                Apply Filters
            </button>
        </div>
    </div>
</aside>
