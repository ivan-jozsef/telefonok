<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
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

Route::get("/", [PhoneController::class, "index"])->name("home");
Route::get('/phones/{id}', [PhoneController::class, "show"])->name("phone.show");
