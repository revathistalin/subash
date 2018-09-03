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
Route::get('admin','AdminController@Admin');

Route::get('register','UserController@Register');
Route::get('login','UserController@Login');
Route::post('insert','UserController@Insert');
Route::get('forget','UserController@Forget');
Route::post('page','UserController@page');
Route::post('send', 'UserController@send');
Route::get('password/{rpToken}','UserController@Password');
Route::post('newpassword','UserController@Newpassword');
Route::get('Map','AdminController@Map');
Route::get('updateprofile','AdminController@Updateprofile');
Route::post('Updatevalue','AdminController@Updatevalue');
Route::get('chart','AdminController@Chart');
Route::get('resetpassword','AdminController@Resetpassword');
Route::post('resetvalue','AdminController@Resetvalue');
Route::get('prodect','AdminController@Product');

Route::get('relation','AdminController@Relation');
Route::post('data','AdminController@Data');


Route::get('user','AdminController@User');
Route::get('new/{id}','AdminController@New');


Route::get('categorylist','AdminController@Categorylist');
Route::post('categoryinsert','AdminController@Categoryinsert');
Route::get('categoryview','AdminController@Categoryview');
Route::get('link/{id}','AdminController@Link');
Route::post('updatelist','AdminController@Updatelist');
Route::get('deletelist/{id}','AdminController@Deletelist');
Route::get('insert','AdminController@Insert');
Route::post('insertlist','AdminController@Insertlist');
Route::get('post','AdminController@Post');
Route::get('postinsert/{id}','AdminController@Postinsert');




