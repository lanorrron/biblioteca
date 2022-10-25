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

Route::get('author/',[\App\Http\Controllers\AuthorController::class,'index'])->name('author.index');
Route::get('author/create',[\App\Http\Controllers\AuthorController::class,'create'])->name('author.create');
Route::get('author/edit/{id}',[\App\Http\Controllers\AuthorController::class,'edit'])->name('author.edit');
Route::put('author/update/{id}',[\App\Http\Controllers\AuthorController::class,'update'])->name('author.update');
Route::get('author/show/{id}',[\App\Http\Controllers\AuthorController::class,'show'])->name('author.show');
Route::delete('author/destroy/{id}',[\App\Http\Controllers\AuthorController::class,'destroy'])->name('author.destroy');
Route::post('author/store',[\App\Http\Controllers\AuthorController::class,'store'])->name('author.store');
