<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Foundation\Vite;
use Illuminate\Support\Facades\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::preventLazyLoading(!$this->app->isProduction());
        Vite::macro('template', fn ($asset) => $this->asset("resources/assets/template/{$asset}"));
        // Paginator::useBootstrapFour();

        // Vite::useScriptTagAttributes(fn (string $src, string $url, array|null $chunk, array|null $manifest) => [
        //     'type' => ($src != 'resources/assets/template/plugins/sweetalert2/sweetalert2.all.min.js')
        //         ? 'module'
        //         : (($chunk == null && $manifest == null)
        //             ? ''
        //             : 'module'),
        // ]);
    }
}
