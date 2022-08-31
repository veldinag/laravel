@extends('layouts.admin')
@section('content')
    <div class="offset-2 col-8">
        <br>
        <h2>Edit source</h2>
        <form method="post" action="{{route('admin.sources.update', ['source' => $source])}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $source->name }}">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" name="link" id="link" value="{{ $source->link }}">
            </div><br>
            <button class="btn btn-success" type="submit">Save</button>
        </form>
    </div>
@endsection
