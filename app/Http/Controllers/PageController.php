<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class PageController extends Controller
{
    function homePage(){
        return View("home");
    }
    function about(){
        return view('nav_pages.homePages.about');
    }
    function services(){
        return view('nav_pages.homePages.services');
    }
}
