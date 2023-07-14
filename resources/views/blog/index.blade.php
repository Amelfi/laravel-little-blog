{{-- @extends('layout.app')

@section('title', 'Blog')
@section('meta-description', 'Blog meta-description')

@section('content') --}}
<x-layouts.app
title="Blogs"
meta-descriptgsn="Blog meta-description"
>
    <h1>Blog</h1>
    <a href="{{route('blogs.create')}}">Crear Blog</a>
    @foreach ($blogs as $blog)
        <div style= "display: flex; align-items: baseline;">
            <h2>
                <a href="{{route('blogs.show', $blog)}}"><p>{{ $blog->title }}</p></a>
            </h2>&nbsp;
            <a href="{{route('blogs.edit', $blog)}}">Edit</a>&nbsp;

            <form action="{{route('blogs.delete', $blog)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
            </form>

        </div>
    @endforeach

</x-layouts.app>
{{-- @endsection --}}