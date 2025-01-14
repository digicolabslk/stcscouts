<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

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

Route::get('', function () {
    return view('home');
});

Route::get('/sitemap.xml', [SitemapController::class, 'generateXmlSitemap']);


Route::get('/new', function () {
    return view('home');
});

Route::get('/sitemap', function () {
    return view('sitemap');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about-the-site', function () {
    return view('about-the-site');
});

Route::get('/troop-profile', function () {
    return view('troop-profile');
});

Route::get('/photo-gallery', function () {
    return view('photo-gallery');
});

Route::get('/badgework-new-syllabus', function () {
    return view('badgework-new-syllabus');
});

Route::get('/instructors', function () {
    return view('instructors');
});

Route::get('/history-of-the-16th-colombo-cub-pack', function () {
    return view('history-of-the-16th-colombo-cub-pack');
});

Route::get('/the-group-committee', function () {
    return view('the-group-committee');
});

Route::get('/the-scout-dunk', function () {
    return view('the-scout-dunk');
});

Route::get('/badgework-old-syllabus', function () {
    return view('badgework-old-syllabus');
});

Route::get('/cub-pack-leaders', function () {
    return view('cub-pack-leaders');
});

