<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')Classe Party Rentals| Supplies</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
   
</head>
<body>
    <div id="loader" class="loader-overlay">
        <img src="{{ asset('loderxTk9ZvMnbIiIew7IpW.webp') }}" class="loader-image" alt="Loading...">
    </div>

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
      <img src="{{asset('cart-icon.png')}}" width="30" height="30" alt="Cart Icon">
      <span class="cart-badge">{{$viewcount}}</span>
    </div>   
     <span style="margin-left: 40px; mrgin-top:-10%;">₹{{$total}}</span>


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
                <a href="{{ route('home') }}" class="active">Home</a>
                <a href="{{ route('about') }}">About us</a>
                <a href="{{ route('products') }}">Products</a>
                <a href="{{ route('portfolio') }}">Event Portfolio</a>
                <a href="{{ route('party.index') }}">Party Planning Tips</a>
                <a href="{{ route('service') }}">Service</a>
                <a href="{{ route('contact') }}">Contact</a>
            </header>
        </nav>
    </div>

    <br>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" >
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="{{asset('slider-img-1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{asset('slider-img-2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block " src="{{asset('slider-img-3.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span> 
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <h2 id="about-title">Welcome to Classe Party Rentals</h2>
          <hr style="width: 90px; border: 1px solid red; margin-top:-20px;">
        <div class="row" style="margin-top:30px;">
            <div class="col-md-6 mb-4">
                <img class="img-fluid" src="{{asset('homepage_thumb.jpg')}}" alt="Homepage Thumbnail">
            </div>
            <div class="col-md-6" >
                <p style="">Situated in Rancho Cucamonga, the logistics capital of Southern California, Classe Party Rentals is a premier rental service company serving the neighborhood of Fontana, Upland, Ontario, Claremont, Corona, Pomona, La Verne, Chino, Chino Hills, and Diamond Bar. Customer service is our top priority and we extend personalized service to every client.</p>
                <p>Classe party rentals offer end-to-end solutions for all types and sizes of parties. Whether it is a simple or a lavish party, we strive to deliver the same quality that we promise. There are many advantages to choosing Classe rentals. Our well-trained staff is committed to providing quality service on time, every time.</p>
                <a href="{{route('about')}}"><button id="Aboutbtn">Read More</button></a>
            </div>
        </div>  
    </div>

    </div>


    <h2 class="title">PRODUCTS</h2>

    <div class="carousel-container">
        <div class="carousel" id="productCarousel">
            <?php
                $json = file_get_contents('../products.json');
                $products = json_decode($json, true);

                foreach ($products as $product) {
                    echo '<div class="product-card">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<p>' . $product['name'] . '</p>';
                    echo '</div>';
                }
            ?>
        </div>

        <div class="dots" id="carouselDots"></div>
    </div>

<script>
const carousel = document.getElementById('productCarousel');
const dotsContainer = document.getElementById('carouselDots');

const visibleItems = 4;
const totalItems = carousel.querySelectorAll('.product-card').length;
const totalSlides = Math.ceil(totalItems / visibleItems);

let currentIndex = 0;

function updateCarousel() {
    const offset = -currentIndex * 100;
    carousel.style.transform = `translateX(${offset}%)`;

    Array.from(dotsContainer.children).forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
    });
}

function createDots() {
    dotsContainer.innerHTML = ''; 
    for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('span');
        dot.className = 'dot';
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            currentIndex = i;
            updateCarousel();
        });
        dotsContainer.appendChild(dot);
    }
}

createDots();
updateCarousel();
</script>

    <div class="container">
        <h2 id="party">PARTY PLANNING TIPS</h2>
         <hr style="width: 90px; border: 1px solid red; margin-top:-10px;">
        <div class="row justify-content-center">

            <div class="col-md-4 mb-4">
                <div class="custom-card card h-100 shadow-sm">
                    <img src="{{ asset('1 - Copy - Copy.jpg') }}" class="custom-card-img card-img-top" alt="Party Bar Rentals Tips">
                    <div class="custom-card-body card-body">
                        <h5  id="phover"class="custom-card-title"> PARTY BAR RENTALS TIPS</h5>
                        <p id="ptrip" class="custom-card-text">Tips on Hiring Party Bar Setup for Weddings and Anniversaries.</p>
                        <a href="{{route('party.index')}}"id="tripread">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="custom-card card h-100 shadow-sm">
                    <img src="{{ asset('2 - Copy.jpg') }}" class="custom-card-img card-img-top" alt="Tent and Canopy Rental Guide">
                    <div class="custom-card-body card-body">
                        <h5 id="phover" class="custom-card-title">TEST AND CONOPY RENTAL GUIDE </h5>
                        <p id="ptrip" class="custom-card-text">Renting Wedding Reception Canopy Tent Guide.</p>
                        <a href="{{route('party.index')}}" id="tripread">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="custom-card card h-100 shadow-sm">
                    <img src="{{ asset('3 - Copy.jpg') }}" class="custom-card-img card-img-top" alt="Casino Party Rentals Guide">
                    <div class="custom-card-body card-body">
                        <h5 id="phover" class="custom-card-title" >CASINO PARTY RENTALS GUIDE</h5>
                        <p  id="ptrip" class="custom-card-text">Casino Night Party Rental Guide</p>
                        <a href="{{route('party.index')}}" id="tripread">READ MORE</a>
                    </div>
                </div>  
            </div>
        </div>
    </div>

<!-- Footer Start -->
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

    </div> 
    </div> 

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
</html>

    <div>
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
</body>
</html>








