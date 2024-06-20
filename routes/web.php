<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Livewire\Files;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::get('/', function () {
    return view('frontend.donasi.donasi');
});

Route::get('/donasi', function(){
    // return view('frontend.donasi.example');
    return view('frontend.donasi.donasi');
});
Route::post('donation/pay', [App\Http\Controllers\DonationController::class, 'pay'])->name('donation.pay');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('/backend/dashboard');
    })->name('dashboard');

    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);

    Route::get('files', [FileController::class, 'index'])->name('files');

    Route::resource('users', UserController::class);
    Route::resource('settings', SettingController::class);
});
