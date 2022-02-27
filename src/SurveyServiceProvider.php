<?php

namespace Mbagri\Survey;

use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('survey', function () {
            return new Surveyold;
        });
    }

    public function boot()
    {
//        return __DIR__.'\routes.php';

        $this->publishes([
//            __DIR__.'/config.php'=>config_path('Surveyold.php'),
            __DIR__ . '/views'=>base_path('resources/views'),
            __DIR__.'/migrations'=>database_path('migrations'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/routes.php');
//        $this->loadViewsFrom(__DIR__.'/views');
//        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

}
