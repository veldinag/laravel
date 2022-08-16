@extends('layouts.main')
@section('content')
    <div id="page" class="page">

        <div class="item content" id="content2">

            <div class="container">

                <div class="row">

                    <div class="col-md-5">

                        <img src="{{ asset('assets/img/pic3.png') }}" alt="picture" class="width-100">

                    </div><!-- /.col-md-5 -->

                    <div class="col-md-7">

                        <h2 class="editContent">{{ $news['title'] }}</h2>

                        <p class="editContent">{!! $news['text'] !!}</p>


                        <div class="row">
                            <div class="featured_dropcap">
                                <p class="editContent"><span class="fa fa-user"></span>&nbsp;{{ $news['author'] }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="featured_dropcap">
                                <p class="editContent"><span class="fa fa-tags"></span>&nbsp;{{ $news['category'] }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="featured_dropcap">

                                <p class="editContent"><span class="fa fa-calendar"></span>&nbsp;{{ $news['created_at']->format('d-m-Y H:i') }}</p>
                            </div>
                        </div>



                    </div><!-- /.col-md-7 -->

                </div><!-- ./row -->

            </div><!-- /.container -->

        </div><!-- /.item --></div><!-- /#page -->
@endsection
