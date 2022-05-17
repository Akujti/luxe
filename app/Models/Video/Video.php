<?php

namespace App\Models\Video;

use Carbon\Carbon;
use Vimeo\Laravel\Facades\Vimeo;
use App\Models\Video\VideoReviewStar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['video_id', 'folder_id', 'presenter_name', 'date', 'title', 'description', 'thumbnail', 'embed_url'];

    protected $appends = ['vimeo_details'];

    public function getVimeoDetailsAttribute()
    {
        $data = [
            'name' => $this->title,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'embed_url' => $this->embed_url,
            'created_at' => $this->created_at
        ];

        return $data;

        //Not needed
        $response = Vimeo::request('/videos/' . $this->video_id, [], 'GET');

        if ($response && $response['status'] != 404) {
            $data = [
                'name' => $response['body']['name'],
                'description' => $response['body']['description'],
                'thumbnail' => $response['body']['pictures']['base_link'],
                'embed_url' => $response['body']['player_embed_url'],
                'created_at' => Carbon::parse($response['body']['created_time'])->diffForHumans()
            ];
        } else {
            $data = [
                'name' => '',
                'description' => '',
                'thumbnail' => '',
                'embed_url' => '',
                'created_at' => ''
            ];
        }
    }

    public function reviews()
    {
        return $this->hasMany(VideoReview::class, 'video_id');
    }
    public function comments()
    {
        return $this->hasMany(VideoComment::class, 'video_id');
    }

    public function files()
    {
        return $this->hasMany(VideoFile::class, 'video_id');
    }
}
