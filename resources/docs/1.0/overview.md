# Blog Web Application Documentation

- [Overview](#overview)
- [Application Structure](#application-structure)
- [API Endpoints](#api-endpoints)
  - [Get All Blogs](#get-all-blogs)
  - [Get Paginated Blogs](#get-paginated-blogs)
  - [Add a Blog](#add-a-blog)
  - [Update a Blog](#update-a-blog)
  - [Update Blog View](#update-blog-view)
  - [Delete a Blog](#delete-a-blog)
  - [Disable Blog](#disable-blog)
  - [View a Blog](#view-a-blog)
- [Controller](#controller)
- [Service](#service)
- [Model](#model)
-[Postman Collection](#postman-collection)
-[Database Schema](#database-schema)
-[Blog Table](#blogs-table)


<a name="overview"></a>
# Overview

This documentation provides details about the structure, API endpoints, and functionality of the Blog web application built with Laravel. The application allows users to manage blog posts.


<a name="application-structure"></a>
# Application Structure

Your web application follows a standard Laravel structure:

- **App Directory:** Contains the core code of your application, including controllers, models, and other supporting files.
- **Database Directory:** Includes database migrations and seeders.
- **Public Directory:** Contains publicly accessible files, such as images, stylesheets, and JavaScript files.
- **Resources Directory:** Holds your views, language files, and assets that need to be compiled.
- **Routes Directory:** Defines the routes of your application.

<a name="api-endpoints"></a>
# API Endpoints

<a name="get-all-blogs"></a>
## Get All Blogs

- **Endpoint:** `/blog`
- **Method:** `GET`
- **Functionality:** Retrieve all blog posts.

<a name="get-paginated-blogs"></a>
## Get Paginated Blogs

- **Endpoint:** `/blog/all`
- **Method:** `GET`
- **Functionality:** Retrieve paginated blog posts.

<a name="add-a-blog"></a>
## Add a Blog

- **Endpoint:** `/blog`
- **Method:** `POST`
- **Functionality:** Add a new blog post.

<a name="update-a-blog"></a>
## Update a Blog

- **Endpoint:** `/blog/update/{id}`
- **Method:** `POST`
- **Functionality:** Update an existing blog post.

<a name="update-blog-view"></a>
## Update Blog View

- **Endpoint:** `/blog/update/view/{id}`
- **Method:** `GET`
- **Functionality:** View the update form for a specific blog post.

<a name="delete-a-blog"></a>
## Delete a Blog

- **Endpoint:** `/blog/{id}`
- **Method:** `GET`
- **Functionality:** Delete a specific blog post.

<a name="disable-blog"></a>
## Disable Blog

- **Endpoint:** `/blog/disable/{id}`
- **Method:** `POST`
- **Functionality:** Disable a specific blog post.

<a name="view-a-blog"></a>
## View a Blog

- **Endpoint:** `/blog/view/{id}`
- **Method:** `GET`
- **Functionality:** View a specific blog post.

<a name="controller"></a>
# Controller

The `BlogController` class handles the logic for managing blog posts. It includes methods for retrieving, adding, updating, deleting, and disabling blog posts.

<a name="service"></a>
# Service

The `BlogService` class provides the business logic for adding and updating blog posts.

<a name="model"></a>
# Model

The `Blog` model defines the structure of the `blogs` table in the database. It includes the fields: title, blog_content, tag, date, and status.

<a name="database-schema"></a>
# Database Schema

The application uses a MySQL database with the following schema:

<a name="blogs-table"></a>
## Blogs Table

The `blogs` table is created using the following migration:

```php
public function up(): void
{
    Schema::create('blogs', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('blog_content');
        $table->string('tag');
        $table->string('date');
        $table->string('status')->default('enable');
        $table->timestamps();
    });
}
```

  id: The primary key of the table.

  title: The title of the blog post.

  blog_content: The content of the blog post.

  tag: The tag associated with the blog post.

  date: The date of the blog post.

  status: The status of the blog post (default is 'enable').

  timestamps: Automatically managed timestamps for record creation and updates.
  

  This table is used to store information about blog posts.

<a name="postman-collection"></a>
# Postman Collection

A Postman collection has been created to facilitate testing and usage of the API.

- [Here is the Postman Collection File](https://github.com/MalinduPabasara/blog-app/blob/main/resources/docs/1.0/blog-app.postman_collection.json)

---

Feel free to customize the content within each section according to your project's specific details.
