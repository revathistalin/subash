<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\MessageBag;
//use App\Http\Requests\StoreBlogPost;


class PostController extends Controller
{


public function home(){

 return view('NewsHome');

}

	public function validation()
{

	return view('Validation');
}
/*public function validationlist(StoreBlogPost $request)
{
 $validated= $request->validater();
       /* 'name' => 'integer|required|max:5',
        'dateofbirth'=>'required',
        'email' =>'required',
        'password'=>'required',
        'phoneno'=>'required',
        'country'=>'required',
        'state'=>'required',
        'gender'=>'required',
        'city'=>'required',
        'address'=>'required']);*/
/*public function validationlist(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'Integer|required|max:255',
        'dateofbirth'=>'required',
        'email' =>'required',
        'password'=>'required',
        'phoneno'=>'required',
        'country'=>'required',
        'state'=>'required',
        'gender'=>'required',
        'city'=>'required',
        'address'=>'required']);
       s

        if ($validator->fails()) {
            return redirect('validation')
                        ->withErrors($validator)
                        ->withInput();*/
   public function validationlist()
   {
      session()->put('name',request()->name);
      session()->get('name');
      session()->put('city',request()->city);
      session()->get('city');

      //echo session()->pull('name');
     // session()->keep('name');
      echo session()->reflash();
      //session()->flush('name');
      //session()->flash('name');
      //session()->forget('name');


         //Session::extend('mongo', function ($app) {
            // Return implementation of SessionHandlerInterface...
            //return new MongoSessionHandler;

}
}