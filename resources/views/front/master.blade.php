<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Md. Kamrul Hasan</title>
    <link rel="icon" type="image/x-icon" href="front/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
{{--    <link rel="stylesheet" href="{{ asset('/') }}front/css/swiper-bundle.min.css" />--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/') }}front/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}front/css/gallery.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}front/css/all.css" />
    <link rel="stylesheet" href="{{ asset('/') }}front/css/style.css" />
    <link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap.min.css" />
</head>
<body>
<main>
    @include('front.includes.header')

    @yield('body')

</main>

@include('front.includes.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/') }}front/js/isotope.pkgd.min.js"></script>
{{--<script src="{{ asset('/') }}front/js/swiper-bundle.min.js"></script>--}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('/') }}front/js/app.js"></script>
</body>
</html>

