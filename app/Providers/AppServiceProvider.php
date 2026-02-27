<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\WebsiteSetting;
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
        view()->composer('layouts.userLayouts', function ($view) {

            $footerBrands = Brand::where('is_active', 1)->get();
            $settings = WebsiteSetting::first();

            $view->with([
                'footerBrands' => $footerBrands,
                'globalSettings' => $settings
            ]);
        });
    }
}
