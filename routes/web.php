<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/////////////////front routes

Route::get('/form/{formtoken}', [FrontController::class, 'form'])->name('form');

Route::post('/message',[FrontController::class, 'message'])->name('message');

Route::get('/result/{token}', [FrontController::class, 'result'])->name('result');


Auth::routes();

/////////////////////admin
Route::prefix('admin')->group(function(){

    Route::get('/logged', [AdminController::class, 'logged'])->name('admin');
    
    Route::get('/home', [AdminController::class, 'graphdata'])->name('stats');
    
    Route::get('/quiz', [AdminController::class, 'form'])->name('forms');
    
    Route::get('/questions', [AdminController::class, 'questions'])->name('form');

    Route::get('/answer_user', [AdminController::class, 'answersUsers'])->name('answer');

});
