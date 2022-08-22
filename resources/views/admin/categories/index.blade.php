@extends('layouts.admin')
@section('content')
    <h2>Categories list</h2>
    <a href="{{route('admin.categories.create')}}" style="float:right" class="btn btn-primary">Add category</a>
    <div class="table-responsive">
    </div>
@endsection
