<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Movie;
use App\Observers\MovieObserver;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Daftarkan observer
        Movie::observe(MovieObserver::class);
    }

    // ...
}
