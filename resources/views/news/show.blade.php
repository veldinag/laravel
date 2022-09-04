@extends('layouts.main')
@section('title') News @parent @endsection
@section('content')

    <div id="page" class="page">
        <section class="padding-110px-tb xs-padding-60px-tb bg-white builder-bg" id="content-section23">
            <div class="container">
                <div class="row equalize sm-equalize-auto equalize-display-inherit">
                    <div class="col-md-5 col-sm-12 col-xs-12 display-table sm-margin-fifteen-bottom" style="height: 401px;">
                        <div class="display-table-cell-vertical-middle">
                            <img src="{{asset('assets/img/agency-work-10.jpeg')}}" data-img-size="(W)800px X (H)650px" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 display-table margin-six-left sm-no-margin" style="height: 401px;">
                        <div class="display-table-cell-vertical-middle">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="title-extra-large alt-font sm-section-title-medium xs-title-extra-large text-dark-gray margin-five-bottom xs-margin-ten-bottom tz-text">{{ $news->title }}</h2>
                                    <span class="text-extra-large sm-text-extra-large font-weight-300 margin-ten-bottom xs-margin-fifteen-bottom display-block tz-text">{{ $news->text }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul class="list-style-none">
                                        <li class="position-relative padding-left-30px line-height-34 text-medium"><i class="fa fa-check text-dark-gray tz-icon-color position-left position-absolute icon-extra-small line-height-34"></i><span class="tz-text">Author: {{ $news->author }}</span></li>
                                        <li class="position-relative padding-left-30px line-height-34 text-medium"><i class="fa fa-check text-dark-gray tz-icon-color position-left position-absolute icon-extra-small line-height-34"></i><span class="tz-text">Category: {{ $news->category->title }}</span></li>
                                        <li class="position-relative padding-left-30px line-height-34 text-medium"><i class="fa fa-check text-dark-gray tz-icon-color position-left position-absolute icon-extra-small line-height-34"></i><span class="tz-text">Created at: {{ date('d.m.Y m:H', strtotime($news->created_at)) }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section></div>
    s
@endsection
