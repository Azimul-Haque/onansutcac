<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function newscategory() {
      return $this->belongsTo('App\Newscategory');
    }
}
