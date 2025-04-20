<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.layouts.footer', function ($view) {
            $footerSettings = DB::table('settings')
                ->whereIn('key', ['contact_alamat', 'contact_telp', 'contact_email', 'contact_youtube', 'contact_instagram', 'contact_facebook', 'contact_maps'])
                ->get()
                ->keyBy('key');

            $view->with('footerSettings', $footerSettings);
        });
    }
}
