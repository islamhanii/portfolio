<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    /*------------------------------------------------------------------------------------------------------*/

    public function about()
    {
        return view('web.about');
    }

    /*------------------------------------------------------------------------------------------------------*/

    public function services()
    {
        return view('web.services');
    }

    /*------------------------------------------------------------------------------------------------------*/

    public function portfolio()
    {
        return view('web.portfolio');
    }

    /*------------------------------------------------------------------------------------------------------*/

    public function blog()
    {
        return view('web.blog');
    }

    /*------------------------------------------------------------------------------------------------------*/

    public function article()
    {
        return view('web.article');
    }

    /*------------------------------------------------------------------------------------------------------*/

    public function contact()
    {
        return view('web.contact');
    }
}
