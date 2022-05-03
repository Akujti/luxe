<?php

namespace App\Models;

use App\Models\LuxeStore\Order\LuxeStoreOrder;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  Notifiable, HasApiTokens;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'isAdmin', 'wp_id', 'role', 'optin'
    ];

    protected $appends = ['avatar'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function orders()
    {
        return $this->hasMany(LuxeStoreOrder::class, 'user_id');
    }

    public function notes()
    {
        return $this->hasMany(UserNote::class, 'user_id');
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class)->withDefault();
    }

    public function getAvatarAttribute()
    {
        if ($this->profile->id) {
            if ($this->profile->avatar) {
                return asset('storage/' . $this->profile->avatar);
            }
            return 'https://ui-avatars.com/api/name=' . $this->profile->fullname . '?size=256';
        }
        return 'https://ui-avatars.com/api/name=' . $this->email . '?size=256';
    }
}
