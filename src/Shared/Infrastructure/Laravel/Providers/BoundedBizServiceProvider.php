<?php

namespace BoundedBiz\Shared\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use BoundedBiz\Biz\User\Infrastructure\Providers\UserServiceProvider;

class BoundedBizServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../Config/boundedbiz.php', 'boundedbiz');

        $this->app->register(UserServiceProvider::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Config/boundedbiz.php' => config_path('boundedbiz.php'),
        ], 'boundedbiz-config');
    }
}