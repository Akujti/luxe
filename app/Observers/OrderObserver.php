<?php

namespace App\Observers;

use Carbon\Carbon;
use App\Jobs\OrderStatusNotCompleted;
use App\Models\LuxeStore\Order\LuxeStoreOrder;

class OrderObserver
{
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

    public function updated(LuxeStoreOrder $luxeStoreOrder) {}

    public function deleted(LuxeStoreOrder $luxeStoreOrder) {}

    public function restored(LuxeStoreOrder $luxeStoreOrder) {}

    public function forceDeleted(LuxeStoreOrder $luxeStoreOrder) {}
}
