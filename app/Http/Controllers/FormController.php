<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FormController extends Controller
{

public function Form()
{
	return view('Name');
}
public function Formadd(Request $request){
$FirstName = $request->input('firstname');
echo "Firstname is :" .$FirstName."<br>";
$LastName = $request->input('lastname');
echo "Lastname is:" .$LastName."<br>";
$DateOfBirth = $request->input('dateofbirth');
echo "Dateofbirth is:" .$DateOfBirth."<br>";
$Email = $request->input('email');
echo "Email is:" .$Email. "<br>";
$Password = $request->input('password');
echo "Password is:" .$Password. "<br>";
$PhoneNo = $request->input('phoneno');
echo "Phoneno is:" .$PhoneNo. "<br>";
$Country = $request->input('country');
echo "Country is:" .$Country. "<br>";
$State = $request->input('state');
echo "State is:" .$State. "<br>";
$Gender = $request->input('gender');
echo "Gender is:" .$Gender. "<br>";
$City = $request->input('city');
echo "City is:" .$City. "<br>";
$Address = $request->input('address');
echo "Address is:" .$Address. "<br>";



return view('Student',['firstname'=>$FirstName,'lastname'=>$LastName,'dateofbirth'=>$DateOfBirth,'email'=>$Email,'password'=>$Password,'phoneno'=>$PhoneNo,'country'=>$Country,'state'=>$State,'gender'=>$Gender,'city'=>$City,'address'=>$Address]);
}
}

?>
