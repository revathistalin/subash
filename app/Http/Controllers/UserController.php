<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
	public function home()
    {
        return view('News/HomeNews');

  
    }
    public function Admin()
    {

    	 return view('Dashboard');
 
   }

   public function Register()
   {
   	    return view('Register');
   }
 
 public function Login()
   {
   	    return view('LoginList');
   }
 
public function Insert(Request $request)
{

$name = $request->input('name');
$email = $request->input('email');
$password = $request->input('password');
DB::table('user')->insert(['name' => $name,'email'=>$email,'password'=>crc32($password)]);

}
public function Reset()
{
	return view('Reset');
}
public function page(Request $request)
{
	$email=$request->input('email');
	$password=$request->input('password');
	$new=DB::table('user')->select('email','password')->where('email','=',$email)->where('password','=',crc32($password))->first();
	if(!$new)
	{
		return view('News/HomeNews');
	}
	    return view('Dashboard');
}
public function send(Request $request)
{
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('email', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('revathi.stalin@kenhike.com', 'revathi');

            $message->to('revathi.stalin@kenhike.com');

        });


       return response()->json(['message' => 'Request completed']);
    }

}

