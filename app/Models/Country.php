<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function articles()
    {
        return $this->hasManyThrough('App\Models\Article', 'App\Models\User');
    }
}
