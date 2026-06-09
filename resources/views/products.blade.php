@extends('header')
@section('title')
  Best Party and Event Rentals
@endsection
@section('nav')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- iziToast CSS -->
{{-- iziToast JS must be loaded --}}
<script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">

</head>


<style>
#aboutimg {
        background-image: url("{{ asset('aboutus-breadcrumbs-img.jpg') }}");
        background-size: cover;
        background-position: center;
        position: relative;
        height: 350px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        /* margin-top: 20px; */
    }

    #aboutimg::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    #aboutimg h3 {
        position: relative;
        z-index: 2;
        font-size: 2rem;
        margin: 0;
        font-weight: bold;
        font-size: 35px;
    }

    #about {
        font-weight: bold;
        margin-bottom: 40px;
        margin-left:160px;
    }

    .about-section {
        margin: 40px auto;
    }

    .about-text {
        font-size: 16px;
        line-height: 1.6;
    }

    .about-img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }
    #products{
        margin-left: 35%;
        margin-top: 60px;
        font-weight: bold;
        font-size: 25px;
        text-transform: uppercase;
    }
    #pp{
        /* margin-left:14%;  */
        margin-top: 30px;
        color:#7a7a7a;
    }
  
</style>

<script>
    @if(session('success'))
        iziToast.success({
            title: 'Success',
            message: "{{ session('success') }}",
            position: 'topRight'
        });
    @endif


    @if ($errors->any())
        iziToast.error({
            title: 'Error',
            message: "{{ $errors->first() }}",
            position: 'topRight'
        });
    @endif
</script>

<div id="aboutimg">
    <h3>PRODUCTS</h3><br>
</div>

<div class="container">
    <h2 id="products">Browse Rental Products</h2>
        <hr style="width: 90px; border: 1px solid red; margin-top:-1px;">
    <p id="pp">we have provided our party rentals to a diverse client base. Our events range from weddings, backyard parties, graduations, birthday celebrations, quinceañeras, graduations, and much more.</p>
</div>

<div style="margin-top:20px; max-width:1200px;margin:auto;flex-wrap:wrap;padding:10px;justify-content:space-between;align-items:center;cursor:pointer">
  <div class="row justify-content-center">
   <div class="col-md-4 col-sm-6 col-10 mb-4">
  <a href="{{ route('product.bars') }}" style="text-decoration: none; color: inherit;">
    <div class="card h-100 text-center shadow-sm">
      <img src="{{ asset('1 (1)p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
      <div class="card-body">
        <p class="card-text font-weight-bold">BARS</p>
      </div>
    </div>
  </a>
</div>

    <div class="col-md-4 col-sm-6 col-10 mb-4">
      <a href="{{route('product.casino') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('2.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold">Casino</p>
        </div>
      </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
        <a href="{{route('products.catering-equipment') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('3.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold">Catering Equipment & Supplies</p>
        </div>
      </div>
        </a>
    </div>
</div>
</div>

<div style="max-width: 1200px;margin:auto;flex-wrap:wrap;padding:10px;justify-content:space-between;align-items:center;cursor:pointer">
  <div class="row justify-content-center">
    <div class="col-md-4 col-sm-6 col-10 mb-4">
    <a href="{{route('products.charis') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('4.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold" style="color: #000">Chairs</p>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
     <a href="{{route('products.china') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('5p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">China</p>
        </div>
      </div>
     </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
           <a href="{{route('product.Concessions') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('6p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Concessions & Supplies</p>
        </div>
      </div>
        </a>
    </div>
</div>
</div>
<div style="max-width: 1200px;margin:auto;flex-wrap:wrap;padding:10px;justify-content:space-between;align-items:center;cursor:pointer">
  <div class="row justify-content-center">
    <div class="col-md-4 col-sm-6 col-10 mb-4">
        <a href="{{route('product.Convention') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('7p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Convention Meeting</p>
        </div>
      </div>
        </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
        <a href="{{route('product.Entertainment') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('8p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Entertainment</p>
        </div>
      </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
       <a href="{{route('product.Flatware') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('9p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Flatware</p>
        </div>
      </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
       <a href="{{route('product.Glassware') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('10p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Glassware</p>
        </div>
      </div>
       </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
        <a href="{{route('product.HeartFans') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('11p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Heaters & Fans</p>
        </div>
      </div>
        </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
    <a href="{{route('product.light') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('12p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Lighting</p>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
    <a href="{{route('product.outdoor') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('13p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Outdoor Garden & Equipment</p>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
    <a href="{{route('product.Punch') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('14p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Punch Fountain & Bowls</p>
        </div>
      </div>
     </a>
    </div>
     <div class="col-md-4 col-sm-6 col-10 mb-4">
    <a href="{{route('product.service') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('15p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Serving Pieces</p>
        </div>
      </div>
    </a>
    </div>
     <div class="col-md-4 col-sm-6 col-10 mb-4">
        <a href="{{route('product.tables') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('16p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Tables</p>
        </div>
      </div>
        </a>
    </div>
     <div class="col-md-4 col-sm-6 col-10 mb-4">
        <a href="{{route('product-wedding') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('17p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Wedding Accessories & Equipment</p>
        </div>
      </div>
        </a>
    </div>
     <div class="col-md-4 col-sm-6 col-10 mb-4">
       <a href="{{route('product.lenin') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('18p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Linens</p>
        </div>
      </div>
       </a>
    </div>
    <div class="col-md-4 col-sm-6 col-10 mb-4">
     <a href="{{route('product.Tents') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('19p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Tents / Canopies</p>
        </div>
      </div>
    </a>
    </div>
     <div class="col-md-4 col-sm-6 col-10 mb-4">
       <a href="{{route('product.side-walls') }}" style="text-decoration: none; color: inherit;">
      <div class="card h-100 text-center shadow-sm">
        <img src="{{ asset('20p.jfif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <p class="card-text font-weight-bold"style="color: #000">Sidewalls</p>
        </div>
      </div>
       </a>
    </div>
</div>
</div>


  
</body>
</html>


@endsection