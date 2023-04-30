<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\EnrollController;
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

Route::get('/', function () {
    return view('home');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});


Route::get('/enroll', [EnrollController::class, 'index'])->name('enroll.index');
Route::post('/enroll', [EnrollController::class, 'store'])->name('enroll.store');


Route::prefix('/admin')-> namespace('App\Http\Controllers\Admin')-> group(function(){
    Route:: get('panel','AdminController@panel');
});


Route::controller(ReviewController::class)->group(function() {
   Route::get('/', [ReviewController::class, 'index'])->name('home');
   Route::post('/reviews', 'store')->name('reviews.store');
});

