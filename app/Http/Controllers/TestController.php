<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;


class TestController extends Controller
{

public function TestTeam($id)
{
	//return view('Hello',['id'=>$id]);
print_r(Session::all());


}
}