<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newscategory extends Model
{
    public $timestamps = false;
    
    public function news() {
      return $this->hasMany('App\News');
    }
}
