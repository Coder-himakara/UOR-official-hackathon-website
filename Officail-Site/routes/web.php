<?php
use App\Http\Controllers\hackathonController;
use App\Http\Controllers\PdfController;//To generate a pdf using data
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

//==To store form data in the database==
Route::post('/store',[hackathonController::class,'store'])->name('store');
//==View after submitting the data==
Route::get('/afterSubmit',[hackathonController::class,'afterSubmit'])->name('afterSubmit');
//For generating a pdf from form data
Route::get('/generate-pdf/{id}', [PdfController::class, 'generatePdf'])->name('generate-pdf');