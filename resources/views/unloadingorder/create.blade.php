@extends('layouts.main')
@section('title') Unloading Order @parent @endsection
@section('content')
    <div id="page" class="page">
        <section class="bg-white builder-bg padding-110px-tb xs-padding-60px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text" id="tz-slider-text244">UNLOADING ORDER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 padding-eighteen-left">
                    <form method="post" action="{{route('unloadingorder.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Phone</label>
                            <input type="phone" class="form-control" name="phone" id="phone" value="{{old('phone')}}">
                        </div>

                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="order_info">Order info</label>
                            <textarea class="form-control" name="order_info" id="order_info">{!!old('order_info')!!}</textarea>
                        </div><br>
                        <button class="btn btn-success" type="submit">Send order</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
