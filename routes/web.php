<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\StudentGroupController;

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

Route::resource('/', LoginController::class);
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('registers', RegisterController::class);
Route::resource('students', StudentController::class);
Route::resource('studentGroups', StudentGroupController::class);
Route::resource('rayons', RayonController::class);
Route::resource('publishers', PublisherController::class);
Route::resource('books', BookController::class);
Route::resource('borrowings', BorrowingController::class);