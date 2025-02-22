# Ody

A lightweight REST API framework build from scratch on top of Swoole HTTP server for shits and giggles.

## Install
```
pecl install inotify
sudo apt install php8.3-{dev,swoole}

composer install
```

## Development
```
php ody http:start
```

## Migrations
```
php ody create:migration UserMigration
php ody migrate
php ody migrate:rollback
```
