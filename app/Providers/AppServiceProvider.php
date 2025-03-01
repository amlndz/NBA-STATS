<?php

namespace App\Providers;

use App\Player\Domain\PlayerRepository;
use App\Player\Infrastructure\Persistence\Doctrine\DoctrinePlayerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(PlayerRepository::class, function ($app) {
            return new DoctrinePlayerRepository($app->make(EntityManagerInterface::class));
        });
    }

    public function boot(): void
    {
        //
    }
}
