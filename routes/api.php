<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryapiController;
use App\Http\Controllers\Api\ArticleapiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('categories',CategoryapiController::class);
Route::apiResource('articles',ArticleapiController::class);