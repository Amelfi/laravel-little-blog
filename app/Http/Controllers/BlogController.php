<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){

        // $blogs = DB::table('blogs')->get();
        $blogs = Blog::All();
        return view('blog.index', ['blogs' => $blogs] );
    }

    public  function create(){

        return view('blog.create', ['blog' => new Blog()]);
    }

    public  function show(Blog $blog){

        return view('blog.show', ['blog' => $blog]);
    }

    public  function store(SavePostRequest $request){

        
        Blog::create($request->validated());
        return to_route('blogs.index')->with('status', 'Post Updated Successfully');
    }

    public function edit(Blog $blog){

        
        return view('blog.edit', ['blog' => $blog]);
    }
    
    public function update(SavePostRequest $request, Blog $blog){

        $blog->update($request->validated());
        return to_route('blogs.index')->with('status', 'Post Updated Successfully');
    }

    public function delete(Blog $blog){

        $blog->delete();
        return to_route('blogs.index')->with('status', 'Post deleted Successfully');
        

    }

}
