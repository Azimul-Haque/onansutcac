<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $timestamps = false;

    public function users(){
        return $this->hasMany('App\User');
    }

    public function hospitals(){
        return $this->hasMany('App\Hospital');
    }

    public function doctors(){
        return $this->hasMany('App\Doctor');
    }

    public function blooddonors(){
        return $this->hasMany('App\Blooddonor');
    }

    public function ambulances(){
        return $this->hasMany('App\Ambulance');
    }

    public function admins(){
        return $this->hasMany('App\Admin');
    }

    public function police(){
        return $this->hasMany('App\Police');
    }

    public function fireservices(){
        return $this->hasMany('App\Fireservice');
    }

    public function lawyers(){
        return $this->hasMany('App\Lawyer');
    }

    public function rentacars(){
        return $this->hasMany('App\Rentacar');
    }

    public function coachings(){
        return $this->hasMany('App\Coaching');
    }

    public function rabs(){
        return $this->hasMany('App\Rab');
    }

    public function buses()
    {
        return $this->hasMany('App\Bus');
    }

    public function busesTo()
    {
        return $this->hasMany('App\Bus', 'to_district', 'id');
    }

    public function journalists(){
        return $this->hasMany('App\Journalist');
    }

    public function newspapers(){
        return $this->hasMany('App\Newspaper');
    }
}
