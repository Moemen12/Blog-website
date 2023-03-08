

@extends('layouts.app')

@section('style','css/index.css')
@section('content')

<form method="POST" action="{{ route('register') }}">
@csrf
  <div>
    <h5>Register</h5>
  </div>


  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    @error('name')
    <div class="not-valid">{{$message}}</div>
    @enderror
  </div>


  <div>
    <label for="email">E-mail Address:</label>
    <input type="text" name="email" id="email" required>
    @error('email')
    <div class="not-valid">{{$message}}</div>
    @enderror
  </div>

  
  <div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    @error('password')
    <div class="not-valid">{{$message}}</div>
    @enderror
  </div>


  
  <div>
    <label for="password_confirmation">Password Confirmation:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required>
    @error('password_confirmation')
    <div class="not-valid">{{$message}}</div>
    @enderror
  </div>



   <div>
        <input class="reg-submit" type="submit" value="Register">
  </div>

</form>




    
@endsection



