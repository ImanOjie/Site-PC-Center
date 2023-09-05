@extends('layouts.login_register_layout',['page_title'=>$page_title])

@section('login_register')

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            @if(session()->has('save_ok_shod'))
                    {{session()->get('save_ok_shod')}}
                @endif
            <form action="{{route('register')}}" method="post">
                @csrf
                <h1>ثبت نام</h1>

                @if($errors->has('name'))
                    {!! $errors->first('name') !!}
                @endif
                <input type="text" name="name" placeholder="نام" />

                @if($errors->has('email'))
                    {!! $errors->first('email') !!}
                @endif
                <input type="email" name="email" placeholder="ایمیل" />

                @if($errors->has('password'))
                    {!! $errors->first('password') !!}
                @endif
                <input type="password" name="password" placeholder="رمز ورود" />

                <button>عضویت</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="post">
                @csrf
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
                    <h3>اگر ثبت نام کردی از اینجا وارد شو</h3>
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

