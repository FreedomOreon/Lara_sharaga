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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/register', function () {
//     return view('public');
// });


Route::get('/care', function () {
    return view('care');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/tovar', function () {
    return view('tovar');
});
Route::get('/gde nas naiti', function () {
    return view('gde nas naiti');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
