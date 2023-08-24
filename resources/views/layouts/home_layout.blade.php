<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('/css/login_register.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('/shop_storage/pc_favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{$page_title}}</title>
</head>
<body>
<div class="nav row">
    <div class="col-5">
        <div class="row" style="height: 20px"></div>
        <a href=""><button class="item_nav_link1"><img src="{{asset('/shop_storage/icone_call.png')}}" style="height: 20px;padding: 0px 8px 0px 0px">(+98)9903989716</button></a>
        <br>
        <a href=""><button class="item_nav_link2"><img src="{{asset('/shop_storage/icone_email.png')}}" style="height: 20px;padding: 0px 8px 0px 0px">pc_center@gmail.com</button></a>
    </div>
    <div class="col-5">
        <div class="row" style="height: 30px"></div>
        <a href=""><button class="item_nav1">درباره ما</button></a>
        <a href=""><button class="item_nav1">تماس با ما</button></a>
        <a href=""><button class="item_nav1">سوالات متداول</button></a>
        <a href="{{route('Home')}}"><button href="{{route('Home')}}" class="item_nav1" onclick="click()">صفحه اصلی</button></a>
    </div>
    <div class="col-2">
        <a href="{{route('Home')}}"><img src="{{asset('/shop_storage/pc_logo.png')}}" alt="" width="130px" class="logo"></a>
    </div>
</div>



@yield('home')




<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/propper.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/home.js')}}"></script>
</body>
</html>
