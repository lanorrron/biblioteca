<?php
use Illuminate\Support\Facades\Route;
use App\Http\BookControllers;
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


Route::get('/',function () {
    return view('layout');
});
Route::get('/mundo_libro',[\App\Http\Controllers\BookController::class,'index'])->name('book.index');

