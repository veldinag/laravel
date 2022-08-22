@extends('layouts.main')
@section('title') Add New Feedback @parent @endsection
@section('content')
    <div id="page" class="page">
        <section class="bg-white builder-bg padding-110px-tb xs-padding-60px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text" id="tz-slider-text244">ADD NEW FEEDBACK</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 padding-eighteen-left">
                    <form method="post" action="{{route('feedback.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="feedback">Your feedback</label>
                            <textarea class="form-control" name="feedback" id="feedback">{!!old('feedback')!!}</textarea>
                        </div><br>
                        <button class="btn btn-success" type="submit">Add feedback</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

