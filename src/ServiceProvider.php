<?php

namespace khyrie\Todo;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__.'/../config/todo.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('todo.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'todo'
        );

        $this->app->bind('todo', function () {
            return new Todo();
        });
    }
}
