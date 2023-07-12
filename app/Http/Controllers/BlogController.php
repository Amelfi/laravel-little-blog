<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public  function about(){
        return view('about');
    }
    public  function blog(){
        return view('blog');
    }
    public  function contact(){
        return view('contact');
    }
}
