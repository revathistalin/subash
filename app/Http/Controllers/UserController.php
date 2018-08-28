<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function home()
    {
        return view('News/HomeNews');

  
    }
    public function dashboard()
    {
    	return view('News/Admin');
    }
}
