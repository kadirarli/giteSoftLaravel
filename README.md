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

9. Registration and Authentication are added.

    $ php artisan make:migration --table=users add_api_token_to_users_table
    $ php artisan migrate
    
    You can use for testing user registration by using api.
    
    $ curl -X POST http://localhost:8000/api/register \
     -H "Accept: application/json" \
     -H "Content-Type: application/json" \
     -d '{"name": "Kadir", "email": "kadirarli@gmail.com", "password": "123456", "password_confirmation": "123456"}'
     
     Result: 
     {"data":{"name":"Kadir","email":"kadir.arli@gmail.com","updated_at":"2017-11-22 02:22:37","created_at":"2017-11-22 02:22:37","id":1,"api_token":"vdJUIREYkPZ3mrKRCEJ65EweHPLMaNHmQ2eeuDbHKoa75ggUS1xWNyN47LUB"}}
     
     You can use for testing user login by using api.
     
     $ curl -X POST http://localhost:8000/api/login \
         -H "Accept: application/json" \
         -H "Content-type: application/json" \
         -d "{\"email\": \"kadir.arli@gmail.com\", \"password\": \"123456\" }"
     
    Result: 
    {"data":{"id":1,"name":"Kadir","email":"kadir.arli@gmail.com","created_at":"2017-11-22 02:22:37","updated_at":"2017-11-22 02:56:39","api_token":"IDFPt9h0uwN2j8b6pKjk5VrRi8SS3IiS8WeSDannSsfpPGAp3dwMAYA2vQ1r"}}
    
    You can logout by using below command.
    
    $ curl -X POST http://localhost:8000/api/logout \
               -H "Accept: application/json" \
               -H "Content-type: application/json" \
               -d "{\"api_token\": \"IDFPt9h0uwN2j8b6pKjk5VrRi8SS3IiS8WeSDannSsfpPGAp3dwMAYA2vQ1r\" }"
    
    Result:
    {"data":"User logged out."}
    
    