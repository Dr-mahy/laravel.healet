<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;

Route::get('test', function () {
    $title="test";
    return view('test',compact('title'));
});

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('about',[AboutController::class,'about'])->name('about');
Route::get('blog',[BlogController::class,'blog'])->name('blog');
Route::get('shop',[ShopController::class,'shop'])->name('shop');