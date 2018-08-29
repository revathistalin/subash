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
Route::get('value/{id}','StudentController@Value');
Route::post('update','StudentController@Studentupdate');
Route::get('Studentdelete/{id}','StudentController@Studentdelete');
Route::get('Studentmark/{id}','StudentController@Studentmark');
Route::post('marklist','StudentController@Marklist');
Route::get('rank','StudentController@Rank');
Route::get('view/{id}','StudentController@View');
Route::post('updatemark','StudentController@Updatemark');

Route::get('validation','PostController@validation');
Route::post('validationlist','PostController@validationlist');
Route::get('session','UserController@session');



Route::get('home','UserController@home');
Route::get('admin','UserController@Admin');

Route::get('register','UserController@Register');
Route::get('login','UserController@Login');
Route::post('insert','UserController@Insert');
Route::get('reset','UserController@Reset');
Route::post('page','UserController@page');
Route::post('send', 'EmailController@send');










