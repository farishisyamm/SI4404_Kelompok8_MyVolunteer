<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
Route::get('/', function () {
    return view('index', ['position' => 'home']);
});

Route::get('/cause', function () {
    return view('pages.cause', ['position' => 'cause']);
});

Route::get('/about', function () {
    return view('pages.about', ['position' => 'about']);
});

Route::get('/news', function () {
    return view('pages.news', ['position' => 'news']);
});

Route::get('/contact', function () {
    return view('pages.contact', ['position' => 'contact']);
});

Route::get('/home', function () {
    return view('pages.home', ['position' => 'home']);
});

Route::get('/login', function () {
    return view('pages.authentication.login');
});

Route::get('/register', function () {
    return view('pages.authentication.register');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.dashboard', ['position' => 'dashboard']);
});

Route::get('/event', function () {
    return view('pages.dashboard.event', ['position' => 'event']);
});

Route::get('/profile', function () {
    return view('pages.dashboard.profile', ['position' => 'profile']);
});

Route::get('/edit', function () {
    return view('pages.dashboard.edit', ['position' => 'event']);
});

Route::get('/addevent', function () {
    return view('pages.dashboard.add', ['position' => 'event']);
});
//Route::get('/organization/addEvent', [Controller::class, 'addEvent']);