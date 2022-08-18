<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
    <title>@section('title') :: NewsAggregator @show</title>

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

<div id="page" class="page">
    <x-header></x-header>
    @yield('content')
    <x-footer></x-footer>
</div><!-- /#page -->

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
