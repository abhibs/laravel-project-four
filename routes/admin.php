<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NameController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    echo "Abhiram";
});


Route::group(['prefix' => 'admin'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/login', 'login')->name('admin-login');
        Route::post('/login', 'loginPost')->name('admin-login-post');
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/dashboard', 'dashboard')->name('admin-dashboard');
            Route::get('/logout', 'adminLogout')->name('admin-logout');
            Route::get('/profile', 'adminProfile')->name('admin-profile');
            Route::post('/profile/update', 'adminProfileUpdate')->name('admin-profile-update');
            Route::get('/change/password', 'changePassword')->name('admin-change-password');
            Route::post('/password/update', 'updatePassword')->name('admin-password-update');

        });
    });

    Route::controller(NameController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/name/index', 'index')->name('name-index');
            Route::post('/name/update', 'update')->name('name-update');
        });
    });


    Route::controller(DesignationController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/designation/index', 'index')->name('designation-index');
            Route::post('/designation/update', 'update')->name('designation-update');
        });
    });

    Route::controller(SocialMediaController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/social/media/create', 'create')->name('social-media-create');
            Route::post('/social/media/store', 'store')->name('social-media-store');
            Route::get('/social/media/index', 'index')->name('social-media-index');
            Route::get('/social/media/edit/{id}', 'edit')->name('social-media-edit');
            Route::post('/social/media/update', 'update')->name('social-media-update');
            Route::get('/social/media/inactive/{id}', 'inactive')->name('social-media-inactive');
            Route::get('/social/media/active/{id}', 'active')->name('social-media-active');
            Route::get('/social/media/delete/{id}', 'delete')->name('social-media-delete');
        });
    });


    Route::controller(AboutController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/about/index', 'index')->name('about-index');   
            Route::post('/about/update', 'update')->name('about-update');   
        });
    });



    Route::controller(FactController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/fact/index', 'index')->name('fact-index');   
            Route::post('/fact/update', 'update')->name('fact-update');   
        });
    });

    Route::controller(SkillController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/skill/create', 'create')->name('skill-create');   
            Route::post('/skill/store', 'store')->name('skill-store');
            Route::get('/skill/index', 'index')->name('skill-index');   
            Route::get('/skill/edit/{id}', 'edit')->name('skill-edit'); 
            Route::post('/skill/update', 'update')->name('skill-update');
            Route::get('/skill/inactive/{id}', 'inactive')->name('skill-inactive');
            Route::get('/skill/active/{id}', 'active')->name('skill-active');
            Route::get('/skill/delete/{id}', 'delete')->name('skill-delete'); 

        });
    });

    Route::controller(ReviewController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/review/create', 'create')->name('review-create'); 
            Route::post('/review/store', 'store')->name('review-store');
            Route::get('/review/index', 'index')->name('review-index');   
            Route::get('/review/edit/{id}', 'edit')->name('review-edit'); 
            Route::post('/review/update', 'update')->name('review-update');
            Route::get('/review/inactive/{id}', 'inactive')->name('review-inactive');
            Route::get('/review/active/{id}', 'active')->name('review-active');
            Route::get('/review/delete/{id}', 'delete')->name('review-delete'); 

        });
    });


    Route::controller(EducationController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/education/create', 'create')->name('education-create');
            Route::post('/education/store', 'store')->name('education-store');
            Route::get('/education/index', 'index')->name('education-index');   
            Route::get('/education/edit/{id}', 'edit')->name('education-edit'); 
            Route::post('/education/update', 'update')->name('education-update');
            Route::get('/education/inactive/{id}', 'inactive')->name('education-inactive');
            Route::get('/education/active/{id}', 'active')->name('education-active');
            Route::get('/education/delete/{id}', 'delete')->name('education-delete'); 

        });
    });


    Route::controller(ExperienceController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/experience/create', 'create')->name('experience-create');
            Route::post('/experience/store', 'store')->name('experience-store');
            Route::get('/experience/index', 'index')->name('experience-index');  
            Route::get('/experience/edit/{id}', 'edit')->name('experience-edit'); 
            Route::post('/experience/update', 'update')->name('experience-update');
            Route::get('/experience/inactive/{id}', 'inactive')->name('experience-inactive');
            Route::get('/experience/active/{id}', 'active')->name('experience-active');
            Route::get('/experience/delete/{id}', 'delete')->name('experience-delete'); 

        });
    });


    Route::controller(CertificateController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/certificate/create', 'create')->name('certificate-create'); 
            Route::post('/certificate/store', 'store')->name('certificate-store');
            Route::get('/certificate/index', 'index')->name('certificate-index'); 
            Route::get('/certificate/edit/{id}', 'edit')->name('certificate-edit'); 
            Route::post('/certificate/update', 'update')->name('certificate-update');
            Route::get('/certificate/inactive/{id}', 'inactive')->name('certificate-inactive');
            Route::get('/certificate/active/{id}', 'active')->name('certificate-active');
            Route::get('/certificate/delete/{id}', 'delete')->name('certificate-delete'); 

        });
    });


    Route::controller(ProjectController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/project/create', 'create')->name('project-create');   
            Route::post('/project/store', 'store')->name('project-store');
            Route::get('/project/index', 'index')->name('project-index');   
            Route::get('/project/edit/{id}', 'edit')->name('project-edit'); 
            Route::post('/project/update', 'update')->name('project-update');
            Route::get('/project/delete/{id}', 'delete')->name('project-delete'); 
            Route::get('/project/inactive/{id}', 'inactive')->name('project-inactive');
            Route::get('/project/active/{id}', 'active')->name('project-active');


        });
    });

    Route::controller(ContactController::class)->group(function(){
        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/contact/index', 'index')->name('contact-index');   
            Route::get('/contact/delete/{id}', 'delete')->name('contact-delete'); 
        });
    });

});
