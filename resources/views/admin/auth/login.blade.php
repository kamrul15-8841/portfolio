<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Registration</title>
    <link rel="stylesheet" href="{{ asset('/') }}admin/login/styles.css" />
</head>
<body>
<div class="main">
    <div class="container a-container" id="a-container">
        <form class="form" id="a-form" method="POST" action="">
            @csrf
            <h2 class="title">Create Account</h2>
            <div class="form__icons">
                <img class="form__icon" src="{{ asset('/') }}admin/login/svg/fb.svg" alt="" />
                <img class="form__icon" src="{{ asset('/') }}admin/login/svg/linkedin.svg" />
                <img class="form__icon" src="{{ asset('/') }}admin/login/svg/twitter.svg" />
            </div>
            <span class="form__span">or use email for registration</span>
            <input class="form__input" name="name" type="text" placeholder="Name" />
            <input class="form__input" name="email" type="email" placeholder="Email" />
            <input class="form__input" name="password" type="password" placeholder="Password" />
            <input class="form__input" name="password_confirmation" type="password" placeholder="Confirm Password" />
            <button  class="button switch__button">SIGN UP</button>
        </form>
    </div>

    <div class="container b-container" id="b-container">
        <form class="form" id="b-form" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="title">Sign in to Website</h2>
            <div class="form__icons">
                <img class="form__icon" src="{{ asset('/') }}admin/login/svg/fb.svg" alt="" />
                <img class="form__icon" src="{{ asset('/') }}admin/login/svg/linkedin.svg" />
                <img class="form__icon" src="{{ asset('/') }}admin/login/svg/twitter.svg" />
            </div>
            <span class="form__span">or use your email account</span>
            <input class="form__input" name="email" type="email" placeholder="Email" />
            <input class="form__input" name="password" type="password" placeholder="Password" />
            <a class="form__link">Forgot your password?</a>
            <input type="submit" class="button switch__button"  value="SIGN IN" />
{{--            <button type="submit" class="button submit">SIGN IN</button>--}}
        </form>
    </div>

    <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
            <h2 class="title">Welcome Back !</h2>
            <p class="description">To keep connected with us please login with your personal info</p>
            <button class="switch__button button switch-btn">SIGN IN</button>
        </div>
        <div class="switch__container is-hidden" id="switch-c2">
            <h2 class="switch__title title">Hello Friend !</h2>
            <p class="description">Enter your personal details and start journey with us</p>
            <button class="switch__button button switch-btn">SIGN UP</button>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}admin/login/script.js"></script>
</body>
</html>

