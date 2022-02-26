<?php

namespace Mbagri\Survey;

use Illuminate\Support\ServiceProvider;

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
        return __DIR__.'\routes.php';

        $this->publishes([
            __DIR__.'/config.php'=>config_path('Survey.php'),
            __DIR__ . '/views'=>base_path('resources/views/survey'),
            __DIR__.'/migrations'=>database_path('migrations'),
        ]);
    }

}
