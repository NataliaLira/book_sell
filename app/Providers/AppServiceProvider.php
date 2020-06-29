<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
>>>>>>> 22ce5b57db6c2d5c4c17b10672f46cbab1c75219

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
<<<<<<< HEAD
    Schema::defaultStringLength(191);
=======
        //
>>>>>>> 22ce5b57db6c2d5c4c17b10672f46cbab1c75219
    }
}
