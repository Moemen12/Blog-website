@extends('layouts.app')

@section('content')
@if (session()->has('message'))
<div class="delete">
    {{session()->get('message')}}
</div>
@endif
@if (session()->has('created-message'))
<div class="success">
    {{session()->get('created-message')}}
</div>
@endif






<div class="container">
    <div class="posts">
        <h1>All Posts</h1>
    </div>
</div>


@auth
<a class="create-btn" href="/blog/create">Add new Post</a>
@endauth





@foreach ($posts as $post)
  
<div class="blog_holder">
    <div class="one">
        <img class="responsive" src="/images/{{$post->image_path}}" alt="" width="960" height="620" >
    </div>

    <div class="newBlog">
        <h2>
            {{$post->title }}
        </h2>
        <span class="writer">
            <span>By: {{ $post->user->name }}</span>
            <span>on: {{ date('d-m-Y',strtotime($post->updated_at)) }}</span>
            <p> <?php
            
               $length = strlen($post->description);

                $cutoff = 500;

                if ($length > $cutoff) {
                    $truncated = substr($post->description, 0, $cutoff).'...';
                } else {
                    $truncated = $post->description;
                }

                echo $truncated ;?>
            </p>
            <a href="/blog/{{$post->slug }}">Read more</a>
        </span>
    </div>
</div>


@endforeach



@endsection

