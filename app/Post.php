<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;


class Post extends Model
{
    protected $fillable = [
        'name', 'description', 'created_by','status',
    ];

    //===========Relation with User=================================
    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }

    public function comments(){
       return $this->hasMany(Comment::Class,'post_id');
    }

}
