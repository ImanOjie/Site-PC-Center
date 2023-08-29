@extends('layouts.home_layout',['page_title'=>$page_title])

@section('home')

    {{--carousal--}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('/shop_storage/carousel1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/shop_storage/carousel2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/shop_storage/carousel3.jpg')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/shop_storage/carousel4.jpg')}}" alt="Forth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">قبلی</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">بعدی</span>
        </a>
    </div>

    {{--card--}}

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 card-link">
            <a href="" class="card"><img src="{{asset('/shop_storage/card-link1.webp')}}" alt="" width="130%" style="border-radius: 20px"></a>
            <a href="" class="card"><img src="{{asset('/shop_storage/card-link2.webp')}}" alt="" width="130%" style="border-radius: 20px"></a>
            <a href="" class="card"><img src="{{asset('/shop_storage/card-link3.webp')}}" alt="" width="130%" style="border-radius: 20px"></a>
            <a href="" class="card"><img src="{{asset('/shop_storage/card-link4.webp')}}" alt="" width="130%" style="border-radius: 20px"></a>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row big-card">
        <div class="col-1"></div>
        <div class="col-10">
            <a href=""><img src="{{asset('/shop_storage/gif-card.gif')}}" alt="" width="100%"></a>
        </div>
        <div class="col-1"></div>
    </div>

@endsection
