<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function user() {
        return $this->belongsTo('user');
}
