<?php
use Illuminate\Support\Facades\Route;
use App\Http\BookControllers;
use App\Http\CatergoryControllers;
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
    return view('inicio');
});
Route::get('/index',[\App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
Route::get('/create',[\App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::get('/edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('category.edit');
Route::put('/update/{id}',[\App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
Route::get('/show/{id}',[\App\Http\Controllers\CategoryController::class,'show'])->name('category.show');
Route::delete('/destroy/{id}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('category.destroy');


Route::get('/mundo_libro',[\App\Http\Controllers\BookController::class,'index'])->name('book.index');

