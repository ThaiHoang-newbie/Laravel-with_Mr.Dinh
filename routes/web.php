<?php

use App\Http\Controllers\innertext;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home page
Route::get('/', function () {
    require('../app/Http/Controllers/Products.php');
    return view("welcome");
});

Route::get('/hello', [innertext::class, 'hello']);



Route::get('/goodnight', [innertext::class, 'goodnight']);
Route::get('/Calculate', [innertext::class, 'Calculate']);

