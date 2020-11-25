<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'title', 'body'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
