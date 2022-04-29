<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profile';
    protected $fillable = [
        'fullname', 'address', 'phone', 'languages', 'avatar', 'support_specialists', 'loan_officer'
    ];

    protected static function boot()
    {
        parent::boot();
        static::retrieved(function ($model) {
            $model->languages = json_decode($model->languages);
        });
    }
    protected $appends = ['support_specialist_name', 'loan_officer_name'];

    public function getBadgeAttribute()
    {
        $agent = AgentTransaction::where('agent_name', $this->fullname)->first();
        $badge = ['title' => 'None', 'level' => 0];
        if ($agent) {
            if ($agent->total_amounts < 5000000) {
                $badge['title'] = '5 Million Dollar Club';
                $badge['level'] = 1;
            } else if ($agent->total_amounts > 5000000 && $agent->total_amounts < 7000000) {
                $badge['title'] = '7 Million Dollar Club';
                $badge['level'] = 2;
            } else if ($agent->total_amounts > 7000000 && $agent->total_amounts < 10000000) {
                $badge['title'] = '9 Million Dollar Club';
                $badge['level'] = 3;
            } else if ($agent->total_amounts > 10000000 && $agent->total_amounts < 25000000) {
                $badge['title'] = '10 Million Dollar Club';
                $badge['level'] = 4;
            } else if ($agent->total_amounts > 25000000 && $agent->total_amounts < 50000000) {
                $badge['title'] = '25 Million Dollar Club';
                $badge['level'] = 5;
            } else if ($agent->total_amounts > 50000000 && $agent->total_amounts < 75000000) {
                $badge['title'] = '50 Million Dollar Club';
                $badge['level'] = 6;
            } else if ($agent->total_amounts > 75000000 && $agent->total_amounts < 100000000) {
                $badge['title'] = '75 Million Dollar Club';
                $badge['level'] = 7;
            } else if ($agent->total_amounts > 100000000) {
                $badge['title'] = '100 Million Dollar Club';
                $badge['level'] = 8;
            }
        }
        return $badge;
    }

    public function getSupportSpecialistNameAttribute()
    {
        if ($this->support_specialists) {
            return UserProfile::where('user_id', $this->support_specialists)->first()->fullname;
        }
    }
    public function getLoanOfficerNameAttribute()
    {
        if ($this->loan_officer) {
            return UserProfile::where('user_id', $this->loan_officer)->first()->fullname;
        }
    }
}
