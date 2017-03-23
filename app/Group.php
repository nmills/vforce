<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

	public function volunteers(){

        return $this->belongsToMany('App\Volunteer')
            ->withTimestamps();

    }

}
