<?php

namespace App\Facebook;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreVideo extends Model
{
    use SoftDeletes;

    public $appends = [
        'humanTime','firstThumbnail'
    ];


    public function thumbnail()
    {
       return $this->belongsTo('App\Facebook\Thumbnail','fb_id','video_id');
    }

    public function getHumanTimeAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getFirstThumbnailAttribute(){
        return $this->thumbnail->link;
    }

}
