<?php

namespace App\Models;

use App\Mail\BrokersumoMail;
use App\Mail\BrokersumoYearlyMail;
use App\Notifications\BrokersumoLevelup;
use App\Notifications\BrokersumoLevelupYearly;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BrokersumoAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_name', 'sales_volumes', 'yearly_sales_volumes', 'deals'
    ];

    public function setSalesVolumesAttribute($value)
    {
        if ($this->sales_volumes <= $value && $value > 0) {
            $profile = UserProfile::where('fullname', $this->agent_name)->first();
            if ($profile) {
                $user = User::find($profile->user_id);
                if ($user) {
                    $badge = ['title' => 'None', 'level' => 0];
                    if ($value >= 10000000 && $value < 25000000) {
                        $badge['title'] = '10 Million Dollar Club';
                        $badge['level'] = 1;
                    } else if ($value >= 25000000 && $value < 50000000) {
                        $badge['title'] = '25 Million Dollar Club';
                        $badge['level'] = 2;
                    } else if ($value >= 50000000 && $value < 75000000) {
                        $badge['title'] = '50 Million Dollar Club';
                        $badge['level'] = 3;
                    } else if ($value >= 75000000 && $value < 100000000) {
                        $badge['title'] = '75 Million Dollar Club';
                        $badge['level'] = 4;
                    } else if ($value >= 100000000) {
                        $badge['title'] = '100 Million Dollar Club';
                        $badge['level'] = 5;
                    }
                    try {
                        // $user->notify(new BrokersumoLevelup($badge));
                        // Mail::to($user->email)->send(new BrokersumoMail($badge));
                    } catch (\Throwable $th) {
                        Log::alert('Cannot send total sales volume to ' . $user->email);
                    }
                }
            }
        }
        $this->attributes['sales_volumes'] = $value;
    }

    public function setYearlySalesVolumesAttribute($value)
    {
        $this->attributes['yearly_sales_volumes'] = $value;
        return;
        if ($this->yearly_sales_volumes <= $value && $value > 0) {
            $profile = UserProfile::where('fullname', $this->agent_name)->first();
            if ($profile) {
                $user = User::find($profile->user_id);
                if ($user) {
                    $badge = ['yearly_title' => 'None', 'yearly_level' => 0];
                    if ($value >= 5000000 && $value < 10000000) {
                        $badge['yearly_title'] = 'Earn $250 Monthly Marketing Budget';
                        $badge['yearly_level'] = 1;
                    } else if ($value >= 10000000 && $value < 15000000) {
                        $badge['yearly_title'] = 'Earn $500 Monthly Marketing Budget';
                        $badge['yearly_level'] = 2;
                    } else if ($value >= 15000000) {
                        $badge['yearly_title'] = 'Earn $1,000 Monthly Marketing Budget';
                        $badge['yearly_level'] = 3;
                    }
                    try {
                        // $user->notify(new BrokersumoLevelupYearly($badge));
                        // Mail::to($user->email)->send(new BrokersumoYearlyMail($badge));
                    } catch (\Throwable $th) {
                        Log::alert('Cannot send yearly sales volume to ' . $user->email);
                    }
                }
            }
        }
        $this->attributes['yearly_sales_volumes'] = $value;
    }
}
