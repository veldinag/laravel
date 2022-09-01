@extends('layouts.admin')
@section('content')
    <h2>Sources list</h2>
    <div class="row">
        <div class="col-12">
            <a href="{{route('admin.sources.create')}}"
               style="float:right"
               class="btn btn-primary">
                Add source
            </a>
        </div>
    </div>
    <br>
    <div class="table-responsive">

        @include('inc.message')

        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Link</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($sources as $source)
                <tr>
                    <td>{{ $source->id }}</td>
                    <td>{{ $source->name }}</td>
                    <td>{{ $source->link }}</td>
                    <td>{{date('d.m.Y m:H', strtotime($source->created_at))}}</td>
                    <td class="btn-group btn-group-sm" role="group" aria-label="Action buttons">
                        <a class="btn btn-outline-secondary btn-sm" href="{{route('admin.sources.edit', ['source'=>$source])}}">Edit</a>
                        <form method="POST" action="{{route('admin.sources.destroy', ['source'=>$source])}}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-secondary btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No sources</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $sources->links() }}
    </div>
@endsection
