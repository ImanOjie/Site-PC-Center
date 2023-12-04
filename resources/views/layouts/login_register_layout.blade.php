<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/login_register.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('/shop_storage/pc-favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>{{$page_title}}</title>
</head>
<body>




<div>
    @yield('login_register')
</div>


<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/propper.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/login_register.js')}}"></script>
</body>
</html>
