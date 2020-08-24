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

<<<<<<< HEAD

Route::get('/admin/tourGuides','ControllerByAdmin@listTourGuides');

=======
Route::get('/admin/tourGuides','ControllerByAdmin@listTourGuides');

Route::get('/admin/areas','ControllerByAdmin@listAreas');

>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f


//route to navigate the web site
Route::get("/", "CustomerPageController@index");
Route::get("/about", "CustomerPageController@about");
Route::get("/login", "CustomerPageController@login");

//tset mail
Route::get('/test','ControllerByAdmin@sendMail');

<<<<<<< HEAD

=======
// Login & register
Route::get('/login', 'AccountController@login');
Route::post('/login', 'AccountController@processLogin');
Route::get('/register', 'AccountController@register');
Route::post('/register', 'AccountController@processRegister');
>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f
