<head>
  <link rel="stylesheet" href="./ecommerce.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ url('cssfile/welcome.css') }}">
</head>

<body>
  <header>
    <div class="logo"><a href="#">DataWale</a></div>
    <div class="menu">
      <ul>
        <li><a href="{{ URL('/')}}" class="under">HOME</a></li>
        <li><a href="{{ URL('about')}}" class="under">ABOUT ME</a></li>
        <li><a href="{{ URL('contact')}}" class="under">CONTACT ME</a></li>
        <li><a href="{{ URL('login')}}" class="under">LOGIN</a></li>
      </ul>
    </div>
    <div class="heading">
      <ul>
      <li><a href="{{ URL('/')}}" class="under">HOME</a></li>
        <li><a href="{{ URL('about')}}" class="under">ABOUT ME</a></li>
        <li><a href="{{ URL('contact')}}" class="under">CONTACT ME</a></li>
        <li><a href="{{ URL('login')}}" class="under">LOGIN</a></li>
      </ul>
    </div>
  </header>
 @yield('body-content')
  <footer>
    <div class="footer0">
      <h1>DataWale</h1>
    </div>
    <div class="footer1 ">
      Connect with us at<div class="social-media">
        <a href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
        <a href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
        <a href="#">
          <ion-icon name="logo-youtube"></ion-icon>
        </a>
        <a href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
        <a href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </div>
    </div>
    
    <div class="footer2">
      <div class="product">
        <div class="heading">Products</div>
        <div class="div">Sell your Products</div>
        <div class="div">Advertise</div>
        <div class="div">Pricing</div>
        <div class="div">Product Buisness</div>

      </div>
      <div class="services">
        <div class="heading">Services</div>
        <div class="div">Data Entry</div>
        <div class="div">Source Code</div>
        <div class="div">Animations</div>
        <div class="div">Others</div>
      </div>
      <div class="Company">
        <div class="heading">Company</div>
        <div class="div">Complaint</div>
        <div class="div">Careers</div>
        <div class="div">Affiliate Marketing</div>
        <div class="div">Support</div>
      </div>
      <div class="Get Help">
        <div class="heading">Get Help</div>
        <div class="div">Help Center</div>
        <div class="div">Privacy Policy</div>
        <div class="div">Terms</div>
        <div class="div">Login</div>
      </div>
    </div>
    <div class="footer3">Copyright © <h4>DataWale</h4> April-2023</div>
  </footer>
  
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>