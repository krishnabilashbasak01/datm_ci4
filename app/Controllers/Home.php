<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['page_title'] = 'Datm';
        $data['page_desc'] = '';
        $data['page_kw'] = '';
        return view('client/home', $data);
    }
    public function about(): string
    {
        $data['page_title'] = 'Datm';
        $data['page_desc'] = '';
        $data['page_kw'] = '';
        return view('client/about', $data);
    }

    public function courses(): string{
        $data['page_title'] = 'Datm';
        $data['page_desc'] = '';
        $data['page_kw'] = '';
        return view('client/courses', $data);
    }

    public function placement(): string{
        $data['page_title'] = 'Datm';
        $data['page_desc'] = '';
        $data['page_kw'] = '';
        return view('client/placement', $data);
    }

    public function campus(): string{
        $data['page_title'] = 'Datm';
        $data['page_desc'] = '';
        $data['page_kw'] = '';
        return view('client/campus', $data);
    }

    public function events(): string{
        $data['page_title'] = 'Datm';
        $data['page_desc'] = '';
        $data['page_kw'] = '';
        return view('client/events', $data);
    }

    public function contact(): string{
        $data['page_title'] = 'Datm';
        $data['page_desc'] = '';
        $data['page_kw'] = '';
        return view('client/contact', $data);
    }
}
