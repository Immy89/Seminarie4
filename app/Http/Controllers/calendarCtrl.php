<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calendarCtrl extends Controller
{
    public function dec17()
    {
        return view('Kalender.December2017');
    }

    public function jan18()
    {
        return view('Kalender.Januari2018');
    }

    public function feb18()
    {
        return view('Kalender.Februari2018');
    }
}
