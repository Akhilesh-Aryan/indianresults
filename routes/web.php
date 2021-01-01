<?php

use App\Http\Controllers\Home;
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
Route::get('/',[Home::class,"homepage"]);
Route::get('/insert', function (){
    return view('insert');
})->name('insertresults');
Route::post('/insert',[Home::class,"insertResult"])->name('insertresults');
Route::get('/result/{id}',[Home::class,"result"])->name('getResult');
Route::get('delete/{id}',[Home::class,"delete"])->name('delete');
Route::get('edit/{id}',[Home::class,"update"])->name('edit');
Route::post('/update/{id}',[Home::class,"updateResult"])->name('updateResult');
// Route::get('search/{id}',[Home::class,"search"])->name('search');
