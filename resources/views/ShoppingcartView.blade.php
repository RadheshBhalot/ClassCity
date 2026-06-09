@extends('header')
@section('nav')

<style>
       #aboutimg {
        background-image: url("{{ asset('cart-breadcrumbs-img.jpg') }}");
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

    #about {
        font-weight: bold;
        margin-bottom: 40px;
        margin-left:160px;
    }
    .table-container {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    table {
        border-collapse: collapse;
        width: 90%;
        max-width: 1000px;
        /* background-color: #fff; */
        /* box-shadow: 0 0 10px rgba(0,0,0,0.1); */
    }

    th, td {
        border: 1px solid #7a7a7a;
        padding: 12px 15px;
        text-align: center;
    }

    th {
        /* background-color: #f8f9fa; */
        /* font-weight: bold; */
        color: #7a7a7a;
    }

    img {
        object-fit: cover;
        border-radius: 5px;
    }

    a {
        text-decoration: none;
        color: red;
        font-weight: bold;
    }
  .btn-custom {
        padding: 12px 25px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        color: white;
        width: 60%;
        margin-left:55%;
    }

    .btn-black {
        background-color: black;
        margin-right: 10%;
    }

    .btn-black:hover {
        background-color: #333;
        margin-right: 5%;
    }

    .btn-red {
        background-color: red;
    }

    .btn-red:hover {
        background-color: darkred;
    }

    .button-row {
        margin-top: 40px;
    }

</style>
<!-- iziToast CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">

<!-- iziToast JS -->
<script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>

<div id="aboutimg">
    <h3>YOUR SHOPPING CART</h3>
</div>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
        </thead>    
        <tbody>
            @foreach ($view as $viewDetails)
            <tr>
                <td><img src="{{ asset($viewDetails->image) }}" class="img-fluid" width="100" height="100" alt="Product Image"></td>
                <td>{{ $viewDetails->productName }}</td>
                <td style="color:red;">{{ $viewDetails->price }}</td>
                <td>{{ $viewDetails->quantity }}</td>
                <td style="color: red;">{{ $viewDetails->Subtotal }}</td>
                <td>
  <a href="javascript:void(0);"
   class="delete-btn"
   data-id="{{ $viewDetails->id }}"
   data-url="{{ route('delete', ['id' => $viewDetails->id]) }}">
   <i class="ion-close-circled" style="font-size: 25px;"></i>
</a>

</td>
            </tr>
            @endforeach
        </tbody>


    </table>
</form>

</div>

<div>

</div>
<div class="container mt-5">
    <h3 class="text-center font-weight-bold mb-4" style="text-transform: uppercase; letter-spacing: 1px;">Cart Totals</h3>
    
    <div class="row justify-content-center">
        <div class="col-md-5">
            <table class="table table-bordered shadow-sm">
                <tbody>
    <tr>
        <th style="width: 50%; background-color: #f8f9fa;">SubTotal</th>
        <td><strong>{{ $total }}</strong></td>
    </tr>
    <tr>
        <th style="width: 50%; background-color: #f8f9fa;">Service Charge (9%):</th>
        <td><strong>{{ $total * 0.09 }}</strong></td>
    </tr>
    <tr>
        <th style="width: 50%; background-color: #f8f9fa;">Shopping Basket total:</th>
        <td><strong style="color: red;">{{ $total + ($total * 0.09) }}</strong></td>
    </tr>
</tbody>
            </table>
        </div>
    </div>
</div>
<div class="container" style="background-color: #fff3cd; color:#856404;padding:15px; text-decoration:none; height:100px;">
    <ul style="list-style-type: none; padding-left: 5px;">
        <li>- For delivery and pick up the rental order total should a minimum of $150.</li>
        <li>- Delivery prices may change depending on the busy season..</li>
        <li>- Will-call orders $20 minimum..</li>
    </ul>
</div>

<div class="container">
    <div class="row button-row">
        <div class="col-md-5">
         <a href="{{route('product.bars')}}">
            <button class="btn-custom btn-black">&lt; CONTINUE SHOPPING</button>
         </a>
        </div>
        <div class="col-md-4">
            <a href="{{route('billing')}}">
        <button class="btn-custom btn-red">Proceed To Quote</button>
        </a>
        </div>
    </div>
</div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                const deleteUrl = this.getAttribute('data-url');

                iziToast.question({
                    timeout: false,
                    close: false,
                    overlay: true,
                    displayMode: 'once',
                    title: 'Delete Confirmation',
                    message: 'Are you sure you want to delete this item?',
                    position: 'center',
                    buttons: [
                        ['<button><b>YES</b></button>', function (instance, toast) {
                            window.location.href = deleteUrl;
                            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        }, true],
                        ['<button>Cancel</button>', function (instance, toast) {
                            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        }]
                    ]
                });
            });
        });
    });
</script>


@endsection
