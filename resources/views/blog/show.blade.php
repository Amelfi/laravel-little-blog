<x-layouts.app
title= blog 
>

<h1>{{ $blog->title }}</h1>
<p>{{ $blog->description }}</p>

<a href="{{route('blogs.index')}}">Regresar</a>

</x-layout>