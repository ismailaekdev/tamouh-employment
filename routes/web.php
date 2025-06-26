<?php

use App\Http\Controllers\ShowContact;
use App\Http\Controllers\ShowHome;
use App\Http\Controllers\ShowServices;
use App\Http\Controllers\SitemapXml;
use Illuminate\Support\Facades\Route;


Route::get('/sitemap.xml', SitemapXml::class)->name('sitemap.xml');

Route::get('/', function () {
    return redirect(status : 301)->route('front.home', locale());
});

Route::prefix('{locale}')->group(function () {
    Route::get('/', ShowHome::class)->name('front.home');
    Route::get('/contact', ShowContact::class)->name('front.contact');
    Route::get('/services', ShowServices::class)->name('front.services');
});
