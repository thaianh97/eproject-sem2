<?php

use Illuminate\Support\Facades\Route;

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


//Route::get('/', function () {
//    return view('welcome');
//});




Route::get('/test', function (){
   return view(('layout.admin-layout'));
});

// admin route
Route::get('/admin','ControllerByAdmin@adminHome');
Route::get('/admin/customers','ControllerByAdmin@listCustomers');


Route::get('/admin/tourGuides','ControllerByAdmin@listTourGuides');



//route to navigate the web site
Route::get("/", "CustomerPageController@index");
Route::get("/about", "CustomerPageController@about");


//tset mail
Route::get('/test','ControllerByAdmin@sendMail');


