<x-layouts.app
title= blog 
>
<h1>Editar Post</h1>
<form action="{{ route('blogs.update', $blog) }}" method="POST">
    @csrf @method('PATCH')
    
    <label>
        Title
        <br/>
        <input name=title type="text" value="{{old('title', $blog->title)}}">
        <div>
            @error('title')
            
                <span style = color:red >{{$message}}</span>
            @enderror
        </div>
    </label>

    <br/>

    <label>
        Body
        <br>
        <textarea name="description" id="" cols="30" rows="5">{{old('description', $blog->description)}}</textarea>
        <div>
            @error('description')
            
                <span style = color:red >{{$message}}</span>
            @enderror
        </div>
    </label>

    <br/>
        
    <input type="submit" value="Send">
</form>

<a href="{{route('blogs.index')}}">Regresar</a>

</x-layout>