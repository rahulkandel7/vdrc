<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function introduction()
    {
        return view('aboutus.introduction');
    }

    public function organizational()
    {
        return view('aboutus.organization');
    }

    public function executive()
    {
        return view('aboutus.executive');
    }

    public function staff()
    {
        return view('aboutus.staff');
    }

    public function resource()
    {
        return view('programs.resource');
    }

    public function promotion()
    {
        return view('programs.promotion');
    }

    public function partnership()
    {
        return view('programs.partnership');
    }

    public function currently()
    {
        return view('programs.currently');
    }

    public function report()
    {
        return view('publications.report');
    }

    public function newsletter()
    {
        return view('publications.newsletter');
    }

    public function honorable()
    {
        return view('membership.honorable');
    }

    public function life()
    {
        return view('membership.life');
    }

    public function general()
    {
        return view('membership.general');
    }

    public function expresidents()
    {
        return view('membership.expresidents');
    }

    public function photoGallery()
    {
        return view('gallery.photogallery');
    }

    public function videoGallery()
    {
        return view('gallery.videogallery');
    }

    public function photoView()
    {
        return view('gallery.photoview');
    }

    public function reservation()
    {
        return view('reservation');
    }

    public function contact()
    {
        return view('contact');
    }

    public function events()
    {
        return view('events.event');
    }

    public function eventsview()
    {
        return view('events.eventview');
    }

    public function strategic()
    {
        return view('strategic');
    }

    public function cso()
    {
        return view('csco');
    }
}
