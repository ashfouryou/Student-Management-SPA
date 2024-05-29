## Student Management System

To get started, follow these steps:

1. Create a new Laravel project named Student-Management-SPA using Composer:

    ```
    composer create-project laravel/laravel Student-Management-SPA
    ```

2. Install Laravel Breeze along with its dependencies:

    ```
    composer require laravel/breeze --dev
    ```

    During the installation process, it will prompt you to confirm the installation of Inertia and Vue. Make sure to approve their installation.

3. Configure your `.env` file with appropriate settings for your application name and database connection.

4. Run the database migrations:

    ```
    php artisan migrate
    ```

5. Finally, start the Laravel development server:

    ```
    php artisan serve
    ```

    This command will initiate the development server, allowing you to access your application, usually at `http://localhost:8000`.
