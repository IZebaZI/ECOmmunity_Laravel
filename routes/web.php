<?php

use App\Http\Controllers\viewsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// AUTH ROUTES ------------------------------------------------
Route::get('/', [viewsController::class, 'login'])->name('login');
Route::get('/login', [viewsController::class, 'login'])->name('login');
Route::get('/register', [viewsController::class, 'register'])->name('register');

// ADMIN ROUTES -----------------------------------------------
Route::get('/admin', [viewsController::class, 'usersList'])->name('adminHome');
Route::get('/admin/users', [viewsController::class, 'usersList'])->name('usersList');
Route::get('/admin/companies', [viewsController::class, 'companiesList'])->name('companiesList');
Route::get('/admin/pickup_points', [viewsController::class, 'pickupPointsList'])->name('pickupPointsList');
Route::get('/admin/user_profile', [viewsController::class, 'userProfile'])->name('userProfile');

// USER ROUTES --------------------------------------
Route::get('/user', [viewsController::class, 'myProfile'])->name('userHome');
Route::get('/user/pickup_points', [viewsController::class, 'userPickupPoints'])->name('userPickupPoints');
Route::get('/user/my_pickups', [viewsController::class, 'myPickups'])->name('myPickups');
Route::get('/user/my_profile', [viewsController::class, 'myProfile'])->name('myProfile');
Route::get('/user/my_post', [viewsController::class, 'myPost'])->name('myPost');

// COMMUNITY ROUTES --------------------------------------
Route::get('/community/home', [viewsController::class, 'communityHome'])->name('communityHome');
Route::get('/community/post', [viewsController::class, 'guestPostView'])->name('guestPostView');
Route::get('/community/user', [viewsController::class, 'guestUserProfile'])->name('guestUserProfile');
