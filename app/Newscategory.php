<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newscategory extends Model
{
    public function newscategory() {
      return $this->belongsTo('App\Newscategory');
    }
}
