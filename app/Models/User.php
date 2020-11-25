<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile() {
        return $this->hasOne('App\Models\Profile');
    }

    public function article() {
        return $this->hasOne('App\Models\Article');
    }

    public function articles() {
        return $this->hasMany('App\Models\Article');
    }

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    public function country(){
        return $this->belongsTo('App\Models\Country');
    }

    public function comment() {
        return $this->hasOne('App\Models\Comment');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
}
