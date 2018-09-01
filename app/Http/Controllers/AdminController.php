<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use validator;
use Session;
class AdminController extends Controller
{
	public function Admin()
	{
		return view('News/Dashboard');
	}

	public function Map()
	{
	
        return view('News/Map');
	}
    public function Updateprofile()
    {
    	return view('News/Updateprofile');
    }
    public function Updatevalue(Request $request)
    {
        $rpToken=$request->input('rpToken');
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $data=DB::table('user')->where('rpToken','=',$rpToken)->update(['name'=>$name,'email'=>$email,'password'=>crc32($password)]);
        return redirect('updateprofile');
    }
    public function Chart()
    {
    	return view('News/Chart');
    }
    public function Resetpassword()
    {
    	return view('News/Resetpassword');
    }

    public function Resetvalue(Request $request)
    {
    	$rpToken=$request->input('rpToken');
    	$Current_password=$request->input('password');
    	$new_password=$request->input('newpassword');
    	$change=DB::table('user')->where('rpToken','=',$rpToken)->where('password','=',crc32($Current_password))->update(['password'=>crc32($new_password)]);
        return redirect('resetpassword');

    }
   public function Relation()
    {
         $value=DB::table('role')->insert(['name'=>'developer']);
         if(!$value)
         {
         
         	die();
         }
     }
       
   public function User()
    {

        $value=DB::table('user')->get();
        $details['value']=$value;
    	return view('News/User',$details);
    }
    public function New($id)
    {
    	$input=DB::table('user')->where('id','=',$id)->select('id','name','email')->first();
    	$details['input']=$input;
    	$output=DB::table('role')->where('id','=',$id)->select('name')->first();
    	$name=$output->name;
        return view('News/Change',$details,['name'=>$name]);


    }
    public function Data(Request $request)
    {
    	$name=$request->input('role.name');
        $role=DB::table('role')->where('role.name','=',$name)->select('role.id')->first();
        $user_id=$request->input('user.id');
        $value=DB::table('user_role')->where('user_id','=',$user_id)->get();
        if(!$value)
        {
        	$method=DB::table('user_role')->update(['user_id'=>$value,'role_id'=>$role]);
        }

    }

}