<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('/shop_storage/pc-favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>{{$page_title}}</title>
</head>
<body>
{{--header navbar 1--}}
<header>
    <div class="wrapper">
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset('shop_storage/pc-logo.png')}}" alt="pccenter-logo" width="150px"></a>
        </div>
        <div class="navbar">

                <ul>
                    <li><a href="#">صفحه اصلی</a></li>
                    <li><a href="#">سوالات متداول</a></li>
                    <li><a href="#">تماس با ما</a></li>
                    <li><a href="#">درباره ما</a></li>
                </ul>

        </div>
        <div class="links-nav1">
            <a href=""><button class="item_nav_link1">9903989716(+98)<img src="{{asset('shop_storage/icon-call.png')}}" alt="icon-call" style="height: 20px;padding: 0px 8px 0px 0px"></button></a>
            <a href=""><button class="item_nav_link2">pc_center@gmail.com<img src="{{asset('shop_storage/icon-email.png')}}" alt="icon-email" style="height: 20px;padding: 0px 8px 0px 0px"></button></a>
        </div>
    </div>
</header>

{{--header navbar 2--}}


<div class="wrapper2">
    <div class="menu-bar">
        <button class="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <button class="menu-hover"><i class="fa fa-bars" aria-hidden="true"></i>دسته بندی کالاها</button>
        <div class="hover-drop" id="menu-hover">
            <div class="menu-bar2">
                <button class="items-hover">قطعات کامپیوتر و لوازم جانبی</button>
                <div class="hover-drop2">
                    <button class="items-hover2"><a href="{{route('motherboard')}}">مادربرد</a></button>
                    <button class="items-hover2"><a href="{{route('graphic')}}">کارت گرافیک</a></button>
                    <button class="items-hover2"><a href="">پردازنده</a></button>
                    <button class="items-hover2"><a href="">حافظه رم</a></button>
                    <button class="items-hover2"><a href="">مانیتور</a></button>
                    <button class="items-hover2"><a href="">فن خنک کننده</a></button>
                    <button class="items-hover2"><a href="">حافظه SSD</a></button>
                </div>
            </div>
            <div class="menu-bar2">
                <button class="items-hover hv1">لپ تاپ و لوازم جانبی</button>
                <div class="hover-drop3">
                    <button class="items-hover2"><a href="">ایسوس ASUS</a></button>
                    <button class="items-hover2"><a href="">لنوو LENOVO</a></button>
                    <button class="items-hover2"><a href="">ام اس آی MSI</a></button>
                    <button class="items-hover2"><a href="">ایسر ACER</a></button>
                    <button class="items-hover2"><a href="">اچ پی HP</a></button>
                </div>
            </div>
            <div class="menu-bar2">
                <button class="items-hover hv2">کامپیوتر های آماده</button>
                <div class="hover-drop4">
                    <button class="items-hover2"><a href="">ALL IN ONE</a></button>
                    <button class="items-hover2"><a href="">GAMING PC</a></button>
                    <button class="items-hover2"><a href="">MINI PC</a></button>
                </div>
            </div>
            <div class="menu-bar2">
                <button class="items-hover hv3">دستگاه های سیستم اداری</button>
                <div class="hover-drop5">
                    <button class="items-hover2"><a href="">SCANNER</a></button>
                    <button class="items-hover2"><a href="">PRINTER</a></button>
                    <button class="items-hover2"><a href="">پروژکتور</a></button>
                </div>
            </div>

        </div>
    </div>

    <div class="sidebar">
        <div class="close-nav">
            <button class="sign-in-mobile">
                @auth()
                    <span><i class="fa fa-user-circle px-2" aria-hidden="true"></i>{{auth()->user()->name}}</span>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="sign-out">خروج از حساب</button>
                    </form>
                @endauth
                @guest()
                    <a href="{{route('login_register')}}"><button>ورود / ثبت نام</button></a>
                @endguest
            </button>
            <button class="exit">×</button>
        </div>
        <div class="menuitem">
            <div class="dropdown">
                <button class="drop-btn" onclick="drop1()">قطعات کامپیوتر و لوازم جانبی<i class="fa fa-angle-double-left"></i></button>
                <div class="list-items" id="list-items1">
                    <a href="#" class="deep">مادربرد</a>
                    <a href="#" class="deep">کارت گرافیک</a>
                    <a href="#" class="deep">پردازنده</a>
                    <a href="#" class="deep">حافظه رم</a>
                    <a href="#" class="deep">فن خنک کننده</a>
                    <a href="#" class="deep">حافظه SSD</a>
                    <a href="#" class="deep">مانیتور</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="drop-btn" onclick="drop2()">لپ تاپ و لوازم جانبی<i class="fa fa-angle-double-left"></i>
                </button>
                <div class="list-items" id="list-items2">
                    <a href="#" class="deep">ایسوس ASUS</a>
                    <a href="#" class="deep">لنوو LENOVO</a>
                    <a href="#" class="deep">ام اس آی MSI</a>
                    <a href="#" class="deep">ایسر ACER</a>
                    <a href="#" class="deep">اچ پی HP</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="drop-btn" onclick="drop3()">کامپیوتر های آماده<i class="fa fa-angle-double-left"></i>
                </button>
                <div class="list-items" id="list-items3">
                    <a href="#" class="deep">ALL IN ONE</a>
                    <a href="#" class="deep">GAMING PC</a>
                    <a href="#" class="deep">MINI PC</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="drop-btn" onclick="drop4()">دستگاه های سیستم اداری<i
                        class="fa fa-angle-double-left"></i></button>
                <div class="list-items" id="list-items4">
                    <a href="#" class="deep">SCANNER</a>
                    <a href="#" class="deep">PRINTER</a>
                    <a href="#" class="deep">پروژکتور</a>
                </div>
            </div>
        </div>
    </div>

    <div class="search">
        <form action="#">
            <input type="text" placeholder="کلمه مورد نظر را وارد کنید">
            <button type="submit"><img src="/shop_storage/icon-search.png" alt="" width="25px"></button>
        </form>
    </div>

    <div class="sign-in">
        @auth()
            <span><i class="fa fa-user-circle px-2" aria-hidden="true"></i>{{auth()->user()->name}}</span>

            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="sign-out">خروج از حساب</button>
            </form>
        @endauth

        @guest()
            <a href="{{route('login_register')}}"><button class="sign-in-btn">ورود / ثبت نام</button></a>
        @endguest
    </div>

    <div class="basket">
        <button>
            <img src="/shop_storage/icon-shopping.png" alt="" width="40px">
        </button>
    </div>
