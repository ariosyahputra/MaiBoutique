@extends('templates.landingTemplate')
@section('title', 'MaiBoutique')
@section('content')
<div class="container-md mb-5">
    <div class="row mt-md-5 mt-0">
        <div class="col-12 col-md-5 align-self-center my-4">
            <h4 class="typeWritter">Welcome to MaiBoutique</h4>
            <p class="fs-6">Online boutique that provides you with various clothes to suit your various activities.</p>
            <a class="btn btn-sm btn-primary mt-1" href="{{ route('register') }}">Get Started</a>
        </div>

        <div class="col-12 col-md-6 ms-md-auto">
            <img class="img-fluid" src="/images/landingImage.png" alt="">
        </div>
    </div>
</div>
@endsection
