<?php 

use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\FormController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::prefix("user")->group(function() {
Route::prefix("user")->middleware(["auth", "active"])->group(function() {
    Route::redirect('/', '/user/posts')->name('user');
    Route::get('posts', [PostController::class, 'index'])->name('user.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update');
    Route::get('posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete');

    Route::get('form/create', [FormController::class, 'create'])->name('user.form.create');
    Route::post('form', [FormController::class, 'store'])->name('user.form.store');
    Route::get('form/{form}/edit', [FormController::class, 'edit'])->name('user.form.edit');
    Route::put('form/{form}', [FormController::class, 'update'])->name('user.form.update');

    Route::get('profile/{user}/edit', [UserController::class, 'edit'])->name('user.profile.edit');
    Route::put('profile/{user}', [UserController::class, 'update'])->name('user.profile.update');
    Route::get('profile/{user}', [UserController::class, 'delete'])->name('user.profile.delete');
});

Route::post('/logout', [LoginController::class, 'destroy'])->middleware(["auth", "active"])->name('login.destroy');
Route::get('user/posts/{post}', [PostController::class, 'show'])->name('user.posts.show');
Route::get('user/form/{form}', [FormController::class, 'show'])->name('user.form.show');
Route::get('user/profile/{user}', [UserController::class, 'show'])->name('user.profile.show');