<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/videopage', [FrontController::class, 'videopage'])->name('videopage');
Route::get('/videodetails', [FrontController::class, 'videodetails'])->name('videodetails');
Route::get('/photodetails', [FrontController::class, 'photodetails'])->name('photodetails');
