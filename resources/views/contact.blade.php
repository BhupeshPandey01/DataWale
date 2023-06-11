@extends('layout.template') @section('body-content')
<title>Contact Me</title>
<link rel="stylesheet" href="{{ asset('cssfile/contact.css')}}" />
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- Contact Section -->
<div class="container">
    <div class="content">
        <div class="left-side">
            <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">Lohatiyasaal Talla, Katghariya</div>
                <div class="text-two">Haldwani, 263139</div>
            </div>
            <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one">+917300755205</div>
                <div class="text-two">+917300755205</div>
            </div>
            <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">Bhu01pan@gmail.com</div>
                <div class="text-two">Bhupeashpandey01@gmail.com</div>
            </div>
        </div>
        <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>
                If you have any work from me or any types of quries related to
                my Webstite, you can send me message from here. It's my pleasure
                to help you.
            </p>
            <form action="#">
                <div class="input-box">
                    <input type="text" placeholder="Enter your name" />
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Enter your email" />
                </div>
                <div class="input-box message-box"></div>
                <div class="button">
                    <input type="button" value="Send Now" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
