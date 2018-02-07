<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function author()
    {
        return $this->hasMany('App\Comment');
    }
    public function comments()
    {
        return $this->belongsTo('App\Comment');;
    }
}
