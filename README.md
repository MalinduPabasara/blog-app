# Laravel Blog Application

[![Build Status](https://travis-ci.org/yourusername/your-project.svg?branch=main)](https://travis-ci.org/yourusername/your-project)
[![Total Downloads](https://img.shields.io/packagist/dt/yourusername/your-project)](https://packagist.org/packages/yourusername/your-project)
[![Latest Stable Version](https://img.shields.io/packagist/v/yourusername/your-project)](https://packagist.org/packages/yourusername/your-project)
[![License](https://img.shields.io/packagist/l/yourusername/your-project)](https://opensource.org/licenses/MIT)

## About

Laravel Blog app is a web application built with Laravel, a web application framework with expressive, elegant syntax. This README file provides information on how to set up and run the project.

## Setup

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/your-project.git
    cd your-project
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    ```

3. **Copy .env File:**

    ```bash
    cp .env.example .env
    ```

4. **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

5. **Configure Your Database:**

    Open the `.env` file and set the database connection details.

6. **Run Migrations:**

    ```bash
    php artisan migrate
    ```

7. **Install Node.js Dependencies:**

    ```bash
    npm install
    ```

8. **Build Assets:**

    ```bash
    npm run dev
    ```

## Laravel Breeze

Laravel Blog Application uses Laravel Breeze for authentication. Breeze provides a simple and minimalistic starter kit for Laravel.

To install Breeze, run the following command:

```bash
composer require laravel/breeze --dev

Then run the Breeze installation command:

php artisan breeze:install

## Running the Application

php artisan serve

Visit http://localhost:8000 in your browser.

## Contributing

Thank you for considering contributing to Laravel Blog Application! The contribution guide can be found in the Laravel documentation.

## Code of Conduct

Please review and abide by the Code of Conduct.

##Security Vulnerabilities

If you discover a security vulnerability within Laravel Blog Application, please send an e-mail to info.malindu4@email.com.

##License

Laravel Blog Application is open-sourced software licensed under the MIT license.
