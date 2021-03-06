<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::get('/', [HomeController:: class, 'index']);

Route::get('/ficha', [HomeController:: class, 'ficha']);
Route::get('/post/create', [HomeController::class, 'create']);
Route::post('/post', [HomeController::class, 'store']);
Route::get('/ficha', 'HomeController@ficha')->name('ficha');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
