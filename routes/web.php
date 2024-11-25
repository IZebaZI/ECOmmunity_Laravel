<?php

use App\Http\Controllers\viewsController;
use App\Http\Controllers\authController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// AUTH ROUTES ------------------------------------------------
Route::get('/', [authController::class, 'login'])->name('login');
Route::get('/login', [authController::class, 'login'])->name('login');
Route::get('/register', [authController::class, 'register'])->name('register');
Route::get('/access', [authController::class, 'access'])->name('access');
Route::get('/register/user', [authController::class, 'registerUser'])->name('registerUser');
Route::get('/logout', [authController::class, 'logout'])->name('logout');


// ADMIN ROUTES -----------------------------------------------
// USERS CRUD ROUTES ------------------------------------------
Route::get('/admin', [usersController::class, 'index'])->name('adminHome');
Route::get('/admin/users', [usersController::class, 'index'])->name('usersList');
Route::get('/admin/store/user', [usersController::class, 'store'])->name('storeUser');
Route::post('/admin/update/user/{id}', [usersController::class, 'update'])->name('updateUser');
Route::post('/admin/delete/user/{id}', [usersController::class, 'destroy'])->name('deleteUser');
Route::get('/admin/user_profile/{id}', [usersController::class, 'show'])->name('userProfile');
// COMPANIES CRUD ROUTES --------------------------------------
Route::get('/admin/companies', [viewsController::class, 'companiesList'])->name('companiesList');
// PICKUP POINTS CRUD ROUTES -----------------------------------
Route::get('/admin/pickup_points', [viewsController::class, 'pickupPointsList'])->name('pickupPointsList');


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
