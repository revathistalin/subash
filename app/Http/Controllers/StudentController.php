<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use DB;


class StudentController extends Controller
{
public function Student()
{
	return view('Studentdetails');
}
/*DB::table('student')->insert(
    ['name' => 'subash','email'=>'muthu@gmail.com','country'=>'india','city'=>'chennai']
);

DB::table('student')
            ->where('id', 2)
            ->update(['email' => 'aaa@gmail.com']);

DB::table('student')->where('id', '<', 2)->delete();*/

public function Studentinsert(Request $request)
{
$name = $request->input('name');
echo "Name is :" .$name."<br>";
$email = $request->input('email');
echo "email is :" .$email."<br>";
$email = $request->input('email');
echo "Email is :" .$email."<br>";
$country = $request->input('country');
echo "Country is :" .$country."<br>";
$city = $request->input('city');
echo "City is :" .$city."<br>";

DB::table('student')->insert(
    ['name' => "$name",'email'=>"$email",'country'=>"$country",'city'=>"$city"]
);
$student=DB::table('student')->get();
dd($student);
}
public function Studentlist()
{
	$studentlist=DB::table('student')->get();
	$data['student']=$studentlist;
	return view('List',$data);
	
}
public function Value($id)
{
	$new=DB::table('student')->select('id','name','email','country','city')->where('id',$id)->first();
	$model['method']=$new;
    return view('Edit',$model);
}

public function Studentupdate()
{
	$id=request()->id;
	$name_update=request()->name;
	$email_update=request()->email;
	$country_update=request()->country;
	$city_update=request()->city;
    $edit=DB::table('student')->where('id',$id)->update(['name'=>$name_update,'email'=>$email_update,'country'=>$country_update,'city'=>$city_update]);
	//dd($edit);
	
}
public function Studentdelete($id)
{
	$deletevalue=DB::table('student')->where('id','=',$id)->delete();
}


public function Studentmark($id)
{
   return view('Mark',['id'=>$id]);
}
public function Marklist(Request $request)
{
$student_id=$request->input('id');
$computer = $request->input('computer');
echo "compuer mark  is :" .$computer."<br>";
$maths = $request->input('maths');
echo "maths mark is :" .$maths."<br>";	
$chemistry = $request->input('chemistry');
echo "chemistry mark is :" .$chemistry."<br>";
$tamil = $request->input('tamil');
echo "tamil mark  is :" .$tamil."<br>";

$total=$computer+$maths+$chemistry+$tamil;
$result=DB::table('marklist')->insert(['student_id'=>"$student_id",'computer' => "$computer",'maths'=>"$maths",'chemistry'=>"$chemistry",'tamil'=>"$tamil",'total'=>"$total"]);
}
public function View($id)
{
	$result=DB::table('marklist')->select('id','student_id','computer','maths','chemistry','tamil')->where('student_id',$id)->first();
	$update['change']=$result;
	if(!$result)
	{
		return view('Mark',['id'=>$id]);
	}
		
    return view('Markupdate',$update);
}
public function Updatemark()
{
	$id=request()->id;
	$student_id=request()->student_id;
	$computer_update=request()->computer;
	$maths_update=request()->maths;
	$chemistry_update=request()->chemistry;
	$tamil_update=request()->tamil;
	$total_update=$computer_update+$maths_update+$chemistry_update+$tamil_update;
    $listupdate=DB::table('marklist')->where('id',$id)->update(['student_id'=>$student_id,'computer'=>$computer_update,'maths'=>$maths_update,'chemistry'=>$chemistry_update,'tamil'=>$tamil_update,'total'=>$total_update]);
}


/*public function Rank()
{
   //$collection = collect(marklist::orderBy('total', 'DESC')->get());
   //$data       = $collection->where('id', $this->id);
   //$value      = $data->keys()->first() + 1;
   $users = DB::table('marklist')->orderBy('total', 'desc')->pluck('id')->toArray();
   $aaa['bbb']=$users;
   return view('Ranking',$aaa);
}*/

}
   