<?php

namespace App\Models;

use App\Mail\BrokersumoMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BrokersumoAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_name', 'sales_volumes'
    ];

    public function setSalesVolumesAttribute($value)
    {
        if ($this->sales_volumes != $value) {
            // Log::alert('First');
            $profile = UserProfile::where('fullname', $this->agent_name)->first();
            if ($profile) {
                // Log::alert('Second');
                $user = User::find($profile->user_id);
                if ($user) {
                    // Log::alert('Third');
                    $badge = ['title' => 'None', 'level' => 0];
                    if ($value < 5000000) {
                        $badge['title'] = '5 Million Dollar Club';
                        $badge['level'] = 1;
                    } else if ($value > 5000000 && $value < 7000000) {
                        $badge['title'] = '7 Million Dollar Club';
                        $badge['level'] = 2;
                    } else if ($value > 7000000 && $value < 10000000) {
                        $badge['title'] = '9 Million Dollar Club';
                        $badge['level'] = 3;
                    } else if ($value > 10000000 && $value < 25000000) {
                        $badge['title'] = '10 Million Dollar Club';
                        $badge['level'] = 4;
                    } else if ($value > 25000000 && $value < 50000000) {
                        $badge['title'] = '25 Million Dollar Club';
                        $badge['level'] = 5;
                    } else if ($value > 50000000 && $value < 75000000) {
                        $badge['title'] = '50 Million Dollar Club';
                        $badge['level'] = 6;
                    } else if ($value > 75000000 && $value < 100000000) {
                        $badge['title'] = '75 Million Dollar Club';
                        $badge['level'] = 7;
                    } else if ($value > 100000000) {
                        $badge['title'] = '100 Million Dollar Club';
                        $badge['level'] = 8;
                    }
                    // Mail::to($user->email)->send(new BrokersumoMail($badge));
                    Mail::to('test@gmail.com')->send(new BrokersumoMail($badge));
                }
            }
        }
        $this->attributes['sales_volumes'] = $value;
    }
}
