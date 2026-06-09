@extends('header')
@section('title')
    Contact-Us
@endsection
@section('nav')

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
        top: 0; left: 0; bottom: 0; right: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    #aboutimg h3 {
        position: relative;
        z-index: 2;
        font-size: 2rem;
        font-weight: bold;
        margin: 0;
        font-size: 35px;
    }

    .contact-info i {
        color: #212529;
        width: 25px;
        display: inline-block;
        text-align: center;
    }

    .contact-info p {
        margin-bottom: 12px;
        /* display: flex; */
        align-items: center;
    }

    .form-label {
        font-weight: bold;
    }
.red{
    color: red;
}
.ico{
  
}
label{
    text-transform: uppercase;
    font-size: 15px;
    color: #000;
}
</style>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

  
<div id="aboutimg">
    <h3>CONTACT</h3>
</div>

<div class="container my-5">
    <div class="row g-5 align-items-start">

        {{-- Contact Form --}}
        <div class="col-md-8">
            <h2 class="mb-4 mt-3" style="text-transform: uppercase; font-size:25px; relative; padding-bottom: 10px; margin-bottom: 30px;font-weight: bold; text-transform: uppercase;">Leave a Message</h2>
                 <hr style="width: 90px; border: 1px solid red; margin-top:-30px; margin-left:5px;">
            <form action="{{route('contact.store')}}" method="POST">
              @csrf
                <div class="row g-3 mt-4">
                    <div class="col-md-6 ">
                        <label for="your-name">Your Name<span class="red">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="your-name" name="name" value="{{old('name')}}" placeholder="Enter Your Name">
                     <h6 class="text-danger">@error('name'){{$message}}@enderror</h6><br>
                    </div>
                    <div class="col-md-6">
                        <label for="your-surname">Your Surname<span class="red">*</span></label>
                        <input type="text" class="form-control @error('surname') is-invalid @enderror" id="your-surname" name="surname" value="{{old('surname')}}" placeholder="Enter Your LastName" >
                            <h6 class="text-danger">@error('surname'){{$message}}@enderror</h6><br>

                    </div>
                    <div class="col-md-6">
                        <label for="your-email"">Your Email<span class="red">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror " id="your-email" name="email" value="{{old('email')}}" placeholder="Enter Your Email" >
                               <h6 class="text-danger">@error('email'){{$message}}@enderror</h6><br>
                    </div>
                    <div class="col-md-6">
                        <label for="your-subject">Subject<span class="red">*</span></label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" id="your-subject" name="subject" value="{{old('subject')}}" placeholder="Enter Your Subject">
                         <h6 class="text-danger">@error('subject'){{$message}}@enderror</h6><br>
                    </div>
                    <div class="col-12">
                        <label for="your-message" >Message<span class="red">*</span></label>
                        <textarea class="form-control @error('message') is-invalid @enderror"  id="your-message" name="message"  value={{old('message')}} rows="5" placeholder="Your message" ></textarea>
                            <h6 class="text-danger">@error('message'){{$message}}@enderror</h6>

                    </div>
                    <div class="col-12 text-end">
                         <br>
                        <button type="submit" class="btn btn-dark fw-bold px-4;"style="background-color:#eb3e32; padding:10px;width:20%;border:none;">Send</button>
                    </div>
                </div>
            </form>
        </div>

        {{-- Contact Info --}}
        <div class="col-md-4 contact-info">
            <h2 class="mb-4"style="text-transform:upperCase;    position: relative;padding-bottom: 10px;margin-bottom: 30px; font-weight: bold; font-size:25px;text-transform: uppercase;">Let’s Be in Touch</h2>
                             <hr style="width: 90px; border: 1px solid red; margin-top:-25px; margin-left:5px;">
            <p>We want to hear from you. Please call, write, or visit us to discuss your upcoming party or event.</p>

            {{-- <h5 class="fw-bold mt-4">Contact</h5> --}}
            <p><span  _ngcontent-serverapp-c2="" class="fa fa-map-marker " style="  width: 49px;
    height: 49px;
    background-color: #363f4d;
    border-radius: 100%;
    text-align: center;
    line-height: 49px;
    margin-right: 15px;
    color: #fff;
    font-size: 24px;"></span> 10280 Indiana Court,  CA 91730</p>
            <p><i class="fas fa-envelope"style="  width: 49px;
    height: 49px;
    background-color: #363f4d;
    border-radius: 100%;
    text-align: center;
    line-height: 49px;
    margin-right: 15px;
    color: #fff;
    font-size: 24px;"></i> info@example.com</p>
            <p><i class="fas fa-phone"style="  width: 49px;
    height: 49px;
    background-color: #363f4d;
    border-radius: 100%;
    text-align: center;
    line-height: 49px;
    margin-right: 15px;
    color: #fff;
    font-size: 24px;"></i> +1-800-337-6995, 909-944-5756</p>
           

            <h5 class="fw-bold mt-4" style="text-transform:upperCase;    position: relative;
    padding-bottom: 10px;
    margin-bottom: 30px;
    font-weight: bold;
    font-size:25px;
    text-transform: uppercase;">Working Hours</h5>
                                 <hr style="width: 90px; border: 1px solid red; margin-top:-35px; margin-left:5px;">

            <p><i class="fas fa-clock"></i> Mon - Fri: 9:00 AM - 5:00 PM</p>
            <p><i class="fas fa-clock"></i> Saturday: 9:00 AM - 3:00 PM</p>
            <p><i class="fas fa-times-circle"></i> Sunday: Closed</p>
        </div>
    </div>
</div>

<div>
</div>
<div class="container-fluid px-0 my-5">
  <h4 class="text-center fw-bold mb-4">Top Rated Hotels in India</h4>
  <div style="width: 100%; height: 500px;">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609918854!2d72.74109995!3d19.0821978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63c121d7ae9%3A0x5b4a9a3ea3cb3ec3!2s5-star%20hotel!5e0!3m2!1sen!2sin!4v1720562075422!5m2!1sen!2sin" 
      width="100%" 
      height="100%" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>



@endsection
