<?php

namespace App\Providers;

use App\Repositories\Contracts\PlayerRepository;
use App\Repositories\DoctrinePlayerRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PlayerRepository::class, DoctrinePlayerRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
