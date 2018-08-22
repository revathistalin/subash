<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use App\models\Bear;

class BearController extends Controller
{

public function Beardetails()
{
   
 

    $bear               = new Bear;
    $bear->name         = 'lawly';
    $bear->type         = 'white';
    $bear->dangr_level  = 8;
    save the bear to the database
    $bear->save();
   
   dd($bear->all());
   
 $bears = Bear::all();
$bear = Bear::find(1);
 $bearLawly = Bear::where('name', '=', 'super cool')->first();
echo $bearLawly;
Bear::destroy(1, 2);
$bear =Bear::find(9);
$bear->type='blue';
$bear->save():
 
 }
}