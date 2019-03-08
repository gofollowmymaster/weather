<?php
/**
 * Created by PhpStorm.
 * User: zh
 * Date: 2019/3/8
 * Time: 11:21
 */

namespace Gofollowmymaster\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}