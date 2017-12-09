<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';

    protected $fillable = [
        'user', 'email', 'password', 'avatar','location'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'is_admin' => 'boolean'
    ];

    public function place(){
      return $this->hasOne(Place::class);
    }

    public function comments(){
      return $this->hasMany(Comment::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function isAdmin() {
        return $this->is_admin;
    }
}
