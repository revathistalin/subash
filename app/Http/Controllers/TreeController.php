<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\models\Tree;

class TreeController extends Controller
{

public function Treedetails()
{
	return view('Tree');
}
public function Treeresult(Request $request){
	$tree =new Tree();
$type = $request->input('type');
echo "weight is :" .$type."<br>";
$age = $request->input('age');
echo "age is :" .$age."<br>";
$bear_id = $request->input('bearid');
echo "bear_id is :" .$bear_id."<br>";

$tree->type=$type;
$tree->age=$age;
$tree->bear_id=$bear_id;
$tree->save();
dd($tree->all());


}
}
