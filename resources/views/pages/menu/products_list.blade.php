@extends('layouts.home_layout',['page_title'=>$page_title])

@section('home')

    <div class="first-title">
        {{$item->category}}
    </div>

   <div class="row page-row">
       <div class="col-md-2">
           <div class="first-title">برند</div>
           <div class="first-title">محدوده قیمت </div>
           <div class="first-title">رنگ</div>
       </div>
       <div class="row col-md-10 products_list">
           @foreach($products as $item)
           <div class="col-md-3" style="padding: 0;">
               <div class="cardlist">
                   <img src="{{$item->image }}" width="100%"/>
                   <div class="row">
                       <p class="text-body">{{$item->category}} {{$item->brand}} مدل {{$item->fullname}}</p>
                   </div>
                    <div class="row">
                        <p class="text-price">{{number_format($item->price)}} تومان</p>
                    </div>
                   <a href=""><button class="card-button">مشاهده محصول</button></a>
               </div>
           </div>
           @endforeach
       </div>
   </div>

@endsection
