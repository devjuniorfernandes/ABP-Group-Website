<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
            $settings = \App\Models\Setting::pluck('value', 'key')->all();
            \Illuminate\Support\Facades\View::share('siteSettings', $settings);
        } else {
            \Illuminate\Support\Facades\View::share('siteSettings', []);
        }
    }
}
