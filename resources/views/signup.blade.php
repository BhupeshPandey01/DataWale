@extends('layout.template') @section('body-content')
<title>Sign-up</title>
<link rel="stylesheet" type="text/css" href="{{ URL('cssfile/signup.css') }}" />

<!------------------Sign-Up  ------------------>

<?php 

?>

<div class="signup-box">
    <h2>Signup</h2>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
    <form method="post" action="{{ url('save-signup') }}">
        @csrf
        <div class="user-box">
            <input type="text" name="name" required/>
            <label class="label">Create Username</label>
        </div>
        <div class="user-box">
            <input type="text" name="email" required/>
            <label class="label">Enter Email</label>
        </div>
        <div class="user-box">
            <input type="text" name="mobile" required/>
            <label class="label">Enter Mobile</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required/>
            <label class="label">Create Password</label>
        </div>
        <div class="user-box">
            <input type="password" name="confirm-password" required/>
            <label class="label">Confirm Password</label>
        </div>
        <input type="submit" name="submit" value="Submit" class="a">
    </form>
</div>
<!--partial-->
@endsection   