@extends('layouts.admin')
@section('content')
    <div class="offset-2 col-8">
        <br>
        <h2>Parse news</h2>

        @include('inc.message')

        <form method="post" action="{{ route('admin.parser.store') }}">
            @csrf
            <div class="form-group">
                <label for="source_id">Source</label>
                <select class="form-control" name="source_id" id="source_id">
                    <option value="0">select</option>
                    @foreach($sources as $source)
                        <option value="{{ $source->id }}" @if(old('source_id') === $source->id) selected @endif>
                            {{ $source->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            <button class="btn btn-success" type="submit">Get news from source</button>
        </form>
    </div>
@endsection
