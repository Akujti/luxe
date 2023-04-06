<?php

namespace App\Providers;

use App\Models\LuxeStore\Order\LuxeStoreOrder;
use App\Observers\OrderObserver;
use Illuminate\Pagination\Paginator;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        LuxeStoreOrder::observe(OrderObserver::class);
        Paginator::useBootstrap();
    }
}
