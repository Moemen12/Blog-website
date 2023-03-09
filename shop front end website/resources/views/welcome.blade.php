
@extends('layout')

@section('title','Home Page')

@section('style')
<link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('content')

<div class='container text-center cover'>
    <img class="main-image" src="https://www.realsimple.com/thmb/_GanevytBTzNH7dl1YyUSbJErGs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/clothing-shopping-guide-2000-6e9b960c8ffb43f99a3a663c68461502.jpg" width="1300px"  alt="" >
    <h1>Welcome To our Store</h1>
   </div>

    <div class="line"></div>


   <div class="container">
    <div class='all-card'>
        <div class="card">
            <h1>Clothes</h1>
            <img src="{{ url('image/clothes.png') }}" width='150'  alt="">
        </div>

        <div class="card">
            <h1>Perfume</h1>
            <img src="{{ url('image/perfume.png') }}" width='150'  alt="">
        </div>

        <div class="card">
            <h1>Jewelry</h1>
            <img src="{{ url('image/jewelry.png') }}" width='150'  alt="">
        </div>
    </div>
   </div>
   <div class="line"></div>


  <div class="container"> 
 <div class="how-are-we">
 <h1 class="text-center">How Are we ?</h1>
 <fieldset>
  <legend>About us</legend>
  <p>
  Saadeh WEAR is a unique lifestyle and concept store. Our uniqueness and colorfulness lies behind our exclusive brands. Our mission is to diversify the selection of fashion items and accessories and offer interesting and sustainable brands in our market. We offer a wide selection of men’s and women’s clothing, footwear and accessories as well as gifts, home decor and other design goods. We care about the environment and expect the same from our brands.
  </p>
 </fieldset>
 </div>
  </div>

<div class="container">
    <footer>
       <p>This website is designed by Our Compagny</p>
       <p>Moemen Saadeh 2023</p> 
    </footer>
</div>

@endsection

