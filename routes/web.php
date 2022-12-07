<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BasicfromController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserBookingController;
use App\Http\Controllers\PackagedetailsController;
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

Route::prefix('admin')->group(function(){
    // Route::get('/welcome',[DashboardController::class,'welcome'])->name('/welcome');
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    //package details
    Route::get('/package',[PackageController::class,'list'])->name('package.list');
    Route::get('/packagedetails',[PackagedetailsController::class,'details'])->name('package.details');
    Route::get('/packagedetails/add',[PackagedetailsController::class,'packagedetailsfrom'])->name('packagedetails.store');
    Route::post('/packagedetails/store',[PackagedetailsController::class,'store'])->name('packagedetails.store');
    
    //all
    Route::get('/all',[PackageController::class,'all'])->name('package.all');
    Route::get('/alllist',[PackageController::class,'alllist'])->name('package.alllist');
    Route::get('/all/store',[PackageController::class,'packagefrom'])->name('all.store');
    Route::post('/all/store',[PackageController::class,'store'])->name('all.store');
    Route::get('/all/edit/{typeid}',[PackageController::class,'edit'])->name('all.edit');
    Route::put('/all/update/{typeid}',[PackageController::class,'update'])->name('all.update');
    Route::get('/all/delete/{typeid}',[PackageController::class,'delete'])->name('all.delete');
    //long
    Route::get('/long',[PackageController::class,'long'])->name('package.long');
    Route::get('/longlist',[PackageController::class,'longlist'])->name('package.longlist');
    Route::get('/long/store',[PackageController::class,'longpackagefrom'])->name('long.store');
    Route::post('/long/store',[PackageController::class,'longstore'])->name('long.store');
    //short
    Route::get('/short',[PackageController::class,'short'])->name('package.short');
    Route::get('/shortlist',[PackageController::class,'shortlist'])->name('package.shortlist');
    Route::get('/short/store',[PackageController::class,'shortpackagefrom'])->name('short.store');
    Route::post('/short/store',[PackageController::class,'shortstore'])->name('short.store');




    Route::get('/booking',[BookingController::class,'booking'])->name('booking.list');
    Route::get('/basicfrom',[BasicfromController::class,'from'])->name('basic.from');
    Route::post('/basicfrom/store',[BasicfromController::class,'store'])->name('basic.store');
    Route::get('/typelist',[BasicfromController::class,'typelist'])->name('type.list');
});

Route::prefix('user')->group(function(){
    Route::get('/user',[UserController::class,'user'])->name('user');
    // Route::get('/userbooking',[UserBookingController::class,'userbooking'])->name('user.booking');

});

Route::get('coxbazar', function () {
    return view('user.pages.package.coxbazar');

})->name('coxbazar');

Route::get('sundarban', function () {
    return view('user.pages.package.sundarban');

})->name('sundarban');


Route::get('sajekvalley', function () {
    return view('user.pages.package.sajekvalley');

})->name('sajekvalley');

Route::get('mainamati', function () {
    return view('user.pages.package.mainamati');

})->name('mainamati');

Route::get('mahasthangar', function () {
    return view('user.pages.package.mahasthangarh');

})->name('mahasthangar');

Route::get('sonargaon', function () {
    return view('user.pages.package.sonargaon');

})->name('sonargaon');


    Route::get('/', function () {
        // return view('backend.pages.dashboard.admin');

        return view('user.pages.booking');
    
    })->name('user.booking');
    
    // Route::get('/about', function () {
    //     return view('about');
    
    // })->name('about');
    
    // Route::get('/booking', function () {
    //     return view('backend.pages.dashboard.booking');
    
    // })->name('booking.list');
    
    // Route::get('/from', function () {
    //     return view('backend.pages.dashboard.basic from');
    
    // })->name('basic.from');
    
    // Route::get('/packages', function () {
    //     return view('backend.pages.dashboard.packages');
    
    // })->name('package');
    
    // Route::get('/all', function () {
    //     return view('backend.pages.dashboard.all');
    
    // })->name('all.tour');
    
    // Route::get('/long', function () {
    //     return view('backend.pages.dashboard.long');
    
    // })->name('long.tour');
    
    // Route::get('/short', function () {
    //     return view('backend.pages.dashboard.short');
    
    // })->name('short.tour');
    

    // user
   
    // Route::get('/user', function () {
    //     return view('user.user');
    
    // })->name('user');
    

    Route::get('from', function () {
        return view('user.pages.from');
    
    })->name('from');

    Route::get('frompackage', function () {
        return view('backend.pages.package_details.package_store_page');
    
    })->name('frompackage');


    // Route::get('details', function () {
    //     return view('backend.pages.package details.package list');
    
    // })->name('details');
    