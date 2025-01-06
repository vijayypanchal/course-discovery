# Installation Prerequisites

- composer install
- composer require laravel/ui (Optional)
- php artisan ui bootstrap
- npm install
- npm install -D tailwindcss postcss autoprefixer
- npx tailwindcss init

# Clear Configuration and Cache:

```bash
php artisan config:clear
php artisan route:clear
php artisan cache:clear

# Run the migration:

```bash
php artisan migrate

# Compile assets

```bash
npm run dev

# Start the Laravel development server:

```bash
php artisan serve

# Access web main URL eg. http://127.0.0.1:8000/

http://your-domain.com/

-------------------------------------------------------------------------------------------------------------------------

# Access your API endpoints

# API Documentation for Course Discovery System

This document outlines the API endpoints, request methods, parameters, and responses for the **Course Discovery System**.

---

## Base URL eg. http://127.0.0.1:8000/api

```
http://your-domain.com/api
```

---

## Authentication

- No authentication required for basic operations.
- Optional API keys can be implemented for third-party integrations.

---

## Endpoints

### 1. Retrieve All Courses

**Endpoint**: `GET /courses`

**Description**: Retrieves a list of all available courses.

**Query Parameters** (optional):
| Parameter         | Type   | Description                          |
|-------------------|--------|--------------------------------------|
| `category`        | String | Filter courses by category          |
| `difficulty_level`| String | Filter courses by difficulty level   |
| `price`           | String | Filter courses by price (e.g., Free, Paid) |
| `ratings`         | String | Filter courses by ratings            |
| `search`          | String | Search for courses by title or keywords |

**Sample Request**:
```
GET /courses?category=Programming&difficulty_level=Beginner
```

**Sample Response**:
```json
[
  {
    "id": 1,
    "title": "Introduction to Programming",
    "description": "Learn the basics of programming.",
    "price": "0.00",
    "instructor": "John Doe",
    "category": "Programming",
    "difficulty_level": "Beginner",
    "duration": "< 2 hours",
    "ratings": "4+",
    "course_format": "Video",
    "certification": "Certification Available",
    "release_date": "Last 6 months",
    "popularity": "Trending",
    "created_at": "2023-01-01T00:00:00",
    "updated_at": "2023-01-01T00:00:00"
  }
]
```

---

### 2. Retrieve a Specific Course

**Endpoint**: `GET /courses/{id}`

**Description**: Retrieves details of a specific course by its ID.

**Path Parameters**:
| Parameter | Type   | Description          |
|-----------|--------|----------------------|
| `id`      | Integer| The ID of the course |

**Sample Request**:
```
GET /courses/1
```

**Sample Response**:
```json
{
  "id": 1,
  "title": "Introduction to Programming",
  "description": "Learn the basics of programming.",
  "price": "0.00",
  "instructor": "John Doe",
  "category": "Programming",
  "difficulty_level": "Beginner",
  "duration": "< 2 hours",
  "ratings": "4+",
  "course_format": "Video",
  "certification": "Certification Available",
  "release_date": "Last 6 months",
  "popularity": "Trending",
  "created_at": "2023-01-01T00:00:00",
  "updated_at": "2023-01-01T00:00:00"
}
```

---

### 3. Add a New Course

**Endpoint**: `POST /courses`

**Description**: Adds a new course to the system.

**Request Body** (JSON):
| Field              | Type   | Description                |
|--------------------|--------|----------------------------|
| `title`            | String | The title of the course    |
| `description`      | String | A detailed description     |
| `price`            | Number | The price of the course    |
| `instructor`       | String | The instructor's name      |
| `category`         | String | The category of the course |
| `difficulty_level` | String | The difficulty level       |
| `duration`         | String | The course duration        |
| `ratings`          | String | Course ratings             |
| `course_format`    | String | Format (Video, Text, etc.) |
| `certification`    | String | Certification availability |
| `release_date`     | String | Course release timeframe   |
| `popularity`       | String | Popularity metric          |

**Sample Request**:
```json
{
  "title": "Advanced PHP Development",
  "description": "Master PHP with advanced techniques.",
  "price": 49.99,
  "instructor": "Jane Doe",
  "category": "Programming",
  "difficulty_level": "Advanced",
  "duration": "> 10 hours",
  "ratings": "4+",
  "course_format": "Video",
  "certification": "Certification Available",
  "release_date": "Last 30 days",
  "popularity": "Most Enrolled"
}
```

**Sample Response**:
```json
{
  "id": 2,
  "title": "Advanced PHP Development",
  "description": "Master PHP with advanced techniques.",
  "price": "49.99",
  "instructor": "Jane Doe",
  "category": "Programming",
  "difficulty_level": "Advanced",
  "duration": "> 10 hours",
  "ratings": "4+",
  "course_format": "Video",
  "certification": "Certification Available",
  "release_date": "Last 30 days",
  "popularity": "Most Enrolled",
  "created_at": "2023-01-02T00:00:00",
  "updated_at": "2023-01-02T00:00:00"
}
```

---

### 4. Update a Course

**Endpoint**: `PUT /courses/{id}`

**Description**: Updates details of an existing course by its ID.

**Path Parameters**:
| Parameter | Type   | Description          |
|-----------|--------|----------------------|
| `id`      | Integer| The ID of the course |

**Request Body** (JSON):
- Same as the "Add a New Course" request body.

**Sample Request**:
```json
{
  "title": "Updated PHP Course Title"
}
```

**Sample Response**:
```json
{
  "id": 2,
  "title": "Updated PHP Course Title",
  "description": "Master PHP with advanced techniques.",
  "price": "49.99",
  "instructor": "Jane Doe",
  "category": "Programming",
  "difficulty_level": "Advanced",
  "duration": "> 10 hours",
  "ratings": "4+",
  "course_format": "Video",
  "certification": "Certification Available",
  "release_date": "Last 30 days",
  "popularity": "Most Enrolled",
  "created_at": "2023-01-02T00:00:00",
  "updated_at": "2023-01-03T00:00:00"
}
```

---

### 5. Delete a Course

**Endpoint**: `DELETE /courses/{id}`

**Description**: Deletes a specific course by its ID.

**Path Parameters**:
| Parameter | Type   | Description          |
|-----------|--------|----------------------|
| `id`      | Integer| The ID of the course |

**Sample Request**:
```
DELETE /courses/2
```

**Sample Response**:
```json
{
  "message": "Course deleted"
}
```

---

## Error Responses

- **400 Bad Request**: Invalid data in the request.
- **404 Not Found**: Resource not found.
- **500 Internal Server Error**: Server-side error.

---