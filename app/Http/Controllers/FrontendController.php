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
}
