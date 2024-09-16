<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('client/home');
    }
    public function about(): string
    {
        return view('client/about');
    }

    public function courses(): string{
        return view('client/courses');
    }

    public function placement(): string{
        return view('client/placement');
    }

    public function campus(): string{
        return view('client/campus');
    }

    public function events(): string{
        return view('client/events');
    }

    public function contact(): string{
        return view('client/contact');
    }
}
