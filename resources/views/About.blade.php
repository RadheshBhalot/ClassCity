@extends('header')

@section('title')
    About/us
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
        margin: 0;
        font-weight: bold;
        
    }

    #about {
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 30px;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 22px;
    margin-left:180px;
    margin-top: 7%;

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
#counterimg {
    background-image: url("{{ asset('counter-bc.jpg') }}");
    background-size: cover;
    background-position: center;
    position: relative;
    height: 250px;
    display: flex;
    align-items: flex-end; /* move content lower */
    justify-content: center;
    color: white;
    text-align: center;
    padding-bottom: 60px; 
}

#counterimg::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1;
}

.counter-box {
    position: relative;
    z-index: 2;
    margin-right: 15%;
    margin-top: -10%;
}

.counter-box h2 {
    font-size: 2.8rem;
    margin-top: 14%;
}

.counter-box p {
    margin-top: 12px; /* add vertical spacing */
    font-size: 1.2rem;
    color: #fff;
}


</style>

<div id="aboutimg">
    <h3>ABOUT US</h3>
</div>

<div class="container about-section">
    <h2 id="about">Welcome to Class'e Party Rentals - Your Event Partner</h2>
        <hr style="width:7%; border:solid 1px red; margin-top:-30px;" />
    <div class="row">
        <div class="col-sm-6 about-text">
            <p>
                Thank you for visiting Class'e Party Rentals, one of Southern California’s event leaders. Whether you are planning a catered affair, corporate event, neighborhood festival, wedding, or backyard graduation party, you've come to the right place for all rental services including tables, canopies, chairs, and other equipment.
                With our expanding inventory, expert event coordinators, and renowned service, we can offer you a complete event package.
                Visit our showroom to see our rental items or browse pictures of past events. You'll likely recognize places we've served with tents, tables, chairs, and more.
                Our professional staff can assist with planning and suggestions for your next event. Rely on our experience to make your wedding or party a great success. Contact us by email or phone for more information.
                Class'e Party Rentals operates from a 20,000 sq. ft. warehouse with our own laundry plant and ten fully equipped trucks. We use CAD design to show 3D layouts of your party setup.
                Whether it's a corporate event or backyard celebration, we ensure everything runs smoothly. We can suggest layouts, floor plans, and previous event samples to help you plan the perfect occasion.
            </p>
        </div>
        <div class="col-sm-6">
            <img src="{{ asset('aboutus-info-img2.jpg') }}" alt="About Us Image" class="about-img">
        </div>
    </div>
</div>

<div id="counterimg">
    <div class="counter-box">
        <h2>2000</h2>
            <hr style="width:40%; border:solid 1px; color:#fff; margin-top:0px;" />
        <p>Products</p>
    </div>
    <div class="counter-box">
        <h2>10,000</h2>
            <hr style="width:40%; border:solid 1px; color:#fff; margin-top:0px;" />
        <p>Events</p>
    </div>
</div>
@endsection
