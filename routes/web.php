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


//Route::get('/test', function () {
//    return view(('admin.tourGuides-detail'));
//});


// admin route use admin.middleware

Route::middleware(['admin.middleware'])->group(function () {


});

//todo: put admins routes here when seed some valid admin account
Route::get('/admin', 'ControllerByAdmin@adminHome');
Route::get('/admin/customers', 'ControllerByAdmin@listCustomers');

Route::get('/admin/tourGuides', 'ControllerByAdmin@listTourGuides');
Route::post("/admin/tourGuides/{id}", "ControllerByAdmin@showTourGuideDetail");




Route::post("/admin/deActive-tourGuides/{id}", "ControllerByAdmin@deActiveTourGuide");

Route::get('/admin/new-tourGuide', 'ControllerByAdmin@newTourGuides');
Route::post("/admin/new-tourGuide/{id}", "ControllerByAdmin@showNewTourGuideDetail");
Route::post("/admin/new-tourGuide-contact/{id}", "ControllerByAdmin@sendMailToNewTourGuide");

Route::get('/admin/transactions', 'ControllerByAdmin@listTransactions');
Route::post("/admin/transactions/{id}", "ControllerByAdmin@showTransactionDetail");


Route::get('/admin/new-tourGuide', 'ControllerByAdmin@newTourGuides');
Route::get('/admin/transactions', 'ControllerByAdmin@listTransactions');

Route::post("/admin/accept/{id}", "ControllerByAdmin@acceptNewTourGuide");
Route::get('/admin/areas', 'ControllerByAdmin@listAreas');

//Route::get("/admin/tourGuides/{id}", ["as" => "tourGuides.show", "uses" => "ControllerByAdmin@tourGuidesDetail"]);


//route to navigate the web site
Route::get("/", "CustomerPageController@index");
Route::get("/about", "CustomerPageController@about");
Route::get("/login", "CustomerPageController@login");
Route::get("/register", "CustomerPageController@register");
Route::get("/contact", "CustomerPageController@contact");
Route::get("/find", "TourGuideController@filter");


//Login & register logout for user
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@processLogin');
Route::get('/register', 'RegisterController@register');
Route::post('/register', 'RegisterController@processRegister');
Route::post("/logout", "LoginController@logoutCustomer");
//register for new tour guide
Route::get("/register/tourGuide", "PendingTourGuideController@create");
Route::post("/register/tourGuide", "PendingTourGuideController@store");

//tour guide route use tourGuide.middleware
Route::middleware(["tourGuide.middleware"])->group(function () {
    Route::get('/tourGuide', "TourGuideController@getTourGuideLayout");

    Route::get('/tourGuide/edit/{id}', "TourGuideController@edit");
    Route::post('/tourGuide/update/{id}', "TourGuideController@update");
});

Route::get('/tourGuide/edit-info', "TourGuideController@info");
Route::get('/tourGuide', "TourGuideController@calender");
Route::post('/tourGuide/edit-info', "TourGuideController@editInfo");
Route::get('/tourGuide/new-orders', "TourGuideController@showNewOrders");


Route::get("/list", "TourGuideController@index");

Route::get("/show/tourGuide/{id}", "TourGuideController@show");

Route::get("/order", "OrderController@orderStatus");

Route::get("/user/edit/{id}", "CustomerController@edit");
Route::post("/user/update/{id}", "CustomerController@update");

//Route::get("/test", function () {
////    $areas = \App\TourGuideArea::query();
////    $firstAreas = $areas->where("area_id", "=", "1")->get();
////    $listTourGuide = array();
////
////    foreach ($firstAreas as $area) {
////        $tourGuides = $area->tourGuides;
////        array_push($listTourGuide,$tourGuides);
////    }
////    dd($listTourGuide);
////   $tourGuide74 = \App\TourGuide::find(74);
////   $listTransactionDetails = $tourGuide74->transactionDetails;
////   dd($listTransactionDetails);
//
////    $transactionDetail6 = \App\TransactionDetail::find(6);
////    $transaction = $transactionDetail6->transaction;
////    dd($transaction);
//
//});

Route::post("/book/{id}", "OrderController@book");

Route::post("/tourGuide/new-orders/accept/{id}", "TourGuideController@acceptOrder");



