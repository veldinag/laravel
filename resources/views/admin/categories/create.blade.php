@extends('layouts.admin')
@section('content')
    <div class="offset-2 col-8">
        <br>
        <h2>Add category</h2>

        @include('inc.message')

        <form method="post" action="{{route('admin.categories.store', ['status=1'])}}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description">{!!old('description')!!}</textarea>
            </div><br>
            <button class="btn btn-success" type="submit">Add category</button>
        </form>
    </div>
@endsection
