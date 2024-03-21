<?php

namespace App\Http\Controllers;

use App\Models\CMA\CmaReport;
use App\Models\CMA\CmaReportListing;
use Carbon\Carbon;
use App\Models\Form;
use App\Models\EmailsForm;
use App\Models\FormSubmit;
use Illuminate\Http\Request;
use App\Models\CustomSection;
use App\Models\AgentTransaction;
use App\Jobs\OrderStatusNotCompleted;
use App\Http\Requests\Form\UpdateRequest;
use App\Http\Requests\Form\UpdateFormRequest;
use App\Jobs\OrderStatusTest;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function index()
    {
        $stats = $this->stats();
        $news_feed = CustomSection::whereTitle('News Feed')->first();
        $showing_agents = CustomSection::whereTitle('Showing Agents')->first();
        return view('admin.index', compact('stats', 'news_feed', 'showing_agents'));
    }

    public function forms()
    {
        $forms = Form::with('emails')->orderBy('title', 'asc')->paginate(20);
        return view('admin.forms', compact('forms'));
    }

    public function update(UpdateFormRequest $req)
    {
        $form = Form::find($req->id);
        $form->fill($req->only(['title', 'path', 'verbiages_text', 'verbiages_title', 'after_submit_verbiages_text', 'after_submit_verbiages_title', 'email_verbiages_text']));
        $form->save();

        return back()->with('message', 'Successfully Updated');
    }

    public function delete(Request $req)
    {
        $form = Form::find($req->id);
        if ($form) {
            $form->delete();
        }

        return back()->with('message', 'Successfully Updated');
    }

    public function update_form(UpdateRequest $req)
    {
        $bcc = $req->bcc;
        $form = Form::find($req->id);

        $form->emails()->delete();

        if ($req->emails) {
            $emailModels = [];
            foreach ($req->emails as $row) {
                $emailModels[] = [
                    "email" => $row,
                    "bcc" => isset($bcc[$row])
                ];
            }

            $form->emails()->createMany($emailModels);
        }

        return back()->with('message', 'Updated Successfully');
    }

    public function stats()
    {
        $data[0] = FormSubmit::where('form_title', 'Pre-Approval Form')->count();
        $data[1] = FormSubmit::where('form_title', 'Logo Creation Request')->count();
        $data[2] = FormSubmit::where('form_title', 'TEAM DADE - ZILLOW LEADS WEEKLY UPDATE')->count();
        $data[3] = FormSubmit::where('form_title', 'TEAM FLEX - ZILLOW LEADS WEEKLY UPDATE')->count();
        $top_agents = AgentTransaction::orderBy('total_amounts', 'DESC')->take(5)->get();
        $data[4] = $top_agents->pluck('agent_name');
        $data[5] = $top_agents->pluck('total_amounts');
        return collect($data);
    }

    public function testjob(Request $request)
    {
        $row = CmaReport::create([
            'user_id' => auth()->id(),
            'address' => $request->listing_id
        ]);

        $listings = explode(',', $request->listings_id);

        foreach ($listings as $listing) {
            $res = $this->getListingData($listing);
            CmaReportListing::create(['cma_report_id' => $row->id, 'listing_id' => $listing, 'data' => json_encode($res)]);
        }

        return true;
    }

    public function getListingData($id)
    {
        $cmaApiCredentails = [
            'apiLink' => env('CMA_API_URL', 'https://api.bridgedataoutput.com/api/v2/'),
            'serverToken' => env('CMA_SERVER_TOKEN'),
            'browserToken' => env('CMA_BROWSER_TOKEN'),
            'dataset' => env('CMA_DATASET'),
            'clientId' => env('CMA_CLIENT_ID'),
            'clientSecret' => env('CMA_CLIENT_SECRET'),
        ];

        $url = $cmaApiCredentails['apiLink'] . $cmaApiCredentails['dataset'] . '/listings/' . $id . '?access_token=' . $cmaApiCredentails['serverToken'];
        $res = Http::get($url);
        return $res->json()['bundle'];
    }
}
