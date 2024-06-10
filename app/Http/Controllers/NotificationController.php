<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::with('emails')->paginate(20);
        return view('admin.notifications.index', compact('notifications'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'notification_id' => 'required|exists:notifications,id',
            'emails' => 'required|array',
            'emails.*' => 'required|email'
        ]);

        $bcc = $request->bcc;
        $notification = Notification::find($request->notification_id);

        $notification->emails()->delete();

        if ($request->emails) {
            $emailModels = [];
            foreach ($request->emails as $row) {
                $emailModels[] = [
                    "email" => $row,
                    "bcc" => isset($bcc[$row])
                ];
            }
            $notification->emails()->createMany($emailModels);
        }

        return back()->with('message', 'Updated Successfully');
    }
}
