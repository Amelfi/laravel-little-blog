<x-layouts.app
title= blog  
>
<h1>Crear Post</h1>

<form action="{{ route('blogs.store') }}" method="POST">
    @csrf
        @include('blog.form-field')
    <br/>
        
    <input type="submit" value="Send">
</form>

<a href="{{route('blogs.index')}}">Regresar</a>

</x-layout>