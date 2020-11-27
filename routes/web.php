<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tweets', [TweetController::class, 'index']);
Route::get('/tweets/create', [TweetController::class, 'create']);
Route::post('/tweets', [TweetController::class, 'store']);
Route::get('/tweets/{id}/edit', [TweetController::class, 'edit']);
Route::post('/tweets/{id}/update', [TweetController::class, 'update']);
Route::get('/tweets/{id}/delete', [TweetController::class, 'destroy']);
