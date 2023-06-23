<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;
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
        Vite::macro('image', fn (string $asset) => $this->asset("resources/images/{$asset}"));
    }

    public static function menu()
    {
        return [
            [
                'name' => 'home',
                'title' => 'Home',
                'route' => '',
            ], [
                'name' => 'showroom',
                'title' => 'Showroom',
                'route' => 'showroom',
            ], [
                'name' => 'contact',
                'route' => 'contact',
            ],
        ];
    }

    public static function menuRoutes()
    {
        $menu = static::menu();

        foreach ($menu as $item) {
            Route::get($item['route'], fn() => view($item['name']))->name($item['name']);

            if ($item['items'] ?? false) {
                foreach ($item['items'] as $sub) {
                    Route::get($item['route'] .'/'. $sub['route'], fn()
                    => view($item['name'] .'.'. $sub['name'])
                    )->name($item['name'] .'.'. $sub['name']);
                }
            }
        }
    }
}
