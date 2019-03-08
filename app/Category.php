<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // public function user() {
  //   return $this->belongsTo('App\User');
  // }
    // public function post() {
    //   return $this->belongsTo('App\Post');
    // }

    // protected $table = 'categories';
    public function posts() {
      return $this->hasMany('App\Post');
    }

}
