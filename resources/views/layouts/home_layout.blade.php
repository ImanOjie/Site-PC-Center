<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('/css/login_register.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('/shop_storage/pc-favicon.png')}}">
    <title>{{$page_title}}</title>
</head>
<body>

{{--navbar 1--}}
<div class="row nav1">
    <div class="col-2">
        <a href="{{route('Home')}}"><img src="{{asset('/shop_storage/pc-logo.png')}}" alt="pc-center-logo" width="130px" class="logo"></a>
    </div>

    <div class="col-5">
        <div class="row" style="height: 30px"></div>
        <a href=""><button class="item_nav1">درباره ما</button></a>
        <a href=""><button class="item_nav1">تماس با ما</button></a>
        <a href=""><button class="item_nav1">سوالات متداول</button></a>
        <a href="{{route('Home')}}"><button href="{{route('Home')}}" class="item_nav1" onclick="click()">صفحه اصلی</button></a>
    </div>
    <div class="col-5">
        <div class="row" style="height: 20px"></div>
        <a href=""><button class="item_nav_link1">(+98)9903989716<img src="{{asset('/shop_storage/icon-call.png')}}" alt="icon-call" style="height: 20px;padding: 0px 8px 0px 0px"></button></a>
        <br>
        <a href=""><button class="item_nav_link2">pc_center@gmail.com<img src="{{asset('/shop_storage/icon-email.png')}}" alt="icon-email" style="height: 20px;padding: 0px 8px 0px 0px"></button></a>
    </div>
</div>

{{--navbar 2--}}
<div class="row nav2">
    <div class="col-3">
        <div class="dropdown">
            <button class="dropbtn"><img src="{{asset('/shop_storage/icon-dropdown.png')}}" alt="dropdown" width="22px" style="margin-left: 8px" >دسته بندی کالاها</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
    </div>
    <div class="col-6">
        <form class="d-flex search-bar" role="search">
            <input class="form-control me-2 " type="search"  aria-label="Search">
            <button class="btn search-btn" type="submit"><img src="{{asset('/shop_storage/icon-search.png')}}" alt="search-icon" width="20px"></button>
        </form>
    </div>
    <div class="col-2">
        <a href=""><button class="login-btn">ورود / ثبت نام</button></a>
    </div>
    <div class="col-1">
        <button class="basket-btn"><img src="{{asset('/shop_storage/icon-shopping.png')}}" alt="basket" width="45px"></button>
    </div>



</div>



@yield('home')




<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/propper.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/home.js')}}"></script>
</body>
</html>