</div>
<div class="search2">
    <form action="#">
        <input type="text" name="search" placeholder="کلمه مورد نظر را وارد کنید">
        <button type="submit"><img src="/shop_storage/icon-search.png" alt="" width="25px"></button>
    </form>
</div>



@yield('home')

{{--footer navbar1--}}
<footer>
<div class="row nav-footer">
    <div class="col-6 nav-footer-icon">
        <img src="{{asset('/shop_storage/join-icon.png')}}" alt="" width="50px">
        <span>همین حالا به یکی از هزاران عضو پی سی سنتر بپیوندید تا از جدیدترین تخفیفات مطلع شوید</span>
    </div>
    <div class="col-6">
        <form class="d-flex footer-form">
            <input class="form-control me-2 footer-input" type="email"  aria-label="mail" placeholder="ایمیل خود را وارد نمایید">
            <button class="btn search-btn" type="submit">عضویت</button>
        </form>
    </div>
</div>











    <div class="footer">

        {{--footer logo--}}
        <div class="row footer1">
            <div class="col-3">
                <a href="{{route('home')}}">
                    <img src="{{asset('/shop_storage/pc-logo.png')}}" alt="pc-center-logo" width="150px" class="logo footer-logo">
                </a>
            </div>
            <div class="col-9"></div>
        </div>

        {{--footer call--}}
        <div class="row footer2">
            <div class="col-3">
                <img src="{{asset('/shop_storage/guidance-icon.png')}}" alt="guidance-icon" width="40px">
                <span>نیاز به راهنمایی و مشاوره دارید؟</span>
            </div>
            <div class="col-3 guidance-num">
                <span>
                    09903989716
                </span>
            </div>
            <div class="col-4"></div>
            <div class="col-2"></div>
        </div>
        <hr>

        {{--footer info about pc center--}}
        <div class="row ">
            <div class="col-2 row-footer3">
                <h3 class="footer3">خدمات مشتریان</h3>
                <a href="" class="end-links">حساب من</a>
                <a href="" class="end-links">پرسش های متداول</a>
                <a href="" class="end-links">نظرسنجی</a>
            </div>
            <div class="col-2 row-footer3">
                <h3 class="footer3">راهنمای خرید</h3>
                <a href="" class="end-links">آموزش ثبت سفارش</a>
                <a href="" class="end-links">قوانین و شرایط استفاده</a>
                <a href="" class="end-links">نحوه ارسال</a>
            </div>
            <div class="col-2 row-footer3">
                <h3 class="footer3">همراه پی سی سنتر</h3>
                <a href="" class="end-links">تماس با ما</a>
                <a href="" class="end-links">درباره ما</a>
                <a href="" class="end-links">استخدام</a>
            </div>
            <div class="col-2 row-footer3">
                <h3 class="footer3">خدمات پی سی سنتر</h3>
                <a href="" class="end-links">اسمبل رایگان</a>
                <a href="" class="end-links">سیستم های پیشنهادی</a>
                <a href="" class="end-links">واریز به حساب</a>
            </div>
            <div class="col-4"></div>
        </div>

    </div>
    <div class="row footer-final">
        <span>این سایت فقط جهت نمونه کار می باشد</span>
    </div>

</footer>


<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/propper.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/home.js')}}"></script>
</body>
</html>
