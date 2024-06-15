<?php

use App\Http\Controllers\DefaultController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('api/class', [DefaultController::class, 'index']);

// Route::resource('articles', ArticleController::class)->withTrashed();
// Route::post('/article/store', [CommentController::class, 'store']);