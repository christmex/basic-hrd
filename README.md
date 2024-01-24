## How to use for the first time
- ``` git clone ```
- ``` composer install ```
- create your database and add it in DB_DATABASE variabel inside .env file, use this command if for copying .env.example became .env ``` cp .env.example .env ```
- ``` php artisan key:generate ```
- ## shield
    - ``` php artisan shield:install ```

## How to use shield plugin for resource
- create model and migration for resource, then do artisan migrate
- then create resource with make:filament-resource ModelNameResource --genereate
- php artisan shield:generate --resource=ModelNameResource -> this will create Policy for this model and add default permissions to database