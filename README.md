# 🚀 tenders-api

![CodeIgniter 4](https://img.shields.io/badge/CodeIgniter-EE4827?style=for-the-badge&logo=codeigniter&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![License MIT](https://img.shields.io/badge/License-MIT-yellow.svg)

---

## ✨ Project Summary

Welcome to **tenders-api**! This robust and scalable API is designed to streamline the management and delivery of tender information. Developed by Alok345, it provides a comprehensive backend solution for handling various aspects of the tendering process, from submission and review to status updates and search functionalities. Built with CodeIgniter 4, this API ensures high performance, security, and ease of maintenance, making it an ideal foundation for any tender-related application.

---

## 💡 Key Features

*   **Tender Management:** Create, read, update, and delete tender listings.
*   **Categorization & Tagging:** Organize tenders by industry, type, region, and other custom tags for easy filtering.
*   **Secure Authentication:** Robust user authentication and authorization system to protect sensitive data and control access.
*   **Search & Filtering:** Advanced search capabilities and extensive filtering options to quickly find relevant tenders.
*   **Status Tracking:** Manage the lifecycle of tenders from "draft" to "published," "closed," or "awarded."
*   **File Uploads:** Support for attaching relevant documents to tender listings (e.g., PDFs, specifications).
*   **API Endpoints:** Clean, well-documented RESTful API endpoints for seamless integration with frontend applications.
*   **Scalability:** Designed to handle a growing number of tenders and concurrent users efficiently.

---

## 🛠️ Tech Stack

The **tenders-api** is built upon a modern and efficient tech stack, leveraging the power of PHP and the elegance of CodeIgniter 4.

### Backend
*   **PHP**: A widely-used general-purpose scripting language especially suited for web development.
    ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
*   **CodeIgniter 4**: A powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.
    ![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EE4827?style=for-the-badge&logo=codeigniter&logoColor=white)
*   **Composer**: A dependency manager for PHP, used to manage the project's libraries and packages.
    ![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)

### Database
*   **MySQL**: The world's most popular open source database, known for its reliability and performance.
    ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

### Version Control
*   **Git**: A distributed version control system for tracking changes in source code during software development.
    ![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
*   **GitHub**: A platform for hosting and collaborating on Git repositories.
    ![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)

---

## 📂 Project Structure

The repository follows a standard CodeIgniter 4 application structure, which promotes clean organization and easy navigation.

```
.
├── .env                  // Environment configuration file
├── app/                  // Application directory (controllers, models, views, etc.)
│   ├── Config/
│   ├── Controllers/
│   ├── Database/
│   ├── Entities/
│   ├── Filters/
│   ├── Helpers/
│   ├── Language/
│   ├── Libraries/
│   ├── Models/
│   ├── ThirdParty/
│   └── Views/
├── composer.json         // Composer configuration file
├── public/               // Web server root directory (index.php, assets)
│   ├── .htaccess
│   ├── index.php
│   └── robots.txt
├── spark                 // CodeIgniter CLI tool
├── vendor/               // Composer dependencies
└── writable/             // Writable files (cache, logs, uploads)
    ├── cache/
    ├── logs/
    └── uploads/
```

---

## 🚀 Installation & Setup Instructions

Follow these steps to get the **tenders-api** running on your local machine.

### Prerequisites

Before you begin, ensure you have the following installed:

*   **PHP** (>= 7.4, recommended 8.x)
*   **Composer**
*   **MySQL** or a compatible database server
*   **Git**

### Step-by-Step Guide

1.  **Clone the Repository**
    Open your terminal or command prompt and clone the project:
    ```bash
    git clone https://github.com/Alok345/tenders-api.git
    cd tenders-api
    ```

2.  **Install PHP Dependencies**
    Install all required PHP packages using Composer:
    ```bash
    composer install
    ```

3.  **Configure Environment Variables**
    CodeIgniter uses a `.env` file for environment-specific configurations.
    *   Copy the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    *   Open the newly created `.env` file and update the following variables:
        *   `CI_ENVIRONMENT = development`
        *   `app.baseURL = 'http://localhost:8080/'` (or your preferred local URL)
        *   **Database Configuration**:
            ```
            database.default.hostname = localhost
            database.default.database = tenders_db
            database.default.username = root
            database.default.password = your_db_password
            database.default.DBDriver = MySQLi
            ```
        *   **Encryption Key**: Generate a strong application key for security. You can use the `spark` command:
            ```bash
            php spark key:generate
            ```
            This will automatically update `app.encryptionKey` in your `.env` file.

4.  **Create Database**
    Create a new database named `tenders_db` (or whatever you configured in `.env`) in your MySQL server.

5.  **Run Database Migrations**
    Apply the database schema using CodeIgniter's migrations:
    ```bash
    php spark migrate
    ```

6.  **Seed Database (Optional)**
    If there are seeders available to populate your database with dummy data:
    ```bash
    php spark db:seed YourSeederClassName # e.g., UserSeeder
    ```

---

## 🏃 Usage

Once the installation and setup are complete, you can start the development server and interact with the API.

### Starting the Development Server

CodeIgniter comes with a built-in development server.
```bash
php spark serve
```
This will typically start the server on `http://localhost:8080`.

### API Endpoints

You can now access the API endpoints using tools like Postman, Insomnia, `curl`, or your frontend application.

**Base URL**: `http://localhost:8080/api/v1` (assuming your `.env` `app.baseURL` is `http://localhost:8080/` and API routes are under `/api/v1`)

**Example Endpoints (Illustrative - refer to actual API documentation/routes for specifics):**

*   **GET all tenders:**
    ```
    GET http://localhost:8080/api/v1/tenders
    ```
*   **GET a single tender by ID:**
    ```
    GET http://localhost:8080/api/v1/tenders/{id}
    ```
*   **POST a new tender:**
    ```
    POST http://localhost:8080/api/v1/tenders
    Content-Type: application/json
    Body: { "title": "New Tender Title", "description": "Details...", ... }
    ```
*   **User Registration:**
    ```
    POST http://localhost:8080/api/v1/register
    Content-Type: application/json
    Body: { "email": "user@example.com", "password": "password123" }
    ```
*   **User Login:**
    ```
    POST http://localhost:8080/api/v1/login
    Content-Type: application/json
    Body: { "email": "user@example.com", "password": "password123" }
    ```

> 💡 **Tip:** Check the `app/Config/Routes.php` file and the `app/Controllers` directory for the exact API endpoints and their corresponding logic. Detailed API documentation (e.g., using Swagger/OpenAPI) might be provided in a separate resource.

---

## 📄 License

This project is open-source and licensed under the **MIT License**.

```
MIT License

Copyright (c) 2023 Alok345

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```