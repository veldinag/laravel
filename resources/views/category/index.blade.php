@extends('layouts.main')
@section('content')
    <div id="page" class="page">
        <section class="bg-white builder-bg padding-110px-tb xs-padding-60px-tb" id="portfolios-section6">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text" id="tz-slider-text244">CATEGORIES</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="work-4col wide work-with-title-light">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="overflow-hidden grid-gallery">
                                <div class="tab-content">
                                    <ul class="masonry-items grid work-gallery grid">

                                        @foreach($categoriesList as $key => $category)
                                        @php
                                            $r = rand(4, 8);
                                        @endphp
                                        @if($key != 0)
                                        <li class="xs-no-padding">
                                            <figure>
                                                <div class="gallery-img lightbox-gallery">
                                                    <a href="{{ route('newslist.index', ['cat_id' => $key]) }}" title=""><img src="{{asset('assets/img/agency-work-0'.$r.'.jpeg')}}" id="tz-bg-110" data-img-size="(W)800px X (H)650px" alt=""></a>
                                                </div>
                                                <figcaption>
                                                    <h3 class="text-medium alt-font"><a href="{{ route('newslist.index', ['cat_id' => $key]) }}" class="text-dark-gray tz-text" id="tz-slider-text246">{{ $category }}</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        @endif

                                        @endforeach
                                            <li class="xs-no-padding">
                                                <figure>
                                                    <div class="gallery-img lightbox-gallery">
                                                        <a href="{{ route('newslist.index', ['cat_id' => 0]) }}" title=""><img src="{{asset('assets/img/agency-work-0'.$r.'.jpeg')}}" id="tz-bg-110" data-img-size="(W)800px X (H)650px" alt=""></a>
                                                    </div>
                                                    <figcaption>
                                                        <h3 class="text-medium alt-font"><a href="{{ route('newslist.index', ['cat_id' => 0]) }}" class="text-dark-gray tz-text" id="tz-slider-text246">{{ $categoriesList[0] }}</a></h3>
                                                    </figcaption>
                                                </figure>
                                            </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
