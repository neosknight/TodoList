<?php

namespace Neosknight\TodoList;

use Illuminate\Support\ServiceProvider;

class TodoListServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'todolist');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/neosknight/todolist'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Neosknight\TodoList\TodolistController');
    }
}
