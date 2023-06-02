<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use App\Observers\OrderObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
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
        Blade::directive('querystring', function () {
            return "<?php echo str_replace('%2C', ',', request()->getQueryString()); ?>";
        });
        
        LuxeStoreOrder::observe(OrderObserver::class);
        Paginator::useBootstrap();

        $this->app->resolving(Paginator::class, function ($paginator) {
            return $paginator->appends(Arr::except(Request::query(), $paginator->getPageName()));
        });
        $this->app->resolving(LengthAwarePaginator::class, function ($paginator) {
            return $paginator->appends(Arr::except(Request::query(), $paginator->getPageName()));
        });

        $cmaApiCredentails = [
            'apiLink' => env('CMA_API_URL', 'https://api.bridgedataoutput.com/api/v2/'),
            'serverToken' => env('CMA_SERVER_TOKEN'),
            'browserToken' => env('CMA_BROWSER_TOKEN'),
            'dataset' => env('CMA_DATASET'),
            'clientId' => env('CMA_CLIENT_ID'),
            'clientSecret' => env('CMA_CLIENT_SECRET'),
        ];

        View::share('cmaApiCredentails', $cmaApiCredentails);
    }
}
