<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';
    //Primary key
    public $primaryKey = 'id';
    //TimeStamp
    public $timestamps = true;


    public function user() {
      return $this->belongsTo('App\User');
    }

    public function comments() {
      return $this->hasMany('App\Comment');
    }

    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }

}
