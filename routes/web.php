<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


//  '/' for home page
Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/create', [PostController::class, 'create']);

Route::post('/store', [PostController::class, 'ourFileStore'])->name('store');


// Route::get('/rakib', function () {
    
//     return "helow= '1,2,3, ......'";
// });