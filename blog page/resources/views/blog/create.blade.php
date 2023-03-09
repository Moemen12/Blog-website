@extends('layouts.app')

@section('content')

<div class="container">
    <div class="posts">
        <h1>Create New Post</h1>
    </div>
</div>


<div class="create-form">
    <form action="/blog" method="POST" enctype="multipart/form-data" class="created">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Title" minlength="15"  value="{{old('title')}}" required/>
            @error('title')
            <span class="not-valid">{{$message}}</span>
        @enderror
        </div>

        <div>
            <textarea name="description"  placeholder="Description" minlength="500"  required >
                {{old('description')}}
            </textarea>
            @error('description')
            <span class="not-valid">{{$message}}</span>
        @enderror
        </div>

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