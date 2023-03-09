@extends('layouts.app')

@section('content')

@if (session()->has('message'))
<div class="success">
    {{session()->get('message')}}
</div>
@endif


<div class="container">
    <div class="posts">
        <h1>{{ $post->title }}</h1>
        <section>
            <span>By: {{ $post->user->name }}</span>
            <span>on: {{ date('d-m-Y',strtotime($post->updated_at)) }}</span>
        </section>
    </div>
</div>


<div class="show-form">
    <div class="one">
        <img class="responsive" src="/images/{{$post->image_path}}" alt="" width="960" height="620" >
    </div>
   
    <div class="info">
        {{ $post->description}}
    </div>


   @if (Auth::user() && Auth::user()->id == $post->user_id)
   <a class="edit-btn" href="/blog/{{$post->slug}}/edit">Edit Post</a>  
   
   <form class="delete-form" action="/blog/{{$post->slug}}" method="POST">
    @csrf
    @method('delete')

    <button type="submit" class="delete-btn">Delete Post</button> 
   </form>

   @endif


   
</div>

@endsection