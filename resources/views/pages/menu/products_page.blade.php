@extends('layouts.home_layout',['page_title'=>$page_title])

@section('home')

    {{--<div class="row page-row">
        <img src="{{$item->image }}" width="250px"/>
        <p class="text-body">{{$item->category}} {{$item->brand}} مدل {{$item->fullname}}</p>
    </div>--}}
    <div class="row row-product-image">
        <div class="col-md-6 col-image">
            <img src="{{$item->image }}"/>
        </div>
        <div class="col-md-6 col-image-info">

        </div>
    </div>




@endsection
