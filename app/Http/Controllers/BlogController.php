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
        return view('blog.index', ['blogs' => $blogs] );
    }

    public  function create(){

        return view('blog.create');
    }

    public  function show(Blog $blog){

        return view('blog.show', ['blog' => $blog]);
    }

    public  function store(Request $request){

        $validated = $request->validate(
            [
                'title' => ['required'],
                'description' => ['required'],
            ]
            );

        Blog::create($validated);

        return to_route('blogs.index')->with('status', 'Post Updated Successfully');
    }

    public function edit(Blog $blog){

        
        return view('blog.edit', ['blog' => $blog]);
    }
    
    public function update(Request $request, Blog $blog){

        $validated = $request->validate(
            [
                'title' => ['required'],
                'description' => ['required'],
            ]
            );

        $blog->update($validated);



        return to_route('blogs.index')->with('status', 'Post Updated Successfully');
    }

    public function delete(Blog $blog){

        $blog->delete();
        return to_route('blogs.index')->with('status', 'Post deleted Successfully');
        

    }

}
