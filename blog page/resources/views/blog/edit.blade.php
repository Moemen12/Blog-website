@extends('layouts.app')

@section('content')

<div class="container">
    <div class="posts">
        <h1>Edit Post</h1>
    </div>
</div>


<div class="create-form">
    <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data" class="created">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="title" value="{{$post->title }}" required>
        </div>

        <div>
            <textarea name="description"  placeholder="Description" minlength="500" required >
                {{$post->description}}
            </textarea>
        </div>
        <img src="{{ asset('/images/'.$post->image_path) }}" alt="{{$post->title}}" width="300px">
        <div class="file-upload">
         

            <input type="file" id="input-file" name="image"/>
            @error('image')
            <span>{{$message}}</span>
            @enderror
 
            <label for="input-file">Select an image to upload</label>
          </div>
          
    
        <div>
            <button type="submit">Submit the post</button>
        </div>
    </form>
</div>

@endsection