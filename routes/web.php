<?php

use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\PoliclinicController;
use App\Http\Controllers\AdminPanel\ImageController;
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
//1- Do something in the route
Route::get('/hello', function () {
    return 'Hello World';
});

//2- Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

//************************HOME PAGE ROUTES**********************
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/reference',[HomeController::class,'reference'])->name('reference');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');

//4- Route-> Controller->View
//Route::get('/test',[HomeController::class,'test'])->name('home');

//5- Route with parameters
//Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name('test');

//6- Route with post
//Route::post('/save', [HomeController::class,'save'])->name('save');

Route::get('/policlinic/{id}', [HomeController::class,'policlinic'])->name('policlinic');
Route::get('/categorypoliclinic/{id}/{slug}', [HomeController::class,'categorypoliclinic'])->name('categorypoliclinic');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
    //************************ADMIN PANEL ROUTES**********************

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/',[AdminHomeController::class,'index'])->name('index');

    //************************GENERAL ROUTES**********************

    Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
    Route::post('/setting',[AdminHomeController::class,'settingupdate'])->name('setting.update');


    //************************ADMIN CATEGORY ROUTES**********************
     Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function (){

         Route::get('/','index')->name('index');
         Route::get('/create','create')->name('create');
         Route::post('/store','store')->name('store');
         Route::get('/edit/{id}','edit')->name('edit');
         Route::post('/update/{id}','update')->name('update');
         Route::get('/delete/{id}','destroy')->name('delete');
         Route::get('/show/{id}','show')->name('show');

     });

    //************************ADMIN POLICLINIC ROUTES**********************
    Route::prefix('/policlinic')->name('policlinic.')->controller(PoliclinicController::class)->group(function (){

        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('delete');
        Route::get('/show/{id}','show')->name('show');

    });

    //************************ADMIN PRODUCT IMAGE GALLERY ROUTES**********************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function (){

        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/delete/{pid}/{id}','destroy')->name('delete');
    });
    //************************ADMIN MESSAGE ROUTES**********************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function (){

        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('delete');
    });
    //************************ADMIN FAQ ROUTES**********************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function (){

        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('delete');
        Route::get('/show/{id}','show')->name('show');

    });
});
