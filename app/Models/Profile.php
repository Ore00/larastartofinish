<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','city', 'about',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

     /**
    * Get all of the profiles' comments.
    */
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
      }
}
