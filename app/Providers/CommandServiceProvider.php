<?php
namespace App\Providers;

use Ody\Core\Foundation\Providers\ServiceProvider;
use Ody\Core\Support\Route;

class CommandServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands = [
                \App\Console\Commands\ExampleCommand::class,
            ];
        }
    }
}