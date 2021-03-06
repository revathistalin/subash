<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use validator;
use Session;
class UserController extends Controller
{
	public function home()
    {  
       $output=DB::table('post')->get();
       $value=DB::table('categories')->get();
        $data['value']=$value;
        $data['output']=$output;
        return view('News/News',$data);
    }
  public function Test($id)
  {
        $list=DB::table('categories_post')->join('categories','categories_post.categories_id','=','categories.id')
                                        ->join('post','categories_post.post_id','=','post.id')
                                        ->select('post.*','categories.name')
                                        ->where('categories_id','=',$id)
                                        ->get();
                                        

         $data['output']=$list;                  

        
       return view('News/Display',$data);

      
  } 




    public function Admin()
    {
       
    	 return view('News/Dashboard');
 
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
$value=DB::table('user')->insert(['name' => $name,'email'=>$email,'password'=>crc32($password)]);
return redirect('home');
}
public function Forget()
{
	return view('Forget');
}
public function page(Request $request)
{
  
  $name=$request->input('name');
  $email=$request->input('email');
	$password=$request->input('password');
	$new=DB::table('user')->select('name','email','rpToken')->where('email','=',$email)->where('password','=',crc32($password))->first();
	$name=$new->name;
  $email=$new->email;
  $rpToken=$new->rpToken;
  Session::put('name',$name);
  Session::put('email',$email);
  Session::put('rpToken',$rpToken);
  if(!$new)
	{
		return redirect('home');
	}
      
	    return redirect('admin');
}
public function send(Request $request)
{ 
  
        $Email=$request->input('email');
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
  return redirect('login')->with('msg','your link is expired');
}


public function Newpassword(Request $request)
{
  $rpToken=$request->input('rpToken');
  $Password=$request->input('password');
  $change=DB::table('user')->where('rpToken','=',$rpToken)->update(['password'=>crc32($Password)]);

  return redirect('admin');
}






}

