<?php

use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\HeroSectionController;
use App\Http\Controllers\Backend\ImageController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UpdatePassword;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\VideoController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('admin/profile/view', [UpdatePassword::class, 'index'])->name('admin.profile.view');
    Route::post('admin/profile/update', [UpdatePassword::class, 'updateProfile'])->name('admin.profile.update');
    Route::post('admin/profile/password/update', [UpdatePassword::class, 'updatePassword'])->name('admin.profile.password.update');

    // Video Route
    Route::get('/video/index', [VideoController::class, 'index'])->name('video.index');
    Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
    Route::post('/video/store', [VideoController::class, 'store'])->name('video.store');
    Route::delete('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy');
    Route::get('/video/edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
    Route::post('/video/update/{id}', [VideoController::class, 'update'])->name('video.update');

    // Article Route
    Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::delete('/article/destroy/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
    Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::post('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');

    // Images Route
    Route::get('/image/index', [ImageController::class, 'index'])->name('image.index');
    Route::get('/image/create', [ImageController::class, 'create'])->name('image.create');
    Route::post('/image/store', [ImageController::class, 'store'])->name('image.store');
    Route::delete('/image/destroy/{id}', [ImageController::class, 'destroy'])->name('image.destroy');

    // Profile Route
    Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Hero Section Route
    Route::get('/hero/index', [HeroSectionController::class, 'index'])->name('hero.index');
    Route::put('/hero/update', [HeroSectionController::class, 'update'])->name('hero.update');
});

// Home Page Routes

Route::get('/', [HomeController::class, 'homePage'])->name('home.page.view');
Route::get('/videos', [HomeController::class, 'videoPage'])->name('videos.view');
Route::get('/blog', [HomeController::class, 'blogPage'])->name('blog.view');
Route::get('/all/article/{id}', [HomeController::class, 'allArticle'])->name('article.all');
Route::get('/articles', [HomeController::class, 'articlePage'])->name('article.view');
