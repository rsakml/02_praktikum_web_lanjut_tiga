<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ProductController;
use App\http\Controllers\ProgramController;
use App\http\Controllers\ContactController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//halaman home
Route::get('/', [HomeController::class, 'home']);

//Halaman Products --route prefix
Route::prefix('category')->group(function(){
    Route::get('/marbeledugames', [ProductController::class, 'marbeledugames']);
    Route::get('/marbelandfriendskidsgames', [ProductController::class, 'marbelandfriendskidsgames']);
    Route::get('/riristorybooks', [ProductController::class, 'riristorybooks']);
    Route::get('/kolakkidssongs', [ProductController::class, 'kolakkidssongs']);
});

//Halaman News --route param

Route::get('news', function(){
    return redirect('https://www.educastudio.com/news');
});

Route::get('/news/{title}', function($title){
    return redirect('https://www.educastudio.com/news/' .$title);
});



//Halaman Program --route prefix

Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjunganIndustri', [ProgramController::class, 'kunjunganIndustri']);
});

//Halaman About Us

Route::get('/about us', function(){
    echo '<a href="https://www.educastudio.com/about-us">Halaman About Us</a>';
});


//Halaman Contact Us
Route::resource('contactus', ContactController::class);