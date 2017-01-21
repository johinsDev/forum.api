<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        //$this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        //Domain apisi quiero vistas tambien
        //api para creacion de subdominios
        //api roles y permisos
        //api multiauth
        //api multiauth admin
        //api cache raiting and thotles
        //api area administrativa crear un app para moviles (password grant) para otro server(client credentials) o autorizando(authorization)
        //api versionada en la cabezera
        //api con sandboz
        //consumirla de todas las formas posibles
        //con tdd para probar
        //el usuario pueda ver sus logs y movimientos de su app
        //y el super amin igual
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => '',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }
}
