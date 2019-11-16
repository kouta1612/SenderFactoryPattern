<?php

namespace App\Providers;

use App\Services\Dice;
use App\Services\DiceInterface;
use App\Services\LoadedDice;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DiceInterface::class, function ($app) {
            return App::environment() === 'testing' ? new LoadedDice() : new Dice();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
