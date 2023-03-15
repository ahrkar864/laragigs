<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;


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

// common resource routes::
// index - show all listings
// show - show single listing
// create - show form  to create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destory - delete listing

// Listings crud

// all listings
Route::get('/', [ListingController::class , 'index']);

//show create form
Route::get('/listings/create' , [ListingController::class , 'create'])->middleware('auth');

Route::get('/listings/listings/create' , [ListingController::class , 'create'])->middleware('auth');

Route::get('/listings/{listing}/listings/create' , [ListingController::class , 'create'])->middleware('auth');

// Store listing Data
Route::post('/listings' , [ListingController::class , 'store'])->middleware('auth');

//Show edit form
Route::get('/listings/{listing}/edit',[ListingController::class , 'edit'])->middleware('auth');

//Update listing
Route::put('/listings/{listing}' , [ListingController::class , 'update'])->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}' , [ListingController::class , 'destroy'])->middleware('auth');

//View all possed jobs listings
Route::get('/listings/view' , [ListingController::class , 'view'])->middleware('auth');

//Manage Posted jobs listings
Route::get('/listings/manage' , [ListingController::class , 'manage'])->middleware('auth');

// Single listing
Route::get('/listings/{listing}' , [ListingController::class , 'show'] );

// Register crud

// Show register create form
Route::get('/register' , [UserController::class , 'create'])->middleware('guest');

// Create new user
Route::post('/users' , [UserController::class , 'store']);

//Log user out
Route::post('/logout' , [UserController::class , 'logout'])->middleware('auth');

//Show login form
Route::get('/login' , [UserController::class , 'login'])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate' , [UserController::class , 'authenticate']);

// Contact us
Route::get('/contact' , [ListingController::class , 'contact'] );






