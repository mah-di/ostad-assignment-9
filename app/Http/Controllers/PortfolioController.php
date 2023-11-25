<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function home()
    {
        return view("pages.home");
    }

    function about()
    {
        return view("pages.about");
    }

    function contact()
    {
        return view("pages.contact");
    }

    function skills()
    {
        return view("pages.skills");
    }

    function projects()
    {
        return view("pages.projects");
    }
}
