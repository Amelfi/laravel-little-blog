<x-layouts.app
title= blog 
>
<h1>Editar Post</h1>
<form action="{{ route('blogs.update', $blog) }}" method="POST">
    @csrf @method('PATCH')
    
    @include('blog.form-field')

    <br/>
        
    <input type="submit" value="Send">
</form>

<a href="{{route('blogs.index')}}">Regresar</a>

</x-layout>