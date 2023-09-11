<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

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
Route::get('/login', function () {
    return view('login');
});

Route::prefix('new')->group(function () {
    Route::get('/', function () {
        return view('new.step1');
    });
    
    Route::get('/register', function () {
        return view('new.step2');
    });
});

Route::prefix('existing')->group(function () {
    Route::get('/', function () {
        return view('existing.step1');
    });
    
    Route::get('/register', function () {
        return view('existing.step2');
    });
});


 
Route::get('store', [FirebaseController::class, 'store'])->name('firebase.store');
