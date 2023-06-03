<?php

use App\Http\Controllers\innertext;
use App\Http\Controllers\PageController;
use App\Models\Slide;
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


Route::get('/Calculate', [innertext::class, 'Cal']);




Route::get('/covid/all', [innertext::class, 'Covid_all']);

Route::get('/covid/confirm', [innertext::class, 'Covid_arrange_confirm']);

Route::get('/covid/death', [innertext::class, 'Covid_arrange_death']);



Route::get('validate/display', [innertext::class, 'index']);
Route::post('validate/display', [innertext::class, 'displayInfor']);

Route::get('testblade', [innertext::class, 'testBlade']);

Route::get('cr', [innertext::class, 'Migration']);





Route::get('/page',[PageController::class, 'getIndex']);

Route::get('/detail/{id}',[PageController::class, 'getID']);

Route::get('/type/{id}',[PageController::class, 'getTypeProducts']);




Route::get('/admin', [PageController::class,'getIndexAdmin']);

Route::get('/admin-add-form',[PageController::class,'getAdminAdd'])->name('add-product');

Route::post('/admin-add-form',[PageController::class,'postAdminAdd']);

Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);

Route::post('/admin-edit',[PageController::class,'postAdminEdit']);

Route::post('/admin-delete/{id}',[PageController::class,'postAdminDelete']);

Route::get('admin-export',[PageController::class,'exportAdminProduct'])->name('export');



