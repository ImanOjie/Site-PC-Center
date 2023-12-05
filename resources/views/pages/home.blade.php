@extends('layouts.home_layout',['page_title'=>$page_title])

@section('home')

    {{--carousal--}}



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
