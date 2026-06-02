<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FallbackController;

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
    return view('auth.login');
});

// Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/showform', [PagesController::class, 'showform_page'])->name('showform');
    Route::get('/readform/{id}', [PagesController::class, 'readform_page'])->name('readform');
    Route::get('/updateform/{id}', [PagesController::class, 'updateform_page'])->name('updateform');
    Route::patch('/updateform/{id}', [PagesController::class, 'update'])->name('update');
    Route::delete('/showform/{id}', [PagesController::class, 'destroy'])->name('delete');
    Route::get('/AllAppointment/{userId}', [PagesController::class, 'AllAppointmentPage'])->name('AllAppointmentPage');
    Route::delete('/AllAppointment/{userId}', [PagesController::class, 'destroyAllAppointment'])->name('deleted');

    
});
Route::get('/make-appointment/{userId}', [PagesController::class, 'makeAppointmentPage'])->name('makeAppointmentPage');
Route::post('/submit-appointment/{userId}', [PagesController::class, 'submitAppointment'])->name('submitAppointment');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/form', [PagesController::class, 'form_page'])->name('form');
Route::get('/aboutme', [PagesController::class, 'aboutme_page'])->name('aboutme');

//Store action
Route::post('/form', [PagesController::class, 'store'])->name('store');

Route::fallback(FallbackController::class);