<?php

namespace App\Providers;

use Illuminate\Validation\Rules\Password;
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
        Password::defaults(function(){
            $rule = Password::min(8);

            return app()->isProduction()
            ? $rule->letters()->numbers()->uncompromised()
            : $rule;
        });
    }
}
