<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('validation.login');
})->name('login');

Route::post('/login', [UserController::class, "login"]);
Route::get('/register', [UserController::class, "create"]);
Route::post('/register', [UserController::class, "store"]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/Account', [UserController::class, "index"]);

    Route::get('/ListBooks', [BookController::class, "index"]);
    Route::get('/getBooks/{id}', [BookController::class, "getBooks"]);
    Route::get('/getBooksAll', [BookController::class, "getBooksAll"]);


    Route::get('/addReserve/{id}', [ReserveController::class, "create"]);
    Route::post('/Reserve/{id}', [ReserveController::class, "store"]);
    Route::post('/deleteReserve/{id}', [ReserveController::class, "destroy"]);
});
