@extends('layout.template') @section('body-content')
<title>Login</title>
<link rel="stylesheet" type="text/css" href="{{ URL('cssfile/login.css')}}" />

<!----------------Login------------------>
<div class="login-box">
    <h2>Login</h2>
    @if(Session::has('success'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <form method="post" action="{{ url('user-login') }}">

        @csrf
        <div class="user-box">
            <input type="text" name="name" required />
            <label class="label">Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required />
            <label class="label">Password</label>
        </div>
        <div class="user-box2">
            <input type="checkbox" required="required" />
            <label class="label">Remember Me</label>
            <label><a href="#">Forget Password</a></label>
        </div>
        <input type="submit" name="submit" value="Login" class="a">
        <p>Don't have an account?<a href="{{ URL('signup')}}">Register</a></p>
    </form>
</div>
@endsection