@extends('layouts.main')
@section('content')
    <div id="page" class="page">

        <div class="item team" id="team1">

            <div class="wrapper">

                <div class="container">

                    <div class="row text-center">

                        <div class="col-md-8 col-md-offset-2">

                            <h2 class="section-title-white editContent">Categories</h2>

                            <div class="separator_wrapper">
                                <div class="separator_first_circle">
                                    <div class="separator_second_circle">
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.col-md-8 -->

                    </div><!-- /.row -->
                    @foreach($categoriesList as $key => $category)
                        @if ($key != 0)
                            <div class="col-md-4">
                                <h3>
                                    <a href="{{ route('newslist.index', ['cat_id' => $key]) }}"> {{ $category }}</a>
                                </h3>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-md-12">
                        <h3>
                            <a href="{{ route('newslist.index', ['cat_id' => 0]) }}"> {{ $categoriesList[0] }}</a>
                        </h3>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.wrapper -->
        </div><!-- /.item -->
    </div><!-- /#page -->
@endsection
