<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $part['name']}}-{{ $part['id'] }}</title>
    <link rel="stylesheet" href="{{ url('css/item.css') }}">
</head>
<body>


<div class="container">
    <div class="shop-card">
        <img src="{{ $part['source'] }}" alt="">
        <div class='article'>
            <p class='text-center'>Seri Number : {{ rand(0,999999999) }}</p>
            <h2 class='text-center'>{{ $part['name'] }}</h2>
            <h3 class='text-center'>{{rand(50,300)}}$</h3>
            <h1>BUY NOW</h1>
        </div>
    </div>
</div>


</body>
</html>




