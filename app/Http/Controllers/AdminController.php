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
         $value=DB::table('user_role')->insert(['user_id'=>'6','role_id'=>'1']);
         
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
    	if(!$output)
        {
            return view('News/Change',$details);
        }
        $output=$output->name;


        if(empty($output))
        {
            $output="";
        }
        return view('News/Change',$details,['name'=>$output]);


    }
    public function Data(Request $request)
    {
    	$currentname=$request->input('role_name');
        $role=DB::table('role')->where('name','=',$currentname)->select('id')->first();
        $role=$role->id;
        //dd($role);
        $user_id=$request->input('id');
        $value=DB::table('user_role')->where('user_id','=',$user_id)->get();
       
      if(!$value)
      {
        DB::table('user_role')->insert(['user_id'=>$user_id,'role_id'=>$role]);

      }
      DB::table('user_role')->where('user_id','=',$user_id)->update(['role_id'=>$role]);
      return redirect('user');
          }


    public function Categorylist()
    {
        return view('News/Category');
    }
    public function Categoryinsert(Request $request)
    {
        $name = $request->input('name');
        $value=DB::table('categories')->insert(['name' => $name]);
        return redirect('categorylist');

    }
    public function Categoryview()
    {
        $value=DB::table('categories')->get();
        $details['value']=$value;
        return view('News/Categoryview',$details);
    }
    
    public function Link($id)
    {
    $new=DB::table('categories')->select('id','name')->where('id',$id)->first();
    $model['method']=$new;
    return view('News/Editvalue',$model);
    }
    public function Updatelist(Request $request)
    {
    $id=request()->id;
    $name=request()->name;
    $value=DB::table('categories')->where('id',$id)->update(['name'=>$name]);
    return redirect('categoryview');
    }
    public function Deletelist($id)
{
    $deletevalue=DB::table('categories')->where('id','=',$id)->delete();
    return redirect('categoryview');
}
    public function Insert()
    {
        return view('News/Insert');
    }
    public function Insertlist(Request $request)
    {

        $title=request()->title;
        $body=request()->body;
        $image=request()->image;
        $value=DB::table('post')->insert(['title' => $title,'body'=>$body,'image'=>$image]);

    }
    public function Post()
    {
        $value=DB::table('post')->get();
        $data['list']=$value;
        return view('News/Viewlist',$data);
    }
    public function Postinsert($id)
    {
        $order=DB::table('categories')->get();
        //$order['features']=$order;

        $output=DB::table('post')->where('id','=',$id)->select('id','title','body')->first();
        $data['output']=$output;
        $data['order']=$order;
        $input=DB::table('categories')->where('id','=',$id)->select('name')->first();
        if($input)
        {
            return view('News/Resultupdate',$data);
        }
        $input=$input->name;
        if(empty($input))
        {
            $input="";
            return view('News/Resultupdate',$data,['name'=>$input]);
        }
     }   
        
        
    public function Updateresult(Request $request)
    {
        $post_id=$request->input('id');
        
        $categories_id=$request->input('name');
    //dd($result);
        foreach($categories_id as $value)
        {
        echo $value;
    
            $add=DB::table('categories_post')->where('post_id','=',$post_id)->get();

        if($add)
            {
            DB::table('categories_post')->where('post_id','=',$post_id)->update(['categories_id'=>$value]);
        
            }
           DB::table('categories_post')->insert(['categories_id'=>$value,'post_id'=>$post_id]);
    
        }
    }



}





