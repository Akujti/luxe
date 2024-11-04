<?php

namespace App\Models;

use App\Models\LuxeStore\Order\LuxeStoreOrder;
use App\Models\Video\Video;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use  Notifiable, HasApiTokens, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'wp_id',
        'role',
        'optin',
        'showing_agent',
        'app_link',
        'coming_soon_notifications'
    ];

    protected $appends = ['avatar'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
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

    public function attending_events()
    {
        return $this->belongsToMany(Event::class);
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

    public function form_submits()
    {
        return $this->hasMany(FormSubmit::class, 'agent_email', 'email')->orderBy('id', 'desc');
    }

    public function template_submits()
    {
        return $this->hasMany(TemplateSubmit::class, 'agent_email', 'email')->orderBy('id', 'desc');
    }

    public function getAvatarAttribute()
    {
        if ($this->profile->id) {
            if ($this->profile->avatar) {
                return asset('storage/' . $this->profile->avatar);
            } else if (trim($this->profile->fullname))
                return 'https://ui-avatars.com/api/?name=' . $this->profile->fullname . '&size=256&format=png';
            return 'https://ui-avatars.com/api/?name=' . $this->email . '&size=256&format=png';
        }
        return 'https://ui-avatars.com/api/?name=' . $this->email . '&size=256&format=png';
    }

    public function checkout_info()
    {
        return $this->hasOne(UserCheckoutInformation::class)->withDefault();
    }

    public function getIsAdminAttribute($value)
    {
        return ($value || $this->role == 'admin') ? 1 : 0;
    }

    public function getIsSilverTierAttribute()
    {
        return $this->status == 1;
    }

    public function getIsGoldTierAttribute()
    {
        return $this->status == 2;
    }

    public function getIsPlatinumTierAttribute()
    {
        return $this->status == 3 || $this->status == 4;
    }

    public function getIsPlatinumPlusTierAttribute()
    {
        return $this->status == 3;
    }

    public function getIsPlatinumLiteTierAttribute()
    {
        return $this->status == 4;
    }

    public function favoriteVideos(): BelongsToMany
    {
        return $this->belongsToMany(Video::class, 'favorite_videos');
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
