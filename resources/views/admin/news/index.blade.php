@extends('layouts.admin')
@section('content')
    <h2>News list</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($newsList as $key => $news)
            <tr>
                <td>{{$key}}</td>
                <td>{{$news['title']}}</td>
                <td>{{$news['author']}}</td>
                <td>{{$news['category']}}</td>
                <td>{{$news['status']}}</td>
                <td>{{$news['created_at']->format('d-m-Y H:i')}}</td>
                <td>
                    <a href="{{route('admin.news.edit', ['news'=>$key])}}">Edit</a>&nbsp;
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
