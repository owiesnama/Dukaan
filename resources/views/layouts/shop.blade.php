<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dukaan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css"
          integrity="sha256-Y4fsmcZ5AITTOI41har72EhwauUaLt5u51px24bEtKc=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>
<div id="app" class="wrapper">
    @include('partials.header')
    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="@lang('home.Search here...')" type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
    <Cart :initial-content="cart.content"></Cart>
    </div>
    @include('flash::message')
    @yield('content')
    @include('partials.footer')
    <Flash></Flash>
</div>
</body>

<!-- Start Footer Area -->
<!-- End Footer Style -->

<script src="{{mix('/js/app.js')}}"></script>

<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
@stack('scripts')
<script src="{{asset('js/waypoints.min.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
