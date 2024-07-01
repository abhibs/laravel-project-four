<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});
Route::get('migrate', function () {
    Artisan::call('migrate');
    return "Migrate Completed!";
});
Route::get('optimize', function () {
    Artisan::call('optimize');
    return "optimized!";
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('user-index');
    Route::post('contact/post', 'contact')->name('contact-post');
    Route::get('/project/detail/{id}/{slug}', 'projectDetails')->name('project-detail');

});
