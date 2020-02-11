<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
<<<<<<< HEAD
     public function home()
=======
    public function home()
>>>>>>> static-pages
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }
<<<<<<< HEAD

=======
>>>>>>> static-pages
    public function about()
    {
        return view('static_pages/about');
    }
}
