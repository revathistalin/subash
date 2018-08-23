<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
 

Route::get('Test/{id}','TestController@TestTeam');

Route::get('Form','FormController@Form');
Route::post('addform','FormController@Formadd');

Route::get('bearinsert','BearController@bearinsert');

//Route::post('beardetails','BearController@Beardetails');

Route::get('fishdetails','FishController@Fishdetails');
Route::post('fishresult','FishController@Fishresult');

Route::get('treeinsert','TreeController@Treedetails');
Route::post('treeresult','TreeController@Treeresult');

Route::get('picnicinsert','PicnicContriller@Picnicdetails');
//Route::post('picnicresult','PicnicController@Picnicdetails');
Route::get('bearfish','BearController@bearFish');

Route::get('student','StudentController@Student');
Route::post('studentinsert','StudentController@Studentinsert');
Route::get('studentlist','StudentController@Studentlist');
