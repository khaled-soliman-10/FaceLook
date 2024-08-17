<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImgController;

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

Route::middleware('auth')->group(function () {

    Route::get('/',[mainController::class,'index'])->name('main.index');
    Route::get('/search/user',[SearchController::class,'index'])->name('search.index');
    Route::get('/show/search/user/profile/{id}',[UserController::class,'show'])->name('userProfile');
//    post routes start
    Route::get('/post/create',[PostController::class,'create'])->name('addPost.create');
    Route::get('/trashed/posts',[PostController::class,'index'])->name('addPost.index');
    Route::delete('/post/delete/{id}',[PostController::class,'destroy'])->name('addPost.delete');
    Route::delete('/post/force/delete/{id}',[PostController::class,'forceDelete'])->name('addPost.forceDelete');
    Route::post('/post/restore/{id}',[PostController::class,'restore'])->name('addPost.restore');
    Route::post('/post',[PostController::class,'store'])->name('addPost.store');
//    post routes end
    Route::get('/my/profile',[App\Http\Controllers\MyProfileController::class,'index'])->name('MyProfile.index');
    Route::get('/my/info/{id}/edit',[App\Http\Controllers\InfoController::class,'edit'])->name('Info.index');
    Route::put('/my/info/update/{id}',[App\Http\Controllers\InfoController::class,'update'])->name('Info.update');
    Route::get('/my/profile/img/{id}/edit',[App\Http\Controllers\ImgController::class,'edit'])->name('Img.index');
    Route::put('/my/profile/img/update/{id}',[App\Http\Controllers\ImgController::class,'update'])->name('Img.update');

});


Auth::routes();

//Route::get('/', [mainController::class, 'index'])->name('mainController');

//Route::get('/mainController', [App\Http\Controllers\HomeController::class, 'index'])->name('mainController');
