<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;


//  '/' for home page
Route::get('/', function () {
    return view('welcome', ['posts' => Post::all()] );
})->name('home');



Route::get('/create', [PostController::class, 'create']);

Route::post('/store', [PostController::class, 'ourFileStore'])->name('store');

Route::get('/edit/{id}', [PostController::class, 'editData'])->name('edit');


// Route::get('/rakib', function () {
    
//     return "helow= '1,2,3, ......'";
// });