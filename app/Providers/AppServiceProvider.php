<?php

namespace App\Providers;

use App\Models\LuxeStore\Order\LuxeStoreOrder;
use App\Observers\OrderObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\LengthAwarePaginator;

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

        $this->app->resolving(Paginator::class, function ($paginator) {
            return $paginator->appends(Arr::except(Request::query(), $paginator->getPageName()));
        });
        $this->app->resolving(LengthAwarePaginator::class, function ($paginator) {
            return $paginator->appends(Arr::except(Request::query(), $paginator->getPageName()));
        });
    }
}
