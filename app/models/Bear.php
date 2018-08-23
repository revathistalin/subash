<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

use App\models\Fish;

class Bear extends Model
{
protected $fillable = array('name', 'type', 'dangr_level');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each bear HAS one fish to eat
    public function fish() {
        return $this->hasOne('App\models\Fish'); // this matches the Eloquent model
    }

    // each bear climbs many trees
    public function trees() {
        return $this->hasMany('Tree');
    }

    // each bear BELONGS to many picnic
    // define our pivot table also
    public function picnics() {
        return $this->belongsToMany('Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
    }

}
