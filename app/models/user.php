<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
 public function role() {
        return $this->hasMany('role'); // this matches the Eloquent model
    }   
}
