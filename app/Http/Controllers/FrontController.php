<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view("index");
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function videopage()
    {
        return view('videopage');
    }
    public function photodetails()
    {
        return view('photodetails');
    }
    public function videodetails()
    {
        return view('/videodetails');
    }
}
