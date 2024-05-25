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
php artisan make:factory PostFactory
php artisan make:factory EmployeeFactory
php artisan db:seed
php artisan make:seeder UserSeeder
php artisan db:seed --class=UserSeeder
php artisan migrate:fresh --seed
php artisan migrate:fresh --seed --seeder=UserSeeder


# optional command
php artisan migrate:fresh --seed --seeder=UserSeeder


# jobs "# laraveltraining.day2" 
php artisan make:middleware
php artisan make:command CustomTask
php artisan custom:task //to run task manually
crontab -e //check server cronjob
* * * * * cd /path/to/your/project && php artisan schedule:run >> /dev/null 2>&1 //this will execute cronjob
tail -f storage/logs/laravel.log //monitor logs
php artisan list
php artisan schedule:list
php artisan app:custom-task



