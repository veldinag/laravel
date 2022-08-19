<header class="header-style2" id="header-section5">
    <!-- nav -->
    <nav class="navbar bg-white tz-header-bg no-margin alt-font shrink-header light-header">
        <div class="container navigation-menu">
            <div class="row">
                <!-- logo -->
                <div class="col-md-3 col-sm-4 col-xs-9">
                    <a href="{{ route('greeting.index') }}" class="inner-link"><img alt="" src="{{asset('assets/img/logo.png')}}" data-img-size="(W)163px X (H)39px"></a>
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
