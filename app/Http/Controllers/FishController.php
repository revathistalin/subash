<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\models\Fish;

class FishController extends Controller
{

public function Fishdetails()
{
	return view('Fish');
}
public function Fishresult(Request $request){
	$fish =new Fish();
//	$fish->weight='10';
//	$fish->bear_id='3';
//	$fish->save();


$weight = $request->input('weight');
echo "weight is :" .$weight."<br>";
$bear_id = $request->input('bearid');
echo "bear id  is:" .$bear_id."<br>";
$fish->weight=$weight;
	$fish->bear_id=$bear_id;
	$fish->save();
dd($fish->all());
   
  //return view('Result',['weight'=$weight,'bear_id'=$bear_id]);



}
}