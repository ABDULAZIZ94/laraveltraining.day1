# common serving command

nmp install

composer install

php artisan serve

npm run dev

npm run build //for production or serve online via ngrok

php artisan optimize


# common development command

php artisan  make:view <view-name>

php artisan make:controller <controller-name>

php artisan make:model <model-name>

php artisan make:migration <migration-name>

php artisan make:middleware <middleware-name>

php artisan key:generate

# command executed
php artisan make:middleware EnsureTokenIsValid
php artisan make:middleware EnsureUserHasRole
php artisan make:controller TestController
php artisan migrate


# database seeder


# model factory
php artisan make:factory PostFactory
