@extends('header')
@section('nav')

<style>
    #aboutimg {
        background-image: url("{{ asset('aboutus-breadcrumbs-img.jpg') }}");
        background-size: cover;
        background-position: center;
        position: relative;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        margin-top: 20px;
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
    }
</style>


<!-- Bootstrap & Font Awesome -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<!-- iziToast CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
<!-- iziToast JS -->
<script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>

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
    <h3>China Rentals</h3>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            <h5 class="mb-3" style="margin-left:20px; font-weight:bold;">PRODUCTS</h5>
            @php
$categories = [
    'Bars' => route('product.bars'),
    'Casino' => route('product.casino'),
    'Catering Equipment & Supplies' => '',
    'Chairs' => '#',
    'China' => '#',
    'Entertainment' => '#',
    'Flatware' => '#',
    'Glassware' => '#',
    'Heaters & Fans' => '#',
    'Lighting' => '#',
    'Outdoor Garden & Equipment' => '#',
    'Punch Fountain & Bowls' => '#',
    'Serving Pieces' => '#',
    'Tables' => '#',
    'Wedding Accessories & Equipment' => '#',
    'Linens' => '#',
    'Tents / Canopies' => '#',
    'Sidewalls' => '#',
];
@endphp

<ul class="list-group">
    @foreach($categories as $name => $url)
        <li class="list-group-item">
            <a href="{{ $url }}" class="text-decoration-none text-dark">{{ $name }}</a>
        </li>
    @endforeach
</ul>

        </div>

        <div class="col-md-9">
            <h4 class="mb-4">China Rentals</h4>
            <div class="row">
                @php
              $products = [
                    ['img' => '49CC.jfif', 'productName' => 'Beer Tap & Stand Combo', 'price' => 250],
                    ['img' => '53CC.jfif',             'productName' => 'Elegant Wooden Bar Setup', 'price' => 300],
                    ['img' => '55CC.jfif',          'productName' => 'Portable Cocktail Station', 'price' => 180],
                    ['img' => '58CC.jfif',             'productName' => 'Outdoor Mini Bar Table', 'price' => 200],
                    ['img' => '69CC.jfif',             'productName' => 'Premium Bar Counter', 'price' => 350],
                    ['img' => '78CC.jfif',             'productName' => 'LED Lighted Bar Unit', 'price' => 400],
                    ['img' => '59CC.jfif',             'productName' => 'Foldable Event Bar', 'price' => 270],
                ];

                @endphp
              @foreach($products as $product)
<div class="col-md-4 col-sm-6 mb-4">
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <div class="card h-100 text-center shadow-sm">
            <img src="{{ asset($product['img']) }}" class="card-img-top" alt="{{ $product['productName'] }}"
                 style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h6 class="card-productName mb-1">{{ $product['productName'] }}</h6>
                <small class="text-muted d-block mb-2">{{ $product['img'] }}</small>
                <p class="text-danger fw-bold">${{ $product['price'] }}.00</p>

                <input type="hidden" name="productName" value="{{ $product['productName'] }}">
                <input type="hidden" name="image" value="{{ $product['img'] }}">
                <input type="hidden" name="price" value="{{ $product['price'] }}">
                <input type="hidden" name="quantity" class="form-quantity" value="1">

                <div class="d-flex justify-content-center align-items-center mb-3">
                    <button type="button" class="btn btn-dark btn-sm px-2" onclick="decrementQuantity(this)">
                        <i class="fas fa-minus"></i>
                    </button>
                    <input type="text" class="form-control text-center mx-2 quantity" value="1" style="width: 50px;" readonly>
                    <button type="button" class="btn btn-dark btn-sm px-2" onclick="incrementQuantity(this)">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>

                <button type="submit" class="btn btn-danger w-100">
                    <i class="fas fa-shopping-cart me-1"></i> Add To Cart
                </button>
            </div>
        </div>
    </form>
</div>
@endforeach

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function incrementQuantity(button) {
        const input = button.parentElement.querySelector('.quantity');
        const formQuantity = button.closest('form').querySelector('.form-quantity');
        const price = parseFloat(button.closest('form').querySelector('input[name="price"]').value);
        const subtotalInput = button.closest('form').querySelector('.form-subtotal');

        input.value = parseInt(input.value) + 1;
        formQuantity.value = input.value;
        subtotalInput.value = (price * parseInt(input.value)).toFixed(2);
    }

    function decrementQuantity(button) {
        const input = button.parentElement.querySelector('.quantity');
        const formQuantity = button.closest('form').querySelector('.form-quantity');
        const price = parseFloat(button.closest('form').querySelector('input[name="price"]').value);
        const subtotalInput = button.closest('form').querySelector('.form-subtotal');

        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
            formQuantity.value = input.value;
            subtotalInput.value = (price * parseInt(input.value)).toFixed(2);
        }
    }
</script>


@endsection
