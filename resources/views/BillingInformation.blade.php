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
        
    }

    #btnQ {
        background-color: #363f4d;
        border-radius: 50px;
        padding: 12px 20px;
        color: #fff;
        transition: all 0.3s ease-in-out;
        border: 2px solid #363f4d;
        text-transform: capitalize;
    }
    .red{
        color: #eb3e32;
    }
</style>

<div id="aboutimg">
    <h3>CHECKOUT</h3>
</div>

<div>
<p style="margin-top: 60px; margin-left:15%; background-color: #fff3cd; color:#856404; padding:14px; width:50% ">For delivery and pick up the rental order total should be a minimum of $150.</p>
    <div class="container mt-3" style="; border-radius: 8px;">
        <h3 class="font-weight-bold mb-4 mt-3">Billing Information</h3>

        <form action="{{ route('bill') }}" method="POST">
            @csrf
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-4 mb-4">
                    <label>First Name<span class="red">*</span></label>
                    <input type="text" class="form-control mb-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name">
                    <h6 class="text-danger">@error('name'){{ $message }}@enderror</h6><br>

                    <label>Phone Number (Home)<span class="red">*</span></label>
                    <input type="number" class="form-control mb-2 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number">
                    <h6 class="text-danger">@error('phone'){{ $message }}@enderror</h6><br>

                    <label>Email<span class="red">*</span></label>
                    <input type="email" class="form-control mb-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                    <h6 class="text-danger">@error('email'){{ $message }}@enderror</h6><br>

                    <label>City<span class="red">*</span></label>
                    <input type="text" class="form-control mb-2 @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" placeholder="Enter city">
                    <h6 class="text-danger">@error('city'){{ $message }}@enderror</h6><br>

                    <label>Zipcode<span class="red">*</span></label>
                    <input type="text" class="form-control mb-2 @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" placeholder="Enter zipcode">
                    <h6 class="text-danger">@error('zipcode'){{ $message }}@enderror</h6><br>

                    <h4 class="mt-4 font-weight-bold">Event Details</h4>

                    <label>Event Date<span class="red">*</span></label>
                    <input type="date" name="date" value="{{ old('date') }}" class="form-control mb-2 @error('date') is-invalid @enderror">
                    <h6 class="text-danger">@error('date'){{ $message }}@enderror</h6><br>

                    <label>How did you find us?</label>
                    <div class="mb-2 @error('source') is-invalid @enderror">
                        <div><input type="radio" name="source" value="Google Search"> Google Search</div>
                        <div><input type="radio" name="source" value="Yahoo Search"> Yahoo Search</div>
                        <div><input type="radio" name="source" value="Yellow Pages"> Yellow Pages (Hardcopy)</div>
                        <div><input type="radio" name="source" value="Returning Customer"> Returning Customer</div>
                        <div>Other: <input type="text" name="source_other" class="form-control mt-1"></div>
                        <h6 class="text-danger">@error('source'){{ $message }}@enderror</h6>
                    </div>

                    <label>Special Request</label>
                    <textarea class="form-control @error('Srequest') is-invalid @enderror" rows="4" name="Srequest" placeholder="Write your special request">{{ old('Srequest') }}</textarea>
                    <h6 class="text-danger">@error('Srequest'){{ $message }}@enderror</h6>

                    <p style="margin-top: 20px;">
                        <span style="color: red; font-weight: bold;margin:0px;">**Note:</span>
                        Detailed information provided by you will help us provide an exact estimate/quotation for your event.
                    </p>
                </div>

                <!-- Middle Column -->
                <div class="col-md-4 mb-4">
                    <label>Last Name<span class="red">*</span></label>
                    <input type="text" class="form-control mb-2 @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" placeholder="Enter your last name">
                    <h6 class="text-danger">@error('lastName'){{ $message }}@enderror</h6><br>

                    <label>Phone Number (Mobile/Work)<span class="red">*</span></label>
                    <input type="number" class="form-control mb-2 @error('phoneWork') is-invalid @enderror" name="phoneWork" value="{{ old('phoneWork') }}" placeholder="Enter your phone number">
                    <h6 class="text-danger">@error('phoneWork'){{ $message }}@enderror</h6><br>

                    <label>Address<span class="red">*</span></label>
                    <input type="text" class="form-control mb-2 @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Enter your address">
                    <h6 class="text-danger">@error('address'){{ $message }}@enderror</h6><br>

                    <label>Select State<span class="red">*</span></label>
                    <select name="state" class="form-control mb-2 @error('state') is-invalid @enderror">
                        <option value="">-- Select State --</option>
                        @foreach(['Andhra Pradesh','Bihar','Delhi','Goa','Gujarat','Haryana', 'Madhya Pardesh','Karnataka','Kerala','Maharashtra','Punjab','Rajasthan','Tamil Nadu','Uttar Pradesh','West Bengal'] as $state)
                            <option value="{{ $state }}" {{ old('state') == $state ? 'selected' : '' }}>{{ $state }}</option>
                        @endforeach
                    </select>
                    <h6 class="text-danger">@error('state'){{ $message }}@enderror</h6><br><br><br><br><br><br><br><br>

                    <label>Event Time<span class="red">*</span></label>
                    <input type="time" name="time" value="{{ old('time') }}" class="form-control mb-2 @error('time') is-invalid @enderror">
                    <h6 class="text-danger">@error('time'){{ $message }}@enderror</h6>
                </div>

        <div class="col-md-4 mb-4 mt-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white text-center" style="text-transform: uppercase; letter-spacing: 1px;">
                    Cart Totals
                </div>
                        <div class="card-body ">
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
            </div> 

            <div class="text-center mt-4 mb-3">
                <button type="submit" id="btnQ">Send Quote</button>
            </div>
        </form>
    </div>
</div>

@endsection
