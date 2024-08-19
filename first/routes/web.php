<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\FirstController;



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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('contact','FrontEndController@myFunction');
Route::get('/', [FirstController::class, 'myfunction']);
Route::get('/third',[FirstController::class,'testt']);
Route::get('/contact_page',[FirstController::class,'for_contact_page']);
Route::get('/test_page',[FirstController::class,'for_test_page']);
Route::get('/about_page',[FirstController::class,'about_page']);

