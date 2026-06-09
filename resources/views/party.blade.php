@extends('header')

@section('title')
    Party Planning Tips
@endsection
<style>
      #aboutimg {
      background-image: url("{{ asset('counter-bc.jpg') }}");
        background-size: cover;
        background-position: center;
        position: relative;
        height:350px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        /* margin-top: 20px; */
        font-size: 60px;
        /* margin-bottom: 20px; */
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
        font-size: 40px;
        font-weight: bold;
        
    }
  .pagination {
    margin-top: 20px;
}
.pagination:hover{
  color:red;
}

.page-link {
    color: #333;
    font-weight: 500;
}

.page-item.active .page-link {
    background-color: #000;
    color: white;
}
 
ul.tip-list {
    padding-left: 18px;
    list-style: none;
    font-family: Arial, sans-serif;
}

ul.tip-list li {
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
}

ul.tip-list li span {
    color: #999;
    float: right;
}
strong{
    color:#7a7aa7;
    font-size: 15px;
}
p{
    color:#7a7aa7;
}
  </style>
@section('nav')
<div id="aboutimg">
    <h3>PARTY PLAINNING TIPS</h3>
</div>

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <div class="container mt-4" >
    <div class="row">
        <div class="col-md-8"style="margin-top: 40px">
            <div class="row">
                @foreach($paginated as $item)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <a href="{{ route('party.show', $item['slug']) }}">
                                <img src="{{ asset($item['image']) }}"
                                    class="card-img-top"
                                    alt="{{ $item['title'] }}"
                                    style="height: 250px; object-fit: cover;">
                            </a>
                            <div class="card-body" style="padding: 2px;">
                                <h5 class="card-title hover-title">{{ $item['title'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $paginated->links() }}
            </div>
            
        </div>
        <div class="col-md-4 mb-4">
            <div style=" padding: 15px; ">
                <h4 style="margin-left:20px;text-transform: uppercase;color: #000;border-bottom: 1px solid #cdcdcd; font-weight:600; font-size:15px;padding-bottom: 10px;">CATEGORIES</h4>
                <ul class="tip-list">
                <li style="color: #000">Bar Setup Tips <span style=" color:#000">(8)</span></li>
                <li>Canopies Rental Tips <span style=" color:#000 ">(8)</span></li>
                <li>Casino Rental Tips <span  style=" color:#000 ">(3)</span></li>
                <li>Catering Equipment Tips <span style=" color:#000 ">(6)</span></li>
                <li>Chairs Rental Tips <span style=" color:#000 ">(3)</span></li>
                <li>China Rental Tips <span style=" color:#000 ">(8)</span></li>
                <li>Concession Supplies Tips <span style=" color:#000 ">(12)</span></li>
                <li>Safety & Legal Tips <span style=" color:#000 ">(5)</span></li>
                <li>Entertainment Tips <span style=" color:#000 ">(1)</span></li>
                <li>Fountains Rental Tips <span style=" color:#000 ">(7)</span></li>
                <li>Garden Rental Tips <span style=" color:#000 ">(0)</span></li>
                <li>Glassware Rental Tips <span style=" color:#000 ">(7)</span></li>
                <li>Heaters & Coolers Tips <span style=" color:#000 ">(3)</span></li>
                <li>Lighting Rental Tips <span style=" color:#000 ">(6)</span></li>
            </ul>
            </div>
            
        </div>
    </div>
</div>

<style>
    .hover-title {
        transition: color 0.3s ease;
    }
    .card:hover .hover-title {
        color: red;
    }
</style>


@endsection
