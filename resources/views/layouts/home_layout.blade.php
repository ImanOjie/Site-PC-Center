<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('/shop_storage/pc-favicon.png')}}">
    <title>{{$page_title}}</title>
</head>
<body>
<header class="container-fluid">
{{--header navbar 1--}}
<div class="row nav1">
    <div class="col-2">
        <a href="{{route('home')}}"><img src="{{asset('/shop_storage/pc-logo.png')}}" alt="pc-center-logo" width="130px" class="logo"></a>
    </div>

    <div class="col-5">
        <div class="row" style="height: 30px"></div>
        <a href="{{route('home')}}"><button href="{{route('home')}}" class="item_nav1" onclick="click()">صفحه اصلی</button></a>
        <a href=""><button class="item_nav1">سوالات متداول</button></a>
        <a href=""><button class="item_nav1">تماس با ما</button></a>
        <a href=""><button class="item_nav1">درباره ما</button></a>
    </div>
    <div class="col-5">
        <div class="row" style="height: 20px"></div>
        <a href=""><button class="item_nav_link1">9903989716(+98)<img src="{{asset('/shop_storage/icon-call.png')}}" alt="icon-call" style="height: 20px;padding: 0px 8px 0px 0px"></button></a>
        <br>
        <a href=""><button class="item_nav_link2">pc_center@gmail.com<img src="{{asset('/shop_storage/icon-email.png')}}" alt="icon-email" style="height: 20px;padding: 0px 8px 0px 0px"></button></a>
    </div>
</div>
</header>

{{--header navbar 2--}}
<div class="row nav2">
    <div class="col-3">

        <nav>
            <menu>
                <menuitem id="demo1">
                    <button class="dropbtn"><img src="{{asset('/shop_storage/icon-dropdown.png')}}" alt="dropdown" width="22px" style="margin-left: 8px" >دسته بندی کالاها</button>
                    <menu>
                        <menuitem>
                            <a class="menuitem">قطعات کامپیوتر و لوازم جانبی</a>
                            <menu>
                                <menuitem><a href="{{route('motherboard')}}" class="menuitem deep1">مادربرد</a></menuitem>
                                <menuitem><a href="{{route('graphic')}}" class="menuitem deep1">کارت گرافیک</a></menuitem>
                                <menuitem><a href="{{route('cpu')}}" class="menuitem deep1">پردازنده</a></menuitem>
                                <menuitem><a href="" class="menuitem deep1">حافظه رم</a></menuitem>
                                <menuitem><a href="" class="menuitem deep1">فن خنک کننده</a></menuitem>
                                <menuitem><a href="" class="menuitem deep1">حافظه SSD</a></menuitem>
                            </menu>
                        </menuitem>
                        <menuitem>
                            <a class="menuitem">لپ تاپ و لوازم جانبی</a>
                            <menu>
                                <menuitem><a href="" class="menuitem">ایسوس ASUS</a></menuitem>
                                <menuitem><a href="" class="menuitem">لنوو LENOVO</a></menuitem>
                                <menuitem><a href="" class="menuitem">ام اس آی MSI</a></menuitem>
                                <menuitem><a href="" class="menuitem">ایسر ACER</a></menuitem>
                                <menuitem><a href="" class="menuitem">اچ پی HP</a></menuitem>
                            </menu>
                        </menuitem>
                        <menuitem>
                            <a class="menuitem">کامپیوتر های آماده</a>
                            <menu>
                                <menuitem><a href="" class="menuitem deep2">ALL IN ONE</a></menuitem>
                                <menuitem><a href="" class="menuitem deep2">GAMING PC</a></menuitem>
                                <menuitem><a href="" class="menuitem deep2">MINI PC</a></menuitem>

                            </menu>
                        </menuitem>
                        <menuitem>
                            <a class="menuitem">دستگاه های سیستم اداری</a>
                            <menu>
                                <menuitem><a href="" class="menuitem deep3">SCANNER</a></menuitem>
                                <menuitem><a href="" class="menuitem deep3">PRINTER</a></menuitem>
                                <menuitem><a href="" class="menuitem deep3">پروژکتور</a></menuitem>
                            </menu>
                        </menuitem>
                        <menuitem>

                    </menu>
                </menuitem>
            </menu>
        </nav>



    </div>
    <div class="col-5">
        <form class="d-flex search-bar" role="search">
            <input class="form-control me-2 " type="search"  aria-label="Search">
            <button class="btn search-btn" type="submit"><img src="{{asset('/shop_storage/icon-search.png')}}" alt="search-icon" width="20px"></button>
        </form>
    </div>
    <div class="col-3">

            <div class="row login-div">
                @auth()
                <span class="login-name">{{auth()->user()->name}}</span>

                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="logout_btn">خروج از حساب</button>
                </form>
                @endauth
            </div>
                @guest()
                    <a href="{{route('login_register')}}"><button class="login-btn align-content-center">ورود / ثبت نام</button></a>
                @endguest
    </div>
    <div class="col-1 text-center m-0 ">
            <a href="{{route('purchases')}}"><button class="basket-btn"><img src="{{asset('/shop_storage/icon-shopping.png')}}" alt="basket" width="45px"></button></a>
    </div>


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
