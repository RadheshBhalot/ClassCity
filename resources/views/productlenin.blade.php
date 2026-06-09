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
<div id="aboutimg">
    <h3>LINENS POLYSOLIDS</h3>
</div>
    
@endsection
