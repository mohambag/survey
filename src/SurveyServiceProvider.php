<?php

namespace Mbagri\Survey;

use Illuminate\Support\ServiceProvider;
use Mbagri\Survey\Middleware\Authenticate;

class SurveyServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('survey', function () {
            return new Survey;
        });
    }

    public function boot()
    {
//        return __DIR__.'\routes.php';
//        $this->app['router']->aliasMiddleware('Authentic',Authenticate::class);
        $this->publishes([
            __DIR__ . '/views'=>base_path('resources/views'),
            __DIR__.'/migrations'=>database_path('migrations'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/routes.php');
//        $this->loadViewsFrom(__DIR__.'/views');
//        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

}
