<?php
////
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
//
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function() {
   return view('about');
})->name('about');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/users/{id}', function($id) {
    $name = "ITlive";
    return view('users',compact('id','name'));
})->name('users');


//use Illuminate\Support\Facades\Route;

Route::get('/product', function () {
    return view('product');
})->name('productName');


Route::prefix('admin')->group(function () {
    Route::get('category', function() {
        return "category";
    })-> name("AdminCategory");
    Route::get('tags', function() {
        return "tags";
    })->name("AdminTags");
});

Route::prefix('site')->name('site')->group(function () {
    Route::get('site', function () {
        return "students";
    });
    Route::get('site', function () {
        return " ";
    });
});



Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('/about',[SiteController::class,'About'])->name('About-users');
Route::get('/contact',[SiteController::class,'Contact'])->name('Contact-users');
Route::get('Admin/dashboard',[AdminController::class,"dashboard"])->name('Admin.dashboard');
Route::get('/message/create',[SiteController::class,'create'])->name('message.create');
route::get('message.store',[SiteController::class,'store'])->name('message.store');
// routes/web.php


// GET va POST metodlarini qo‘llab-quvvatlash
Route::get( '/register', [AuthController::class, 'register'])->name('register');