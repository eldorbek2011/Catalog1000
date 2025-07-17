<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TeacherController;


Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/videopage', [FrontController::class, 'videopage'])->name('videopage');
Route::get('/videodetails', [FrontController::class, 'videodetails'])->name('videodetails');
Route::get('/photodetails', [FrontController::class, 'photodetails'])->name('photodetails');


Route::get('/teachers', [TeacherController::class, 'create'])->name('teachers.create');

Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');

Route::get('/teachersIndex',[TeacherController::class, 'teachersIndex'])->name('teachersIndex');