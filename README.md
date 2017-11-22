1. Initial Commit (Laravel 5.4 Installation)

    $ composer create-project --prefer-dist laravel/laravel giteSoftLaravel "5.4.*"

    TODO.md is created.

    $ php artisan serve

    http://127.0.0.1:8000
    
2. giteSoftLaravelDB is created. Dump file is created.
    
    you should change DB Conn. information in .env file.
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=giteSoftLaravelDB
    DB_USERNAME=db_username
    DB_PASSWORD=db_password
    
3. Model and migration of film are created.
    
    Model and migration of genre are created.
    $ php artisan make:model Film -m
    $ php artisan make:model Genre -m
    
    Before $ php artisan migrate
    You should do below lines.
    
    In AppServiceProvider.php
    
    use Illuminate\Support\Facades\Schema;
    
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    
    to create Controller for film
    
    $ php artisan make:controller FilmController
    
    $ php artisan make:request FilmRequest
    
4. Redirect (from / to /films/) is added.

5. Before listing films, Films and genres seeder are created.

    $ php artisan make:seeder FilmsTableSeeder

    $ php artisan db:seed --class=FilmsTableSeeder
    
    $ php artisan make:seeder GenresTableSeeder
    
    $ php artisan db:seed --class=GenresTableSeeder
    
6. Film list and single film pages are created.

7. Slug is created.

    $ php artisan make:migration add_slug_to_films
    $ php artisan migrate
    
    run again
    $ php artisan db:seed --class=FilmsTableSeeder
    $ php artisan db:seed --class=GenresTableSeeder
    
8. To create new film, page is created.

    