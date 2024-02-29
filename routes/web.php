<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\salesController;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodbeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyhealth']);
    Route::get('/home-care', [ProductController::class, 'homecare']);
    Route::get('/baby-kid', [ProductController::class, 'babykid']);
    });
    
    Route::get('/home-page', [HomeController::class, 'index']);{
    Route::get('/user/{id}/name/{name}' , [userController::class, 'index']); {
    Route::get('/sales-page' , [salesController::class, 'index']); {
            
        }        
    }
}
        
    