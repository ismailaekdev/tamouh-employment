<?php

use App\Http\Controllers\ShowHome;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHome::class)->name('front.home');
