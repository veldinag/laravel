@extends('layouts.main')
@section('title') Unloading Order @parent @endsection
@section('content')
    <div id="page" class="page">
        <section class="bg-white builder-bg padding-110px-tb xs-padding-60px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2>Your unloading oder saved in file {{$pathname}} </h2>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
