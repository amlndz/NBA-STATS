<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define el comportamiento de las rutas en la aplicación
     */
    public function map(): void
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * 🔥 Registrar las rutas web (para el frontend)
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }

    /**
     * 🔥 Registrar las rutas de API
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api') // ✅ Todas las rutas en `routes/api.php` usarán `/api/`
        ->middleware('api')
            ->group(base_path('routes/api.php'));
    }
}
