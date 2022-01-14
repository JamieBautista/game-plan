@extends('layouts.app')

@section('content')
<div id="loginPage">
    <div class="container user_ask_add">
        <h2>SIGN UP</h2>
        <form action = "{{ route('signupRequest') }}" method = "post" id="signupForm" data-parsley-validate>
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name = "name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name = "email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" class="form-control" name= "password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label>Re-type Password</label>
                <input type="password" id="retypePassword" class="form-control" name= "password_type" placeholder="Re-type Password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-md btn-block" align= "center">Sign Up</button>

            <div class="links flex-center">
                <a href="{{ route('loginPage') }}">Log In</a>
            </div>

        </form>
    </div>
</div>
@endsection
@section('added-scripts')
<script>
  $('#signupForm').on('submit', function(e) {
    if($('#password').val() != $('#retypePassword').val()){
        e.preventDefault();
        alert("Passwords do not match.");
        return false;
    }
    else{
        return true;
    }
    
  });
</script>
@endsection