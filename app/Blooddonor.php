<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blooddonor extends Model
{
    public function editors()
    {
        return $this->morphToMany(User::class, 'accessible', 'editor_access');
    }
    
    public function district(){
        return $this->belongsTo('App\District');
    }

    public function upazilla(){
        return $this->belongsTo('App\Upazilla');
    }

    public function blooddonormembers(){
        return $this->hasMany('App\Blooddonormember');
    }
}
