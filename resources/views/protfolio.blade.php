@extends('header')
@section('title')
Event Rentals
@endsection

@section('nav')

  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
  <style>
    .portfolio-item {
      display: none;
    }

    .portfolio-item img {
      width: 100%;
      height: 250px;
      object-fit: cover;
            color: #000;
                font-weight: bold

      border-radius: 10px;
            /* background-color:#f0f0f0; */
      /* box-shadow: 0 0 10px rgba(0,0,0,0.1); */
    }

    .btn.active {
      background-color:#f0f0f0;
      color: #000;
      font-weight: bold;
      box-shadow: rgb(33, 150, 243) 0px 0px 0px 0.2rem;
    }

    .loader {
      display: none;
    }
    .btn-outline{
      color:#000;
    } 
  </style>
</head>
<body>
<br>
  <div class="container text-center my-5">
    <h2><strong>EVENT PORTFOLIO</strong></h2>
    <hr style="width: 100px; border: 2px solid red; margin: auto;">

    <div class="btn-group mt-4" id="filterButtons">
      <button class="btn btn-outline active" data-filter="all" >All</button>
      <button class="btn btn-outline" data-filter="graduation">Graduation</button>
      <button class="btn btn-outline" data-filter="carnivals">Carnivals</button>
      <button class="btn btn-outline" data-filter="wedding">Wedding</button>
      <button class="btn btn-outline" data-filter="birthday">Birthday</button>
      <button class="btn btn-outline" data-filter="rental">Rental Items</button>
    </div>

    <!-- Loader -->
    <div class="loader my-4">
      <div class="spinner-border text-danger" role="status">
        {{-- <span class="visually-hidden">Loading...</span> --}}
      </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="row mt-4" id="portfolioItems">
      <div class="col-md-4 portfolio-item graduation">
        <img src="{{asset('15e.jfif')}}" style="padding: 10px;"/>
      </div>
      <div class="col-md-4 portfolio-item wedding">
        <img src="{{asset('11e.jfif')}}"style="padding: 10px;" />
      </div>
      <div class="col-md-4 portfolio-item rental">
        <img src="{{asset('22e.jfif')}}"style="padding: 10px;" />
      </div>    
      <div class="col-md-4 portfolio-item carnivals">
        <img src="{{asset('29e.jfif')}}" style="padding: 10px;"/>
      </div>
      <div class="col-md-4 portfolio-item birthday">
        <img src="{{asset('30e.jfif')}}"style="padding: 10px;"/>
      </div>
      <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('14e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('33e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('13e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('10e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('11e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('17e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('15e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('33e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('33e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('31e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('33e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('30as.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('24as.jpg')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('33e.jfif')}}" style="padding: 10px;"/>

      </div>   <div class="col-md-4 portfolio-item wedding">
          <img src="{{asset('31e.jfif')}}" style="padding: 10px;"/>

      </div>
    </div>
  </div>

  <script>
    const buttons = document.querySelectorAll("#filterButtons .btn");
    const items = document.querySelectorAll(".portfolio-item");
    const loader = document.querySelector(".loader");
    const grid = document.getElementById("portfolioItems");

    function filterItems(filter) {
      loader.style.display = "block";
      grid.style.display = "none";

      setTimeout(() => {
        items.forEach(item => {
          if (filter === "all" || item.classList.contains(filter)) {
            item.style.display = "block";
          } else {
            item.style.display = "none";
          }
        });

        loader.style.display = "none";
        grid.style.display = "flex";
        grid.style.flexWrap = "wrap";
      }, 800);
    }

    buttons.forEach(btn => {
      btn.addEventListener("click", () => {
        buttons.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        const filter = btn.getAttribute("data-filter");
        filterItems(filter);
      });
    });

    // Show all by default
    filterItems("all");
  </script>

</body>
</html>

@endsection


