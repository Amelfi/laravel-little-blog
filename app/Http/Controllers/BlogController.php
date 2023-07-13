<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){

        // $blogs = DB::table('blogs')->get();
        $blogs = Blog::All();

        return view('blogs', ['blogs' => $blogs] );
    }

    public  function create(){

        return view('');
    }
    public  function show($id){
        $blog = Blog::find($id);
        return view('blog', ['blog' => $blog]);
    }
    public  function contact(){
        return view('contact');
    }
}
