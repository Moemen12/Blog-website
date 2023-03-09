@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <h5>Login</h5>
    </div>

  
  <div>
    <label for="email">E-mail Address:</label>
    <input type="text" name="email" id="email">
  </div>

  
  <div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    @error('email')
    <div class="not-valid">{{$message}}</div>
    @enderror
  </div>


   <div>
        <input class="reg-submit" type="submit" value="Login" required>
  </div>

</form>




    
@endsection