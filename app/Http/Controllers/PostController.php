<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Validator;
use DB;


class PostController extends Controller
{
	public function validation()
{

	return view('Validation');
}
public function validationlist(Request $request)
{
 $validatedData = $request->validate([
        'name' => 'integer|required|max:5',
        'email' => 'required']);
}
}
