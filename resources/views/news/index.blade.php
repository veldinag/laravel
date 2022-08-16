@extends('layouts.main')
@section('content')

    <div class="row text-center margin-bottom-60">

        <div class="col-md-8 col-md-offset-2">

            <h2 class="section-title-white editContent">News</h2>

            <div class="separator_wrapper">
                <div class="separator_first_circle">
                    <div class="separator_second_circle">
                    </div>
                </div>
            </div>

            <h3 class="section-subtitle-white editContent">There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration, by injected humour, or new randomised
                words which don't look believable.</h3>

        </div><!-- /col-md-8 -->

    </div><!-- /.row -->

    @php
        $i = 1;
    @endphp

    @forelse($newsList as $key => $news)
        @if(($i % 2) == 1)
            <div class="row">
        @endif

        @php
             $r = rand(1, 6);
        @endphp

        <div class="col-md-6 blog_item1">

            <!--begin popup image -->
            <div class="popup-wrapper">
                <div class="popup-gallery">
                    <a class="popup2" href="{{ route('news.show', ['id' => $key]) }}"><img src="{{ asset('assets/img/blog'.$r.'.jpeg') }}" class="width-100"
                                                                                       alt="pic"><span class="eye-wrapper"><span
                                class="fa fa-eye eye-icon" style="font-size: 38px;"></span></span></a>
                </div>
            </div>
            <!--end popup image -->

            <!--begin blog_item_inner -->
            <div class="blog_item_inner">

                <h3 class="blog_title">{{ $news['title'] }}</h3>

                <a href="#" class="blog_icons editContent"><span class="fa fa-user"></span> By {{ $news['author'] }}</a>

                <a href="{{ route('newslist.index', ['cat_id' => $news['category_id']]) }}" class="blog_icons editContent last"><span class="fa fa-tags"></span> {{ $news['category'] }}</a>

                <p class="editContent">{!! $news['description'] !!}</p>

                <a href="{{ route('news.show', ['id' => $key]) }}" class="btn button_blog">Read More</a>

                <a href="#" class="blog_comments_icon"><span class="fa fa-comment-o"></span> <span
                        class="editContent">8</span></a>

            </div>
            <!--end blog_item_inner -->

        </div><!-- /.col-md-4 -->

    @if(($i % 2) == 0)
         </div><!-- ./row -->
    @endif

    @php
        $i++;
    @endphp

    @empty
        <h2>No news</h2>
    @endforelse
@endsection
