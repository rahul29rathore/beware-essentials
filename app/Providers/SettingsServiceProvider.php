<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use \Illuminate\Contracts\Cache\Factory;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Factory $cache, Setting $settings)
    {
       
        $settings = $cache->remember('settings', 60, function() use ($settings)
        {
            return $settings->pluck('value', 'key')->all();
        });

        config()->set('settings', $settings);
    }
}
