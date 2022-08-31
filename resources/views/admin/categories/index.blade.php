@extends('layouts.admin')
@section('content')
    <h2>Categories list</h2>
    <div class="row">
        <div class="col-12">
            <a href="{{route('admin.categories.create')}}"
               style="float:right"
               class="btn btn-primary">
                Add category
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
                <th scope="col">Title</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{date('d.m.Y m:H', strtotime($category->created_at))}}</td>
                    <td class="btn-group btn-group-sm" role="group" aria-label="Action buttons">
                        <a class="btn btn-outline-secondary btn-sm" href="{{route('admin.categories.edit', ['category'=>$category])}}">Edit</a>
                        <form method="POST" action="{{route('admin.categories.destroy', ['category'=>$category])}}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-secondary btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No categories</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
@endsection
