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
        $delay = Carbon::now()->addWeekdays(3);
        $days = 3;
        OrderStatusNotCompleted::dispatch([$luxeStoreOrder, $days])->delay($delay);
        $delay = Carbon::now()->addWeekdays(5);
        $days = 5;
        OrderStatusNotCompleted::dispatch([$luxeStoreOrder, $days])->delay($delay);
        $delay = Carbon::now()->addWeekdays(10);
        $days = 10;
        OrderStatusNotCompleted::dispatch([$luxeStoreOrder, $days])->delay($delay);
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
