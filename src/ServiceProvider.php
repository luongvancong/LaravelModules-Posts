<?php

namespace Justin\L\Posts;

class ServiceProvider extends \Illuminate\Support\ServiceProviderServiceProvider
{
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__. 'routes.php';
        }
    }
}