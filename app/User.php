<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','city','state','country','zip','mobile','picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //===========Relation ship Post=================================
    public function post(){
        return $this->hasMany(Post::Class,'created_by');
    }

    public function authenticationProvider(){
        return $this->hasMany(AuthenticationProvider::class);
    }




}
