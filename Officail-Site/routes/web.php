<?php
use App\Http\Controllers\hackathonController;
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

Route::get('/',[hackathonController::class,'index'])->name('index');
Route::get('/contactUs',[hackathonController::class,'contactUs'])->name('contactUs');
Route::get('/updates',[hackathonController::class,'updates'])->name('updates');
Route::get('/register',[hackathonController::class,'register'])->name('register');