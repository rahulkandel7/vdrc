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
}
