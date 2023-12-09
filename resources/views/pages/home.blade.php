@extends('layouts.home_layout',['page_title'=>$page_title])

@section('home')

{{--carousal--}}



{{--card--}}
<div class="card-link">
    <a href="{{route("motherboard")}}"><img src="{{asset('/shop_storage/card-link1.webp')}}" alt=""></a>
    <a href="#"><img src="{{asset('/shop_storage/card-link2.webp')}}" alt=""></a>
    <a href="{{route("graphic")}}"><img src="{{asset('/shop_storage/card-link3.webp')}}" alt=""></a>
    <a href="#"><img src="{{asset('/shop_storage/card-link4.webp')}}" alt=""></a>
</div>


<div class="big-card">
    <img src="{{asset('/shop_storage/gif-card.gif')}}" alt="">
</div>


@endsection
