<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\AdminController;
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


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::get('/enrolls', [AdminController::class, 'enrolls'])->name('enrolls');
    Route::get('/enrolls/create', [AdminController::class, 'create'])->name('create');
    Route::post('/enrolls', [AdminController::class, 'store'])->name('store');
    Route::get('/enrolls/{id}/edit', [AdminController::class, 'edit'])->name('edit');
    Route::put('/enrolls/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/enrolls/{id}', [AdminController::class, 'destroy'])->name('destroy');
});

Route::get('/', [ReviewsController::class, 'index'])->name('home');
Route::post('/reviews', [ReviewsController::class, 'store'])->name('reviews.store');
