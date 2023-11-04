@extends('layouts.home_layout',['page_title'=>$page_title])

@section('home')

    <div class="text-center">
        <img src="{{$item->image }}" width="250px"/>
        <p class="text-body">{{$item->category}} {{$item->brand}} مدل {{$item->fullname}}</p>
    </div>



@endsection
