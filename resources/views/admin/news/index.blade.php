@extends('layouts.admin')
@section('content')
    <h2>News list</h2>
    <div class="row">
        <div class="col-12">
            <a href="{{route('admin.news.create')}}"
               style="float:right"
               class="btn btn-primary">
                Add news
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
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($newsList as $news)
            <tr>
                <td>{{$news->id}}</td>
                <td>{{$news->title}}</td>
                <td>{{$news->author}}</td>
                <td>{{$news->category->title}}</td>
                <td>{{$news->status}}</td>
                <td>{{date('d.m.Y m:H', strtotime($news->created_at))}}</td>
                <td class="btn-group btn-group-sm" role="group" aria-label="Action buttons">
                    <a class="btn btn-outline-secondary btn-sm" href="{{route('admin.news.edit', ['news'=>$news])}}">Edit</a>
                    <form method="POST" action="{{route('admin.news.destroy', ['news'=>$news->id])}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-secondary btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="7">No news</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $newsList->links() }}
    </div>
@endsection
