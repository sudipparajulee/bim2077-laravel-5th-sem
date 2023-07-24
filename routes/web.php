<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',[PagesController::class,'index'])->name('index');

Route::get('/about',[PagesController::class,'about'])->name('about');

Route::get('/contact',[PagesController::class,'contact'])->name('contact');





Route::middleware('auth')->group(function(){

//Dahsboard Route
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

//Category Routes
Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/{id}/update',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/{id}/delete',[CategoryController::class,'delete'])->name('category.delete');

//Notice Routes
Route::get('/notice',[NoticeController::class, 'index'])->name('notice.index');
Route::get('/notice/create',[NoticeController::class, 'create'])->name('notice.create');
Route::post('/notice/store',[NoticeController::class, 'store'])->name('notice.store');
Route::get('/notice/{id}/edit',[NoticeController::class, 'edit'])->name('notice.edit');
Route::post('/notice/{id}/update',[NoticeController::class, 'update'])->name('notice.update');
Route::get('/notice/{id}/delete',[NoticeController::class, 'delete'])->name('notice.delete');


//Gallery Routes
Route::get('/gallery',[GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/create',[GalleryController::class, 'create'])->name('gallery.create');
Route::post('/gallery/store',[GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery/{id}/edit',[GalleryController::class, 'edit'])->name('gallery.edit');
Route::post('/gallery/{id}/update',[GalleryController::class, 'update'])->name('gallery.update');
Route::get('/gallery/{id}/delete',[GalleryController::class, 'delete'])->name('gallery.delete');


//News Routes
Route::get('/news',[NewsController::class, 'index'])->name('news.index');
Route::get('/news/create',[NewsController::class, 'create'])->name('news.create');
Route::post('/news/store',[NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}/edit',[NewsController::class, 'edit'])->name('news.edit');
Route::post('/news/{id}/update',[NewsController::class, 'update'])->name('news.update');
Route::get('/news/{id}/delete',[NewsController::class, 'delete'])->name('news.delete');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
