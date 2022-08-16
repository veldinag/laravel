<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>News Aggregator</title>

    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/layerslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic" rel="stylesheet"
          type="text/css">

    <!--headerIncludes-->

</head>
<body>

<div id="page" class="page">

    <!-- /.item --><!-- /.item --><!-- /.footerWrapper -->
    <header class="item header margin-top-0 padding-bottom-70" id="header1">

        <div class="wrapper">

            <div class="container">

                <nav role="navigation" class="navbar navbar-default navbar-lg navbar-fixed-top">

                    <div class="container">

                        <div class="navbar-header">
                            <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle"
                                    type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a href="#" class="navbar-brand brand"> News<span class="blue">Aggregator</span></a>
                        </div>

                        <div id="navbar-collapse-02" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Home</a></li>
                                <li><a href="{{ route('category.index') }}">Categories</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->

                    </div><!-- /.container -->

                </nav>

            </div><!-- /.container -->

        </div><!-- /.wrapper -->

    </header><!-- /.item -->
    <div class="item grey blog" id="blog1">

        <div class="container">

            @yield('content')

        </div><!-- /.container -->

    </div><!-- /.item -->
    <div class="footerWrapper" id="footer2">

        <div class="footer dark">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center social">

                        <p><span class="editContent">Copyright © 2022 Laravel. Designed and Developed by Veldin Alex</span></p>

                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-pinterest"></span></a>
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                        <a href="#"><span class="fa fa-youtube"></span></a>
                        <a href="#"><span class="fa fa-skype"></span></a>
                        <a href="#"><span class="fa fa-dribbble"></span></a>

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>

        </div><!-- /.item -->

    </div><!-- /.footerWrapper --></div><!-- /#page -->


<!-- Load JS here for greater good =============================-->
<script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-switch.js') }}"></script>
<script src="{{ asset('assets/js/responsiveslides.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo-min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<!-- begin layerslider script-->
<script src="{{ asset('assets/js/greensock.js') }}"></script>
<script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>

<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>



