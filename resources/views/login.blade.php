@extends('layouts.app')

@section('content')
<div id="loginPage">
    <div class="container user_ask_add">
        <h2>LOGIN</h2>
        <form action = "{{ route('loginPage') }}" method = "post" id="loginForm" data-parsley-validate>
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name = "email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name= "password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-md btn-block" align= "center">Log In</button>

            <div class="links">
                <a href="{{ route('signupPage') }}">Sign Up</a>
                <a href="{{ route('signupPage') }}">Forgot Password</a>
            </div>

        </form>
    </div>
</div>
@endsection
@section('added-scripts')
<script>
  $('#loginForm').parsley().on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
</script>
@endsection