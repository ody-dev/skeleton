[![Actions Status](https://github.com/ody-dev/ody-skeleton/workflows/Build%20and%20test/badge.svg)](https://github.com/ody-dev/ody-skeleton/actions)
[![License](https://poser.pugx.org/ody/core/license)](https://packagist.org/packages/ody/core)

# Ody

A lightweight REST API framework build from scratch on top of Swoole HTTP server for shits and giggles.

Use at your own risk!

## Install
```
sudo apt install php8.3-swoole

git pull https://github.com/ody-dev/ody-skeleton.git
composer install
```

## Run the HTTP server
```
server:start [-d|--daemonize] [-w|--watch]
```

### Run on Swoole
Only works on unix systems!
```
php ody server:start --watcher
```

## Routes
Add routes to `App/route.php`. Routes via annotations on controllers is a planned feature.

```php
Route::get('/users', '\App\Http\Controllers\UserController:index');
Route::get('/users/{id}', '\App\Http\Controllers\UserController:find');
Route::post('/users', '\App\Http\Controllers\UserController:create');
Route::put('/users/{id}', '\App\Http\Controllers\UserController:update');
```

### Grouping routes
```php
Route::group('/api', function (RouteCollectorProxy $group) {
    $group->get('/users', '\App\Http\Controllers\UserController:index');
});
```

### Adding middleware to routes
```shell
Route::get('/users', '\App\Http\Controllers\UserController:index')->add(new Middleware());

Route::group('/api', function (RouteCollectorProxy $group) {
    $group->get('/users', '\App\Http\Controllers\UserController:index');
})->add(new Middleware());
```

## Migrations
```
php ody migration:create: UserMigration

# Available commands:

      migrations:clear     Rollback all migrations and delete log table
      migrations:create    Create migration
      migrations:diff      Makes diff of source and target database or diff of migrations and database
      migrations:dump      Dump actual database structure to migration file
      migrations:rollback  Rollback migrations
      migrations:run       Run migrations
      migrations:status    List of migrations already executed and list of migrations to execute

```
