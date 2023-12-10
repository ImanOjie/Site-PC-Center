@extends('layouts.home_layout',['page_title'=>$page_title])

@section('home')

{{--carousal--}}

<div class="slideshow">

    <img class="mySlides" src="{{asset('shop_storage/carousel1.jpg')}}" style="width:100%">
    <img class="mySlides" src="{{asset('shop_storage/carousel2.jpg')}}" style="width:100%">
    <img class="mySlides" src="{{asset('shop_storage/carousel3.jpg')}}" style="width:100%">
    <img class="mySlides" src="{{asset('shop_storage/carousel4.jpg')}}" style="width:100%">
    <button class="previous" onclick="plusDivs(-1)">&#10094;</button>
    <button class="next" onclick="plusDivs(1)">&#10095;</button>
</div>

{{--card--}}
<div class="card-link">
    <a href="{{route("motherboard")}}"><img src="{{asset('/shop_storage/card-link1.webp')}}" alt=""></a>
    <a href="#"><img src="{{asset('/shop_storage/card-link2.webp')}}" alt=""></a>
    <a href="{{route("graphic")}}"><img src="{{asset('/shop_storage/card-link3.webp')}}" alt=""></a>
    <a href="#"><img src="{{asset('/shop_storage/card-link4.webp')}}" alt=""></a>
</div>

{{--bigcard--}}
<div class="big-card">
    <img src="{{asset('/shop_storage/gif-card.gif')}}" alt="">
</div>


@endsection
