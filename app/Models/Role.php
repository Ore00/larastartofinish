<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
