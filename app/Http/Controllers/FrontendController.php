<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Currentlyrunning;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Galleryitem;
use App\Models\Majoraccomplishment;
use App\Models\Membership;
use App\Models\Notice;
use App\Models\Publication;
use App\Models\RecentActivity;
use App\Models\Reservation;
use App\Models\Slideshow;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $events = Event::take(10)->latest()->get();
        $photos = Gallery::take(10)->latest()->get();
        $programs = Currentlyrunning::take(3)->latest()->get();
        $slideshows = Slideshow::all();
        $majoraccomplishments = Majoraccomplishment::take(2)->latest()->get();
        return view('welcome',compact('slideshows','articles','notices','recentactivities','events','programs','majoraccomplishments','photos'));
    }
    public function introduction()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('aboutus.introduction',compact('articles','notices','recentactivities'));
    }

    public function organizational()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('aboutus.organization',compact('articles','notices','recentactivities'));
    }

    public function executive()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $executives = Membership::where('type','Executive Committee')->get();
        return view('aboutus.executive',compact('executives','articles','notices','recentactivities'));
    }

    public function staff()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $staffs = Membership::where('type','Staff Members')->get();
        return view('aboutus.staff',compact('staffs','articles','notices','recentactivities'));
    }

    public function resource()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('programs.resource',compact('articles','notices','recentactivities'));
    }

    public function promotion()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('programs.promotion',compact('articles','notices','recentactivities'));
    }

    public function partnership()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('programs.partnership',compact('articles','notices','recentactivities'));
    }

    public function currently()
    {
        $programs = Currentlyrunning::all();
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('programs.currently',compact('articles','notices','recentactivities','programs'));
    }

    public function report()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $reports = Publication::where('type','report')->get();
        return view('publications.report',compact('reports','articles','notices','recentactivities'));
    }

    public function newsletter()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $newsletters = Publication::where('type','newsletter')->get();
        return view('publications.newsletter',compact('newsletters','articles','notices','recentactivities'));
    }

    public function honorable()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $honorables = Membership::where('type','Honorable Members')->get();
        return view('membership.honorable',compact('honorables','articles','notices','recentactivities'));
    }

    public function life()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $lifes = Membership::where('type','Life Members')->get();
        return view('membership.life',compact('lifes','articles','notices','recentactivities'));
    }

    public function general()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $generals = Membership::where('type','General Members')->get();
        return view('membership.general',compact('generals','articles','notices','recentactivities'));
    }

    public function expresidents()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $expresidents = Membership::where('type','Ex-President')->get();
        return view('membership.expresidents',compact('expresidents','articles','notices','recentactivities'));
    }

    public function photoGallery()
    {
        $photos = Gallery::all();
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('gallery.photogallery',compact('articles','notices','recentactivities','photos'));
    }

    public function videoGallery()
    {
        $videos = Video::all();
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('gallery.videogallery',compact('articles','notices','recentactivities','videos'));
    }

    public function photoView($id)
    {
        $photos = Galleryitem::where('gallery_id',$id)->get();
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('gallery.photoview',compact('articles','notices','recentactivities','photos'));
    }

    public function reservation()
    {
        return view('reservation');
    }

    public function reservationa()
    {
        $reservations = Reservation::paginate(10);
        return view('admin.reservation',compact('reservations'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function events()
    {
        $events = Event::all();
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('events.event',compact('articles','notices','recentactivities','events'));
    }

    public function eventsview($id)
    {
        $event = Event::findOrFail($id);
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('events.eventview',compact('articles','notices','recentactivities','event'));
    }

    public function articles()
    {
        $articless = Article::all();
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('articles.index',compact('articless','notices','recentactivities','articles'));
    }

    public function articlesview($id)
    {
        $article = Article::findOrFail($id);
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('articles.show',compact('articles','notices','recentactivities','article'));
    }

    public function recentactivites()
    {
        $recentactivitiess = RecentActivity::all();
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('recentactivities.index',compact('articles','notices','recentactivities','recentactivitiess'));
    }

    public function recentactivitesview($id)
    {
        $recentactivity = RecentActivity::findOrFail($id);
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('recentactivities.show',compact('articles','notices','recentactivities','recentactivity'));
    }

    public function strategic()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('strategic',compact('articles','notices','recentactivities'));
    }

    public function cso()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        return view('csco',compact('articles','notices','recentactivities'));
    }

    public function dashboard()
    {
        $articles = Article::all()->count();
        $notices = Notice::all()->count();
        $slideshows = Slideshow::all()->count();
        $activities = RecentActivity::all()->count();
        $members = Membership::all()->count();
        $events = Event::all()->count();
        $publications = Publication::all()->count();
        $currently = Currentlyrunning::all()->count();
        $videos = Video::all()->count();
        $gallery = Gallery::all()->count();
        return view('dashboard',compact('articles','notices','slideshows','activities','members','events','publications','currently','videos','gallery'));
    }

    public function notices()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $noticess = Notice::all();
        return view('notices',compact('noticess','articles','notices','recentactivities'));
    }

    public function major()
    {
        $articles = Article::take(3)->latest()->get();
        $notices = Notice::take(3)->latest()->get();
        $recentactivities = RecentActivity::take(3)->latest()->get();
        $majors = Majoraccomplishment::all();
        return view('majoraccomplishments',compact('majors','articles','notices','recentactivities'));
    }
}
