<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Chủ</title>
    @include('front.toplibs')
    <link rel="stylesheet" href="{{asset('/public/css/main.css')}}">
</head>
<body>
<div class="container-fluid">
    <div class="row align-items-center py-3 px-xl-5">
        @include('front.header')
    </div><!--Header-->
</div>

<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">

        @include('front.leftnavbar')

        <div class="col-lg-9">
            @include('front.topnavbar')
            @include('front.carousel')
        </div>

    </div>
</div>

@include('front.shippingbar')

@yield('content')

@include('front.brandbar')

@include('front.footer')

@include('front.bottomlibs')
</body>

<script src="{{asset('/public/js/index.js')}}"></script>

</html>
