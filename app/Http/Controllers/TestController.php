<?php

namespace App\Http\Controllers;

use App\Mail\CouponUsedMailTemplate;
use App\Mail\DailyStoreReport;
use App\Models\BrokersumoAgent;
use App\Models\FormSubmit;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    public function index()
    {
        return Carbon::now()->addWeekdays(7);
    }

    public function update_vimeo()
    {
    }

    public function submit(Request $request)
    {
    }
}
