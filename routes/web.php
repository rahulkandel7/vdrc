<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CurrentlyrunningController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GalleryitemController;
use App\Http\Controllers\Admin\MajoraccomplishmentController;
use App\Http\Controllers\Admin\MembershipController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\RecentActivityController;
use App\Http\Controllers\Admin\SlideshowController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/dashboard', [FrontendController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

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
    Route::get('/photo-gallery/{id}', [FrontendController::class, 'photoView'])->name('pv');
});

Route::get('/training-reservation', [FrontendController::class, 'reservation'])->name('reservation');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');

//Event Rounitng
Route::get('/events', [FrontendController::class, 'events'])->name('events');
Route::get('/events-view/{id}', [FrontendController::class, 'eventsview'])->name('eventsview');

//article Rounitng
Route::get('/articles', [FrontendController::class, 'articles'])->name('articles');
Route::get('/articleview/{id}', [FrontendController::class, 'articlesview'])->name('articlesview');

//recentActivity Rounitng
Route::get('/recentactivities', [FrontendController::class, 'recentactivites'])->name('recentactivities');
Route::get('/recentactivities/{id}', [FrontendController::class, 'recentactivitesview'])->name('recentactivitiesview');

Route::get('/notices', [FrontendController::class, 'notices'])->name('notice');

Route::get('/majoraccomplishment', [FrontendController::class, 'major'])->name('major');



Route::get('/strategic-partnership', [FrontendController::class, 'strategic'])->name('strategic');
Route::get('/csos-role-instrumental-during-pandemic', [FrontendController::class, 'cso'])->name('cso');

//reservation
Route::resource('reservations', ReservationController::class);

//Admin Routing 
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function() {
    Route::resource('articles', ArticleController::class);
    Route::post('/articles/delete',[\App\Http\Controllers\Admin\ArticleController::class,'delete'])->name('articles.delete');

    Route::resource('notices', NoticeController::class);
    Route::post('/notices/delete',[\App\Http\Controllers\Admin\NoticeController::class,'delete'])->name('notices.delete');

    Route::resource('recentactivities', RecentActivityController::class);
    Route::post('/recentactivities/delete',[\App\Http\Controllers\Admin\RecentActivityController::class,'delete'])->name('recentactivities.delete');

    Route::resource('majoraccomplishments', MajoraccomplishmentController::class);
    Route::post('/majoraccomplishments/delete',[\App\Http\Controllers\Admin\MajoraccomplishmentController::class,'delete'])->name('majoraccomplishments.delete');

    Route::resource('events', EventController::class);
    Route::post('/events/delete',[\App\Http\Controllers\Admin\EventController::class,'delete'])->name('events.delete');

    Route::resource('memberships', MembershipController::class);
    Route::post('/memberships/delete',[\App\Http\Controllers\Admin\MembershipController::class,'delete'])->name('memberships.delete');

    Route::resource('publications', PublicationController::class);
    Route::post('/publications/delete',[\App\Http\Controllers\Admin\PublicationController::class,'delete'])->name('publications.delete');

    Route::resource('currentlyrunnings', CurrentlyrunningController::class);
    Route::post('/currentlyrunnings/delete',[\App\Http\Controllers\Admin\CurrentlyrunningController::class,'delete'])->name('currentlyrunnings.delete');

    Route::resource('videos', VideoController::class);
    Route::post('/videos/delete',[\App\Http\Controllers\Admin\VideoController::class,'delete'])->name('videos.delete');

    Route::resource('galleries', GalleryController::class);
    Route::post('/galleries/delete',[\App\Http\Controllers\Admin\GalleryController::class,'delete'])->name('galleries.delete');

    Route::resource('galleryitems', GalleryitemController::class);
    Route::post('/galleryitems/delete',[GalleryitemController::class,'delete'])->name('galleryitems.delete');
    Route::get('/galleryitems/edit/{id}',[GalleryitemController::class,'showImage'])->name('galleryitems.showImage');
    
    Route::resource('slideshows', SlideshowController::class);
    Route::post('/slideshows/delete',[\App\Http\Controllers\Admin\SlideshowController::class,'delete'])->name('slideshows.delete');

    Route::resource('users',UserController::class);

    Route::get('/reservations',[FrontendController::class,'reservationa'])->name('reservations.index');
});

require __DIR__.'/auth.php';
