@extends('layouts.admin')
@section('content')
    <div class="offset-2 col-8">
        <br>
        <h2>Edit news</h2>

        @include('inc.message')

        <form method="post" action="{{ route('admin.news.update', ['news' => $news]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="0">select</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($news->category_id === $category->id) selected @endif>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="source_id">Source</label>
                <select class="form-control" name="source_id" id="source_id">
                    <option value="0">select</option>
                    @foreach($sources as $source)
                        <option value="{{ $source->id }}" @if($news->source_id === $source->id) selected @endif>
                            {{ $source->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $news->title }}">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="author" id="author" value="{{ $news->author }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    <option @if($news->status === 'ACTIVE') selected @endif>ACTIVE</option>
                    <option @if($news->status === 'DRAFT') selected @endif>DRAFT</option>
                    <option @if($news->status === 'BLOCKED') selected @endif>BLOCKED</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description">{{ $news->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea class="form-control" name="text" id="text">{{ $news->text }}</textarea>
            </div>
            <br>
            <button class="btn btn-success" type="submit">Save</button>
        </form>

    </div>
@endsection
