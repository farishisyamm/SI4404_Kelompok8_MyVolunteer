<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', function () {return view('index', ['position' => 'home']);});
Route::get('/cause', function () {return view('pages.cause', ['position' => 'cause']);});
Route::get('/about', function () {return view('pages.about', ['position' => 'about']);});
Route::get('/news', function () {return view('pages.news', ['position' => 'news']);});
Route::get('/contact', function () {return view('pages.contact', ['position' => 'contact']);});
Route::get('/home', function () {return view('pages.home', ['position' => 'home']);});

Route::controller(DashboardController::class)->group(function () {    
    Route::get('/dashboard', 'index');
    Route::post('/applyevent/{id}', 'store');
});

Route::controller(UserController::class)->group(function () {    
    Route::get('/login', 'index');
    Route::get('/register', 'create');
    Route::get('/profile', 'show');
    Route::get('/logout', 'logout');
    Route::post('/login', 'login');
    Route::post('/register', 'store');
    Route::post('/editprofile', 'update');
});

Route::controller(EventController::class)->group(function () {    
    Route::get('/event', 'index');
    Route::get('/addevent', 'create');
    Route::get('/addeventdetail/{id}', 'add_detail');
    Route::get('/editevent/{id}', 'show');
    Route::get('/editeventdetail/{idevent}/{id}', 'show_detail_event');
    Route::get('/accept/{id}', 'accept_event_resource');
    Route::get('/reject/{id}', 'reject_event_resource');
    Route::get('/deleteeventcategory/{idevent}/{id}', 'destroy_resource_detail');
    Route::get('/deleteeventdetail/{idevent}/{id}', 'destroy_event_detail');
    Route::post('/addevent', 'store');
    Route::post('/addeventdetail/{id}', 'store_event_detail');
    Route::post('/editevent/{id}', 'update');
    Route::post('/editeventdetail/{idevent}/{id}', 'update_detail_event');
});