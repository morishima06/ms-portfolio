<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


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

Route::get('/', [FrontController::class, 'index'])->name('index') ;
Route::get('/portfolio_dt', function(){
    return view('portfolio_dt');
})->name('portfolio_dt') ;
Route::get('/search_dt', function(){
    return view('search_dt');

})->name('search_dt') ;
Route::get('/location_dt', function(){
    return view('location_dt');
})->name('location_dt') ;



Route::post('/post_mail', [FrontController::class, 'post_mail'])->name('post_mail') ;

