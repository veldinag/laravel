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
                    <td>
                        <a href="{{route('admin.categories.edit', ['category'=>$category->id])}}">Edit</a>&nbsp;
                        <a href="#" style="color: red;">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No news</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
