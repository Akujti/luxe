<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profile';
    protected $fillable = [
        'fullname', 'address', 'phone', 'languages', 'avatar', 'support_specialists', 'loan_officer', 'service_areas'
    ];

    protected static function boot()
    {
        parent::boot();
        static::retrieved(function ($model) {
            $model->languages = json_decode($model->languages);
        });
    }

    protected $appends = ['support_specialist_name', 'loan_officer_name', 'badge'];

    public function getBadgeAttribute()
    {
        $agent = BrokersumoAgent::where('agent_name', $this->fullname)->first();
        $badge = [
            'title' => 'None',
            'level' => 0,
            'sales_volumes' => 0,
            'next_sales_level' => 0,
            'next_yearly_sales_level' => 0,
            'yearly_sales_volumes' => 0,
            'yearly_title' => 'None',
            'yearly_level' => 0
        ];
        if ($agent) {
            $badge['sales_volumes'] = $agent->sales_volumes;
            $badge['yearly_sales_volumes'] = $agent->yearly_sales_volumes;
            $badge['next_sales_level'] = 10000000 - $agent->sales_volumes;
            $badge['next_yearly_sales_level'] = 5000000 - $agent->yearly_sales_volumes;

            if ($agent->yearly_sales_volumes >= 5000000 && $agent->yearly_sales_volumes < 10000000) {
                $badge['yearly_title'] = 'Earn $250 Monthly Marketing Budget';
                $badge['yearly_level'] = 1;
                $badge['next_yearly_sales_level'] = 10000000 - $agent->yearly_sales_volumes;
            } else if ($agent->yearly_sales_volumes >= 10000000 && $agent->yearly_sales_volumes < 15000000) {
                $badge['yearly_title'] = 'Earn $500 Monthly Marketing Budget';
                $badge['yearly_level'] = 2;
                $badge['next_yearly_sales_level'] = 15000000 - $agent->yearly_sales_volumes;
            } else if ($agent->yearly_sales_volumes >= 15000000) {
                $badge['yearly_title'] = 'Earn $1,000 Monthly Marketing Budget';
                $badge['yearly_level'] = 3;
                $badge['next_yearly_sales_level'] = 0;
            }

            if ($agent->sales_volumes >= 10000000 && $agent->sales_volumes < 25000000) {
                $badge['title'] = '10 Million Dollar Club';
                $badge['level'] = 1;
                $badge['next_sales_level'] = 25000000 - $agent->sales_volumes;
            } else if ($agent->sales_volumes >= 25000000 && $agent->sales_volumes < 50000000) {
                $badge['title'] = '25 Million Dollar Club';
                $badge['level'] = 2;
                $badge['next_sales_level'] = 50000000 - $agent->sales_volumes;
            } else if ($agent->sales_volumes >= 50000000 && $agent->sales_volumes < 75000000) {
                $badge['title'] = '50 Million Dollar Club';
                $badge['level'] = 3;
                $badge['next_sales_level'] = 75000000 - $agent->sales_volumes;
            } else if ($agent->sales_volumes >= 75000000 && $agent->sales_volumes < 100000000) {
                $badge['title'] = '75 Million Dollar Club';
                $badge['level'] = 4;
                $badge['next_sales_level'] = 100000000 - $agent->sales_volumes;
            } else if ($agent->sales_volumes >= 100000000) {
                $badge['title'] = '100 Million Dollar Club';
                $badge['level'] = 5;
                $badge['next_sales_level'] = 0;
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
