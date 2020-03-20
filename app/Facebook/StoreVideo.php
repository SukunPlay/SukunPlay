<?php

namespace App\Facebook;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreVideo extends Model
{
    use SoftDeletes;

    public $appends = [
        'humanTime'
    ];


    public function getHumanTimeAttribute()
    {
        return $this->created_at->diffForHumans();
    }

}
