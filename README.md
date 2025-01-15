# **Course Discovery Project**

The **Course Discovery** project is designed to provide a platform for discovering and filtering various courses. This application uses **Laravel** for the backend and **Tailwind CSS** for the frontend, offering a responsive and user-friendly interface for browsing courses.

---

## **Table of Contents**

1. [Installation](#installation)
2. [Prerequisites](#prerequisites)
3. [Setup Instructions](#setup-instructions)
4. [Commands](#commands)
5. [Run the Application](#run-the-application)
6. [Contributing](#contributing)
7. [License](#license)

---

## **Installation**

To get started with the **Course Discovery** project, follow the steps below to install and configure the application on your local machine.

---

## **Prerequisites**

Before you start, ensure that you have the following tools installed:

- **PHP** (7.3 or above)
- **Composer** (for PHP package management)
- **Node.js** (for managing front-end dependencies)
- **npm** (Node.js package manager)

---

## **Setup Instructions**

1. **Download the Project**  
   Download the project as a ZIP file from the following link:  
   [Download Course Discovery Project](https://github.com/vijayypanchal/course-discovery/archive/refs/heads/main.zip)

2. **Extract the ZIP File**  
   After downloading the ZIP file, extract it to a location of your choice. You should now have a folder named `course-discovery-main`.

3. **Navigate to the Project Directory**  
   Open the extracted folder (`course-discovery-main`). In the folder, right-click and select **"Open in Terminal"** or **"Open Command Prompt Here"** to open the command prompt/terminal in the project directory.

4. **Install PHP Dependencies**  
   Run the following command to install the PHP dependencies for the project:
   ```bash
   composer install
   ```

5. **Install Laravel UI **  
   If you're using Bootstrap for front-end scaffolding, run this command:
   ```bash
   composer require laravel/ui
   ```

6. **Generate Bootstrap Scaffolding (Optional)**  
   Run this command to generate the Bootstrap scaffolding (if you're using Bootstrap for the front-end):
   ```bash
   php artisan ui bootstrap
   ```

7. **Install Node.js Dependencies**  
   Install the required Node.js dependencies:
   ```bash
   npm install
   ```

8. **Install TailwindCSS and PostCSS**  
   Install TailwindCSS, PostCSS, and Autoprefixer for styling:
   ```bash
   npm install -D tailwindcss postcss autoprefixer
   ```

9. **Initialize TailwindCSS Configuration**  
   Initialize the TailwindCSS configuration file:
   ```bash
   npx tailwindcss init
   ```

---

## **Commands**

Here is a list of the main commands used in the setup:

```bash
composer install
composer require laravel/ui
php artisan ui bootstrap
npm install
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init
```

---

## **Run the Application**

1. **Set Up the Environment File**  
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
   Open the `.env` file and configure your database and other environment settings.

2. **Generate Application Key**  
   Run the following command to generate the application key:
   ```bash
   php artisan key:generate
   ```

3. **Migrate Database (Optional)**  
   If you need to set up the database, run the migrations:
   ```bash
   php artisan migrate
   ```

4. **Build Assets**  
   After setting up the environment, build the assets (CSS, JS):
   ```bash
   npm run dev
   ```

5. **Start the Development Server**  
   Start the Laravel development server:
   ```bash
   php artisan serve
   ```

   The application will be available at `http://127.0.0.1:8000` by default.

---

## **Contributing**

We welcome contributions to improve the **Course Discovery** project. If you'd like to contribute, please fork the repository, make your changes, and create a pull request. Be sure to follow the contribution guidelines and ensure that your code adheres to the project's coding standards.

---

## **License**

This project is open-source and available under the [MIT License](LICENSE).

---

### **Additional Notes**

- Make sure you have the correct PHP version installed and configured for running Laravel.
- You can customize the environment variables (`.env` file) for different configurations, such as database settings or mail services.

---

With these steps, you should be able to run the **Course Discovery** project locally on your machine. If you encounter any issues, please refer to the project documentation or open an issue in the repository.

Let me know if you need further adjustments or details!

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