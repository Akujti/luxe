<?php

namespace App\Models\Feed;

use App\Models\User;
use App\Models\Feed\Tag;
use App\Models\Feed\Image;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    protected $with = ['replies', 'user', 'image'];
    public function commentable() {
        return $this->morphTo();
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function tag() {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function like()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    protected static function boot()
    {
        parent::boot();
      
        static::deleting(function ($model) {
            $model->tag()->detach();
            $model->replies()->delete();
        });
    }
}
