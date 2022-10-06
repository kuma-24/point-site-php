<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyPostController;

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

Route::get('/studys', [StudyPostController::class, 'studyIndex'])
    ->name('posts.index');

Route::get('/posts/{post}', [StudyPostController::class, 'studyShow'])
    ->name('posts.show');