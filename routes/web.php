<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BadwordController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', [PostController::class, 'index'])->name('home');
    Route::get('/create/page',[PostController::class,'create'])->name('create.page')->middleware('blocked');
    Route::post('/create/post',[PostController::class,'store'])->name('create.post')->middleware('blocked');

    Route::get('/add/word',[BadwordController::class,'create'])->name('add.word')->middleware('isAdmin');
    Route::post('/create/word',[BadwordController::class,'store'])->name('create.word')->middleware('isAdmin');
});

