<?php

namespace App\Models\Video;

use Carbon\Carbon;
use Vimeo\Laravel\Facades\Vimeo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['video_id', 'folder_id'];

    protected $appends = ['vimeo_details'];

    public function getVimeoDetailsAttribute() {
        $response = Vimeo::request('/videos/'. $this->video_id, [ ], 'GET');

        
        if($response['status'] != 404) {
            $data = [
                'name' => $response['body']['name'],
                'thumbnail' => $response['body']['pictures']['base_link'],
                'created_at' => Carbon::parse($response['body']['created_time'])->diffForHumans()
            ];
        } else {
            $data = [
                'name' => '',
                'thumbnail' => '',
                'created_at' => ''
            ];
        }
        return $data;
    }
}
