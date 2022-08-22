@extends('layouts.main')
@section('title') Feedback @parent @endsection
@section('content')
    <div id="page" class="page">
        <section class="bg-white builder-bg padding-110px-tb xs-padding-60px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text" id="tz-slider-text244">FEEDBACK</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-five-top">
                    <h2 class="text-center">No feedback</h2>
                    <figure class="text-center margin-twenty-top">
                        <a href="{{route('feedback.create')}}" class="btn btn-primary">New feedback</a>
                    </figure>
                </div>
            </div>
        </section>
    </div>
@endsection
