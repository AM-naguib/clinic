<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DatabaseController;

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



Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("booking",[BookingController::class,"index"])->name("booking");
Route::get("contact",[ContactController::class,"index"])->name("contact");
Route::get("doctors",[DoctorsController::class,"index"])->name("doctors");
Route::get("history",[HistoryController::class,"index"])->name("history");
Route::get("login",[LoginController::class,"index"])->name("login");
Route::get("majors",[MajorsController::class,"index"])->name("majors");
Route::get("register",[RegisterController::class,"index"])->name("register");


Route::get("test",[DatabaseController::class,"getAll"]);

