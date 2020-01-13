<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel Blog!';
        // return view('pages/index', compact('title'));
        return view('pages/index')->with('title', $title); // 'title' is what you call in the view html file
    }

    public function about()
    {

        $title = 'About Us';
        return view('pages/about')->with('title', $title);
    }

    public function services()
    {
        $data = [
            'title' => 'Services',
            'services' => [
                'Web Design',
                'Programming',
                'SEO'
            ]
        ];
        // return view('pages/services')->with('data', $data); // Cach 1. Khi do trong viewHTML phai dung {{$data['title']}} for example
        return view('pages/services')->with($data); // Cach 2. Khi do trong viewHTML dung luon {{$title}}
    }
}
