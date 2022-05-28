<?php

namespace App\Models\Feed;

use App\Models\User;
use App\Models\Feed\Tag;
use App\Models\Feed\Like;
use App\Models\Feed\Image;
use App\Models\Feed\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function like()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function tag() {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function agent() {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();
      
        static::deleting(function ($model) {
            $model->image()->delete();
            $model->comment()->delete();
            $model->like()->delete();
        });
    }
}
