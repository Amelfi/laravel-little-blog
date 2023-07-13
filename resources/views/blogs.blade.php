{{-- @extends('layout.app')

@section('title', 'Blog')
@section('meta-description', 'Blog meta-description')

@section('content') --}}
<x-layouts.app
title="Blogs"
meta-descriptgsn="Blog meta-description"
>
    <h1>Blog</h1>
    
    @foreach ($blogs as $blog)
        <a href="{{route('blog.show', $blog->id)}}">{{ $blog->title }}</a>
    @endforeach

</x-layouts.app>
{{-- @endsection --}}