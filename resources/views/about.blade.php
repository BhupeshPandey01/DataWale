@extends('layout.template') @section('body-content')
<title>About Me</title>
<link rel="stylesheet" href="{{ asset('cssfile/about.css')}}" />
<!-- about section -->
<section class="about-us">
    <div class="about">
      <!--<img src="girl.png" class="pic">-->
      <div class="text">
        <h2>About Me</h2>
        <h5>Front-end Developer <span>Designer</span> & Back-end Developer</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque amet corporis! Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque voluptate consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>
        <div class="data">
        <a href="#" class="hire">Hire Me</a>
        </div>
      </div>
    </div>
  </section>
@endsection
