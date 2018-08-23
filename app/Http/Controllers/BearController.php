<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\models\Bear;
use APP\models\Fish;
use DB;


class BearController extends Controller
{

public function Bearinsert()
{
   
 

    $bear               = new Bear;
    $bear->name         = 'good';
    $bear->type         = 'pink';
    $bear->dangr_level  = 3;
    //save the bear to the database
    //$bear->save();
   
 //dd($bear->all());
   
 /*$bears = Bear::all();
$bear = Bear::find(1);
 $bearLawly = Bear::where('name', '=', 'super cool')->first();
echo $bearLawly;
$bear =Bear::find(9);
$bear->type='blue';
$bear->save():
$bears=Bear::destroy(24,25);
echo $bears;*/
   $adobot = Bear::where('name', '=', 'lawly')->first();
   $fish = $adobot->fish;
   $fish->weight;
   $adobot->fish->weight;






 }
 public function bearFish(){
 	$bears=DB::table('bears')->join('fish', 'fish.bear_id', '=', 'bears.id')->get();
 	dd($bears);

 	$bear=Bear::with('fish')->get();
 	dd($bear);
 }
}