<?php

namespace App\Http\Controllers;

use App\Mail\CouponUsedMailTemplate;
use App\Mail\DailyStoreReport;
use App\Models\BrokersumoAgent;
use App\Models\CMA\CmaReportListing;
use App\Models\File;
use App\Models\FormSubmit;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class TestController extends Controller
{
    public function index()
    {
        if (App::environment('local'))
            return $a = Auth::loginUsingId(149);
    }

    public function update_vimeo()
    {
    }

    public function submit(Request $request)
    {
    }
}
