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
    ->name('posts.show')
    ->where('post', '[0-9]+');

Route::get('/posts/create', [StudyPostController::class, 'studyCreate'])
    ->name('posts.create');

Route::post('/posts/store', [StudyPostController::class, 'studyStore'])
    ->name('posts.store');

Route::get('/posts/{post}/edit', [StudyPostController::class, 'studyEdit'])
    ->name('posts.edit')
    ->where('post', '[0-9]+');

Route::patch('/posts/{post}/update', [StudyPostController::class, 'studyUpdeta'])
    ->name('posts.update')
    ->where('post', '[0-9]+');

Route::delete('/posts/{post}/destroy', [StudyPostController::class, 'studyDestroy'])
    ->name('posts.destroy')
    ->where('post', '[0-9]+');