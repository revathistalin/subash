<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
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
public function Forget()
{
	return view('Forget');
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
        $Email=$request->input('email');
        //dd($Email
        $time_from = date("Y-m-d H:i", strtotime("+10 min"));
        $data=DB::table('user')->where('email','=',$Email)->update(['rpToken'=>rand(),'rpToken_created_at'=>$time_from] );
       if(!empty($Email))
       { 
        $value=DB::table('user')->where('email','=',$Email)->select('rpToken')->first();
        //$title = $request->input('title');
        $rpToken['value'] =$value;
        Mail::send('email', ['value'=>$value], function ($message)
        {
          $Email=request()->email;

            $message->from('dineshmuthukumar.g@yopmail.com', 'revathi');

            $message->to($Email)->subject('Forget Password Notification');

        });


       //return response()->json(['message' => 'Request completed']);
       return redirect('login');
    }
    //retutn view('LoginList');
  }
public function Password($rpToken)

{
  $time=date("Y-m-d H:i");
  $conform=DB::table('user')->where('rpToken','=',$rpToken)->select('rpToken_created_at','rpToken')->first();
  $method=$conform->rpToken_created_at;
  $rptoken['rpToken']=$rpToken;
  if(strtotime($method)>=strtotime($time))
  {
    return view('ConformPassword',$rptoken);
  }
  return redirect('login')->withErrors(['msg','your link is expired']);
}


public function Newpassword(Request $request)
{
  $rpToken=$request->input('rpToken');
  $Password=$request->input('password');
  $change=DB::table('user')->where('rpToken','=',$rpToken)->update(['password'=>crc32($Password)]);
}



}

