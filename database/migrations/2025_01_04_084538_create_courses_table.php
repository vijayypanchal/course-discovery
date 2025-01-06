<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('instructor');
            $table->enum('category', ['Programming', 'Design', 'Business', 'Marketing']);
            $table->enum('difficulty_level', ['Beginner', 'Intermediate', 'Advanced']);
            $table->enum('duration', ['< 2 hours', '2–5 hours', '5–10 hours', '> 10 hours']);
            $table->enum('ratings', ['4+', '3+', '2 or below']);
            $table->enum('course_format', ['Video', 'Text-based', 'Interactive/Live']);
            $table->enum('certification', ['Certification Available', 'No Certification']);
            $table->enum('release_date', ['Last 30 days', 'Last 6 months', 'Last 1 year']);
            $table->enum('popularity', ['Most Enrolled', 'Trending', 'Recently Viewed']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

