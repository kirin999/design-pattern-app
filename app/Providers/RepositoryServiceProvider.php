<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            \App\Repositories\User\UserDataAccessRepositoryInterface::class,
            \App\Repositories\User\UserDataAccessQBRepository::class
            // UserDataAccessQBRepository
            // UserDataAccessEQRepository

        );
    }

    public function boot()
    {
    }
}