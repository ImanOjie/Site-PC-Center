@extends('layouts.login_register_layout',['page_title'=>$page_title])

@section('login_register')

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" method="post">
                <h1>ثبت نام</h1>
                <input type="text" placeholder="نام" />
                <input type="email" placeholder="ایمیل" />
                <input type="password" placeholder="رمز ورود" />
                <button>عضویت</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="post">
                <h1>ورود</h1>
                <input type="text" placeholder="نام" />
                <input type="password" placeholder="رمز ورود" />
                <button>ورود</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>کاربر گرامی</h1>
                    <h3>اگر قبلا ثبت نام کردی از اینجا وارد شو</h3>
                    <button class="ghost" id="signIn">ورود</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1> کاربر گرامی </h1>
                    <h3>اگر ثبت نام نکردی اطلاعاتت رو اینجا وارد کن و عضوی از ما شو </h3>
                    <button class="ghost" id="signUp">ثبت نام</button>
                </div>
            </div>
        </div>
    </div>












@endsection

