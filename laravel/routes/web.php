<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudyPostController;
use App\Http\Controllers\StudyCommentController;

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
    return view('users/index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/users', [HomeController::class, 'index'])
        ->name('users.index');

    Route::get('/users/show', [HomeController::class, 'show'])
        ->name('users.show');
});

// ドットインストールの内容（別ファイルに切り替え予定）
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

Route::post('/posts/{post}/comments', [StudyCommentController::class, 'studyStore'])
    ->name('comments.store')
    ->where('post', '[0-9]+');

Route::delete('/comments/{comment}/destroy', [StudyCommentController::class, 'studyDestroy'])
    ->name('comments.destroy')
    ->where('comment', '[0-9]+');