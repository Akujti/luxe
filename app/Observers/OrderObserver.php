<?php

namespace App\Observers;

use Carbon\Carbon;
use App\Jobs\OrderStatusNotCompleted;
use App\Models\LuxeStore\Order\LuxeStoreOrder;

class OrderObserver
{
    /**
     * Handle the LuxeStoreOrder "created" event.
     *
     * @param  \App\Models\LuxeStoreOrder  $luxeStoreOrder
     * @return void
     */
    public function created(LuxeStoreOrder $luxeStoreOrder)
    {
        $delay = Carbon::now()->addHours(72);
        // $delay = Carbon::now()->addSecond(1);
        OrderStatusNotCompleted::dispatch($luxeStoreOrder)->delay($delay);
    }

    /**
     * Handle the LuxeStoreOrder "updated" event.
     *
     * @param  \App\Models\LuxeStoreOrder  $luxeStoreOrder
     * @return void
     */
    public function updated(LuxeStoreOrder $luxeStoreOrder)
    {
        //
    }

    /**
     * Handle the LuxeStoreOrder "deleted" event.
     *
     * @param  \App\Models\LuxeStoreOrder  $luxeStoreOrder
     * @return void
     */
    public function deleted(LuxeStoreOrder $luxeStoreOrder)
    {
        //
    }

    /**
     * Handle the LuxeStoreOrder "restored" event.
     *
     * @param  \App\Models\LuxeStoreOrder  $luxeStoreOrder
     * @return void
     */
    public function restored(LuxeStoreOrder $luxeStoreOrder)
    {
        //
    }

    /**
     * Handle the LuxeStoreOrder "force deleted" event.
     *
     * @param  \App\Models\LuxeStoreOrder  $luxeStoreOrder
     * @return void
     */
    public function forceDeleted(LuxeStoreOrder $luxeStoreOrder)
    {
        //
    }
}
