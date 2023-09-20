<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){return view('layout.home');});
Route::get('/home',function(){return view('layout.home');})->name('home');
Route::get('/about',function(){return view('about');})->name('about');
Route::get('/contact',function(){return view('contact');})->name('contact');
Route::get('/blogs',function(){return view('blogs');})->name('blogs');
Route::get('/projects',function(){return view('projects');})->name('projects');
Route::get('/resume',function(){return view('resume');})->name('resume');
Route::get('/services',function(){return view('services');})->name('services');
