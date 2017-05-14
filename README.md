down load zip
composer.phar update
setting database at .env and mirgation and run php artisan migrate
*****
if error
[Illuminate\Database\QueryException]
SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table users add unique users_email_unique(email))

[PDOException]
SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
*****
open app\Providers\AppServiceProvider.php
then add namespace: use Illuminate\Support\Facades\Schema;
and
public function boot()
{
    Schema::defaultStringLength(191);
}
open localhost/phpmyadmin delete all table and run php artisan migrate
