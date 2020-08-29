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

//Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/test', function () {
    return view(('admin.tourGuides-detail'));
});


// admin route
Route::get('/admin', 'ControllerByAdmin@adminHome');
Route::get('/admin/customers', 'ControllerByAdmin@listCustomers');


Route::get('/admin/tourGuides', 'ControllerByAdmin@listTourGuides');
Route::get('/admin/new-tourGuide', 'ControllerByAdmin@newTourGuides');
Route::post('/admin/new-tourGuide', 'ControllerByAdmin@acceptNewTourGuides');

Route::get("/admin/tourGuides/{id}", ["as" => "tourGuides.show", "uses" => "ControllerByAdmin@tourGuidesDetail"]);



Route::get('/admin/areas', 'ControllerByAdmin@listAreas');


//route to navigate the web site
Route::get("/", "CustomerPageController@index");
Route::get("/about", "CustomerPageController@about");
Route::get("/login", "CustomerPageController@login");
Route::get("/register", "CustomerPageController@register");
Route::get("/contact", "CustomerPageController@contact");
Route::get("/find", "TourGuideController@filter");

//test mail
Route::get('/test', 'ControllerByAdmin@sendMail');


// Login & register
//Route::get('/login', 'AccountController@login');
//Route::post('/login', 'AccountController@processLogin');
//Route::get('/register', 'AccountController@register');
//Route::post('/register', 'AccountController@processRegister');


//tourguide route
    Route::get('/tourGuide', function () {
    return view(('layout.tourGuide-layout'));
});
Route::get('/tourGuide/edit-info', function () {
    return view(('tourGuides.edit-info'));
});
Route::get('/tourGuide/edit-info', "TourGuideController@info");
Route::post('/tourGuide/edit-info', "TourGuideController@editInfo");

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

