<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
    * Get all of the owning commentable models.
    */
    public function commentable(){
        return $this->morphTo();
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }

    public function article() {
        return $this->belongsTo('App\Models\Article');
    }
    public function articles()
    {
        return $this->belongsToMany('App\Models\Articles');
    }
}
