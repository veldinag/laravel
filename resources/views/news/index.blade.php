@extends('layouts.main')
@section('title') News List @parent @endsection
@section('content')

    <section class="padding-110px-tb xs-padding-60px-tb bg-white builder-bg blog-style2" id="blog-section3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text">LATEST NEWS</h2>
                    <div class="text-medium width-60 margin-lr-auto md-width-70 sm-width-100 tz-text margin-thirteen-bottom  xs-margin-nineteen-bottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                </div>
            </div>

            @php
                $i = 1;
            @endphp

            @forelse($newsList as $news)
                @if(($i % 3) == 1)
                    <div class="row">
                @endif

                @php
                    $r = rand(1, 3);
                @endphp

                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-nineteen-bottom">
                    <div class="post-thumbnail overflow-hidden margin-twelve-bottom">
                        <a href="{{ route('news.show', ['id' => $news->id]) }}"><img src="{{asset('assets/img/spa-blog-img0'.$r.'.jpeg')}}" data-img-size="(W)800px X (H)507px" alt=""></a>
                    </div>
                    <div class="post-details no-margin-lr no-margin-bottom">
                        <a href="{{ route('newslist.index', ['cat_id' => $news->category_id]) }}" class="tz-text btn btn-very-small bg-cyan border-radius-0 text-white alt-font margin-nine-bottom font-weight-500">{{ $news->category }}</a>
                        <a href="{{ route('news.show', ['id' => $news->id]) }}" class="tz-text text-dark-gray text-medium alt-font font-weight-600 display-block margin-four-bottom md-text-medium">{{ $news->title }}</a>
                        <div class="text-medium tz-text"><p>{!! $news->description !!}</p></div>
                        <div class="separator-line-full bg-middle-gray margin-ten-bottom tz-background-color"></div>
                        <div class="text-extra-small alt-font"><a href="#" class="tz-text text-medium-gray">{{ $news->created_at }}</a>   /   <span class="tz-text">POSTED BY</span> <a href="#" class="tz-text text-medium-gray">{{ $news->author }}</a></div>
                    </div>
                </div>

                @if(($i % 3) == 0)
                    </div><br>
                @endif

                @php
                    $i++;
                @endphp

            @empty
                <h2>No news</h2>
            @endforelse

        </div>
    </section>

@endsection
