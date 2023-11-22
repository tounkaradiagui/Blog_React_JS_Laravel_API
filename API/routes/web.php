<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SetupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('frontend.index');
});

// Route::get('/frontend', [App\Https\Controllers\Frontend\FrontendController::class, 'index'])->name('frontend')



// L'utilisateur doit être connecté pour avoir accèes à ces différentes actions
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'isAdmin'], function () {
        // Les utilisateurs sont gérés par le controller UserController
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

        Route::resource('users', UserController::class);
        Route::get('users/update/status/{user_id}/{status_code}', [App\Http\Controllers\User\UserController::class, 'updateStatus'])->name('users.status');
        Route::get('users/{user_id}/delete', [App\Http\Controllers\User\UserController::class, 'destroy'])->name('users.destroy');

        Route::resource('roles', RoleController::class);
        Route::get('roles/{role_id}/delete', [App\Http\Controllers\RoleController::class, 'delete'])->name('roles.delete');
        Route::resource('permissions', PermissionController::class);
        Route::get('permissions/{permission_id}/delete', [App\Http\Controllers\PermissionController::class, 'delete'])->name('permissions.delete');

        Route::prefix('admin')->group(function() {
            Route::resource('categories', CategoryController::class);
            Route::resource('posts', PostController::class);
            Route::get('categories/{category_id}/delete', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
            Route::get('posts/{post_id}/delete', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');
        });

    });

    // Les utilisateurs non-administrateurs peuvent acceder aux pages suivantes
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::post('/update-myProfile', [App\Http\Controllers\User\UserController::class, 'updateProfile'])->name('update.profile');
    Route::get('/mon-profil', [App\Http\Controllers\User\UserController::class, 'profile'])->name('users.profile');
    Route::post('/update-myPassword', [App\Http\Controllers\User\UserController::class, 'updatedMypasssword'])->name('update.password');
});

