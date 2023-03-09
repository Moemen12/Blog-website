<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
  <div class="navbar">
    <div class="logo"><h3>Wear Store</h3></div>
    <div class='toggle-key'>
        <span></span>
        <span></span>
        <span></span>
    </div>
   <div class="flex">
   <a href="{{ route('home.index') }}">Home</a>
    <a href="{{ route('shop.index') }}">Shopping</a>
    <a href="{{ route('home.contact') }}">Contact</a>
   </div>
  </div>
  @yield('content')



  <script src="{{ url('js/index.js') }}"></script>
</body>
</html>