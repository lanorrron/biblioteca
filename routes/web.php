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

Route::get('categories/',[\App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
Route::get('categories/create',[\App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::get('categories/edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('category.edit');
Route::put('categories/update/{id}',[\App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
Route::get('categories/show/{id}',[\App\Http\Controllers\CategoryController::class,'show'])->name('category.show');
Route::delete('categories/destroy/{id}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('category.destroy');
Route::post('categories/store',[\App\Http\Controllers\CategoryController::class,'store'])->name('category.store');

Route::get('/mundo_libro',[\App\Http\Controllers\BookController::class,'index'])->name('book.index');

