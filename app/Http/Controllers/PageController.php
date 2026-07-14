<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function projectDetails()
    {
        return view('pages.project-details');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function newsDetails()
    {
        return view('pages.news-details');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function enviro()
    {
        return view('pages.enviro');
    }

    public function pantherOil()
    {
        return view('pages.panther-oil');
    }

    public function pantherMat()
    {
        return view('pages.panther-mat');
    }

    public function pantherBuild()
    {
        return view('pages.panther-build');
    }

    public function certifications()
    {
        return view('pages.certifications');
    }

    public function sustainability()
    {
        return view('pages.sustainability');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }
}
