@extends('layouts.admin')
@section('content')
    <div class="offset-2 col-8">
        <br>
        <h2>Add source</h2>

        @include('inc.message')

        <form method="post" action="{{route('admin.sources.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" name="link" id="link" value="{{old('link')}}">
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="0">select</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if(old('category_id') === $category->id) selected @endif>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>


            <br>
            <button class="btn btn-success" type="submit">Add source</button>
        </form>
    </div>
@endsection
