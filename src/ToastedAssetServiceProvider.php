<?php

namespace Skoyah\NovaAssets;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class ToastedAssetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/toasted.php' => config_path('toasted.php'),
        ], 'nova-toasted');

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-toasted', __DIR__ . '/../dist/js/asset.js');
            // Nova::style('nova-toasted', __DIR__.'/../dist/css/asset.css');

            if ($toastedConfig = config('toasted')) {
                Nova::provideToScript(compact('toastedConfig'));
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
