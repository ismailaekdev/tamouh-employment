<?php

use App\Http\Controllers\ShowContact;
use App\Http\Controllers\ShowHome;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHome::class)->name('front.home');
Route::get('/contact', ShowContact::class)->name('front.contact');
