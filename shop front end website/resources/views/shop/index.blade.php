@extends('layout')

@section('title','Shopping Page')

@section('style')
<link rel="stylesheet" href="{{ url('css/shopping.css') }}">
@endsection

@section('content')
<div class="line"></div>

<div class="container">
    @if (count($pieces) > 0)
    <div class="shop-holder">
            @foreach ($pieces as $piece) 
          <a href="{{ route('shop.show',['shop' => $piece['id']]) }}">
          <div class="shop-card">
              <h1>{{ $piece['name']}}</h1>
                <img src=" {{ $piece['source'] }}" alt="">
          </div>
          </a>
          
         @endforeach
         </div>
         @else
         <p class="warning">Oops There is not any item to show !</p>
         @endif
           

</div>



@endsection