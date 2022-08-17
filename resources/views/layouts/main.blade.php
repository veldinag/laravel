<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
    <title>News</title>

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>
<body>

<div id="page" class="page"><header class="header-style2" id="header-section5">
        <!-- nav -->
        <nav class="navbar bg-white tz-header-bg no-margin alt-font shrink-header light-header">
            <div class="container navigation-menu">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-3 col-sm-4 col-xs-9">
                        <a href="#home" class="inner-link"><img alt="" src="{{asset('assets/img/logo.png')}}" data-img-size="(W)163px X (H)39px"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-9 col-sm-8 col-xs-3 position-inherit">
                        <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pull-right">
                            <ul class="nav navbar-nav font-weight-600">
                                <li class="propClone">
                                    <a class="inner-link" href="{{ route('greeting.index') }}">HOME</a>
                                </li>
                                <li class="propClone">
                                    <a class="inner-link" href="{{ route('newslist.index', ['cat_id' => 0]) }}">NEWS</a>
                                </li>
                                <li class="propClone">
                                    <a class="inner-link" href="{{ route('category.index') }}">CATEGORIES</a>
                                </li>
                                <li class="propClone">
                                    <a class="inner-link" href="#">CONTACTS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav -->
    </header>

    @yield('content')

    <footer id="footer-section11" class="padding-30px-tb bg-dark-gray builder-bg">
        <div class="container">
            <div class="row equalize">
                <!-- caption -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 xs-text-center xs-margin-four-bottom display-table" style="height: 40px;">
                    <div class="display-table-cell-vertical-middle">
                        <a href="#home" class="inner-link"><img src="{{asset('assets/img/logo-white.png')}}" data-img-size="(W)163px X (H)40px" alt=""></a>
                    </div>
                </div>
                <!-- end caption -->
                <!-- caption -->
                <div class="col-md-6 col-sm-6 col-xs-12 text-right xs-text-center display-table" style="height: 40px;">
                    <div class="display-table-cell-vertical-middle">
                        <span class="text-light-gray tz-text">© 2022 News Aggregator is proudly powered by Alex Veldin</span>
                    </div>
                </div>
                <!-- end caption -->
            </div>
        </div>
    </footer></div><!-- /#page -->

<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/smooth-scroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/equalize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/counter.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/twitterFetcher_min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
