<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('contents.home');
}) ->name('home');

Route::get('about', function () {
    return view('contents.about'); 
}) ->name('about');

Route::get('project', function () {
    return view('contents.project'); 
}) ->name('project');

Route::get('project/service', function () {
    return view('contents.service');
}) ->name('service');


Route::get('contact', function () {
    return view('contents.contact');
}) ->name('contact');