<?php

use App\Http\Controllers\FrontendController;
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
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//About US Routing
Route::name('aboutus.')->group(function() {
    Route::get('/introduction', [FrontendController::class, 'introduction'])->name('introduction');
    Route::get('/organizational-structure', [FrontendController::class, 'organizational'])->name('os');
    Route::get('/executive-committee', [FrontendController::class, 'executive'])->name('ec');
    Route::get('/staff-members', [FrontendController::class, 'staff'])->name('sm');
});

//Programs Routing
Route::name('programs.')->group(function() {
    Route::get('/resource-mobilization-program', [FrontendController::class, 'resource'])->name('rmp');
    Route::get('/promotion-and-welfare-programs', [FrontendController::class, 'promotion'])->name('pwp');
    Route::get('/partnership-program', [FrontendController::class, 'partnership'])->name('pp');
    Route::get('/currently-running-program', [FrontendController::class, 'currently'])->name('crp');
});

//publications Routing
Route::name('publications.')->group(function() {
    Route::get('/report', [FrontendController::class, 'report'])->name('report');
    Route::get('/newsletter', [FrontendController::class, 'newsletter'])->name('newsletter');
});

//Membership Routing
Route::name('membership.')->group(function() {
    Route::get('/honorable-members', [FrontendController::class, 'honorable'])->name('hm');
    Route::get('/life-members', [FrontendController::class, 'life'])->name('lm');
    Route::get('/general-members', [FrontendController::class, 'general'])->name('gm');
    Route::get('/ex-presidents', [FrontendController::class, 'expresidents'])->name('ep');
});

//Gallery Routing
Route::name('gallery.')->group(function() {
    Route::get('/photo-gallery', [FrontendController::class, 'photoGallery'])->name('pg');
    Route::get('/video-gallery', [FrontendController::class, 'videoGallery'])->name('vg');
    Route::get('/photo-gallery/id', [FrontendController::class, 'photoView'])->name('pv');
});

Route::get('/training-reservation', [FrontendController::class, 'reservation'])->name('reservation');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');


require __DIR__.'/auth.php';
