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
	$students=DB::table('student')->get();
	$data['studentvalue']=$students;
	return view('List',$data);
}



}
   