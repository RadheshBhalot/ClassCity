<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')-Classe Party Rentals</title>

</head><!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <style>
    
    .cart-dropdown {
      position: relative;
      display: inline-block;
    }

    .cart-icon {
      cursor: pointer;
      color: black;
      display: flex;
      align-items: center;
      font-weight: bold;
    }

    .cart-badge {
      position: absolute;
      top: -8px;
      right: -8px;
      background: red;
      color: white;
      font-size: 12px;
      border-radius: 50%;
      padding: 1px 6px;
    }

    .dropdown-cart-box {
      position: absolute;
      top: -80%;
      right: 0;
      width: 250px;
      background: white;
      border-radius: 4px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      padding: 15px;
      display: none;
      z-index: 999;
    }

    .cart-dropdown:hover .dropdown-cart-box {
      display: block;
    }

    .cart-total {
      display: flex;
      justify-content: space-between;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .view-cart-btn {
      background-color: #f44336;
      color: white;
      border: none;
      border-radius: 30px;
      padding: 8px 20px;
      font-size: 15px;
      display: block;
      width: 100%;
      text-align: center;
      text-decoration: none;
    }

    .view-cart-btn:hover {
      background-color: #d32f2f;
      color: white;

    }

  </style>
<body>
   {{-- <div id="loader" class="loader-overlay">
        {{-- <img src="{{ asset('loderxTk9ZvMnbIiIew7IpW.webp') }}" class="loader-image" alt="Loading..."> --}}
    {{-- </div> --}} 


<nav id="nav1" style="padding: 12px; background-color:#363f4d;">
  <ul class="header-contact" style="list-style: none; margin-left:14.5%; padding: 0; display: flex; align-items: center; gap: 10px;">
    <li>
      <a href="tel:(909)944-5756" style="font-size: 14px; color: #fff; text-decoration: none;">
        <i class="fa fa-phone" style="font-size: 18px;"></i> (909) 944-5756
      </a>
    </li>
    <li style="color: #fff;width:1px;">|</li>
    <li>
      <a href="mailto:info@classeparty.com" style="font-size: 14px; color: #fff; text-decoration: none;">
        <i class="fa fa-envelope-o" style="font-size:17px;"></i> info@classeparty.com
      </a>
    </li>
  </ul>
</nav>


    <div class="main-header-container">
        <img class="logo" src="{{asset('logoo.png')}}" alt="Logo">

        <div class="search-wrapper">
            <input id="Search" type="search" placeholder="Search Product...">
            <button id="btn">Search</button>
        </div>
<div class="cart-dropdown">
    <div class="cart-icon">
      <img src="{{asset('cart-icon.png')}}" width="40" height="40" alt="Cart Icon">
      <span class="cart-badge">{{$viewcount}}</span>
    </div>   
     <span class="ml-2" style="margin-left: 20px;">₹{{$total}}</span>


    <!-- Hover Dropdown Box -->
    <div class="dropdown-cart-box">
      <div class="cart-total">
        <span >TOTAL</span>
        <span style="color: red">₹{{$total}}</span>
      </div>
      <a href="{{route('shoppingcart.view')}}" class="view-cart-btn" style="text-transform: none;">View Cart</a>
    </div>
  </div>  
    
   </div>


   
    <hr style=" margin-top:10px;">
    <div class="sticky-header">
        
        <nav class=" container responsive-nav">

      <div class="menu-icon" onclick="toggleMenu()">☰</div>
            <header class="gap" id="navbar">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About us</a>
    <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Products</a>
    <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Event Portfolio</a>
    <a href="{{ route('party.index') }}" class="{{ request()->routeIs('party.index') ? 'active' : '' }}">Party Planning Tips</a>
    <a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'active' : '' }}">Service</a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
</header>

        </nav>
        
    </div>

  @yield('nav')

  <footer class="footer-top" style="background-color:#fbfafa;">
  <div class="container">
    <div class="row">
      
      <!-- About Us -->
      <div class="col-md-6 mt-md-0 mt-3">
        <div class="footer-box box-1">
          <h6 class="fb-title">ABOUT US</h6>
          <div class="fb-iner">
            <p>Classe offers you incomparable party equipment rentals at the most competitive prices for various kinds of events like weddings, birthdays, anniversaries, corporate, graduation, company, carnival, and barmitzvah.</p>
          </div>
        </div>
      </div>

      <!-- Contact Info Section -->
      <div class="col-md-4 mb-md-0 mb-3 order-md-last">
        <div class="footer-box box-4">
          <h6 class="fb-title">CONTACT INFO</h6>
          <div class="fb-iner"style="color:#7a7a7a;">
            <ul class="list-unstyled">
              <!-- Address -->
              <li>
                <i class="ion-ios-location-outline" style="color:#eb3e32; font-size:20px; margin-right:5px;"></i>
                <span style="vertical-align: middle;">10280 Indiana Court,<br> Rancho Cucamonga, CA 91730</span>
              </li>

              <!-- Phone Numbers -->
              <li>
                <i class="ion-ios-telephone-outline" style="color:#eb3e32; font-size:20px; margin-right:5px;"></i>
                <a href="tel:+1-800-337-6995" style="color:#7a7a7a;">1-800-337-6995</a>,
                <a href="tel:+909-944-5756" style="color: #7a7a7a">909-944-5756</a>
              </li>

              <!-- Email -->
              <li>
                <i class="ion-ios-email-outline" style="color:#eb3e32; font-size:20px; margin-right:5px;"></i>
                <a href="mailto:info@classeparty.com" style="color: #7a7a7a">info@classeparty.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pages -->
      <div class="col-md-2 mb-md-0 mb-3">
        <div class="footer-box box-2">
          <h6 class="fb-title">PAGES</h6>
          <div class="fb-iner">
            <ul class="footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Party Planning Tips</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div> <!-- End Row -->
  </div> <!-- End Container -->

<!-- Footer Start -->
<footer style="background-color: #363f4d; color: #fff;padding:8px;">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center py-3 flex-wrap">

      <!-- Left Side (Copyright) -->
      <div class="text-start col-md-6 mb- mb-md-0 " style="font-size: 14px;">
        Copyright © 2021. All Rights Reserved.
      </div>

      <!-- Right Side (Social Icons) -->
      <div class="d-flex justify-content-end gap-2 col-md-6" style="gap:10px;">
        <a href="#" class="text-reset"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-reset"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-reset"><i class="fab fa-google"></i></a>
        <a href="#" class="text-reset"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-reset"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="text-reset"><i class="fab fa-github"></i></a>
      </div>

    </div>
  </div>
</footer>
<!-- Footer End -->

</footer>
</body>


   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const links = document.querySelectorAll('header.gap a');
        links.forEach(link => {
            link.addEventListener('click', function() {
                links.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });

        window.addEventListener("load", function() {
            const loader = document.getElementById("loader");
            if (loader) {
                loader.style.opacity = "0";
                setTimeout(() => loader.style.display = "none", 500);
            }
        });

        function toggleMenu() {
            document.getElementById("navbar").classList.toggle("show");
        }
    </script>

</script>