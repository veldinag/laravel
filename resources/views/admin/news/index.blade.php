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
                <th scope="col">№</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
            @forelse($newsList as $news)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$news->title}}</td>
                <td>{{$news->author}}</td>
                <td>{{$news->category->title}}</td>
                <td>{{$news->status}}</td>
                <td>{{date('d.m.Y m:H', strtotime($news->created_at))}}</td>
                <td>
                    <a href="{{route('admin.news.edit', ['news'=>$news])}}">Edit</a>
                    <a class="delete" href="javascript:;" rel="{{ $news->id }}" style="color:red;">Delete</a>
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

@push('js')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            let elements = document.querySelectorAll('.delete');
            elements.forEach((e, k) => {
                e.addEventListener("click", () => {
                    const id = e.getAttribute('rel');
                        if(confirm(`Подтверждаете удаление записи с ID = ${id}`)) {
                            send(`/admin/news/${id}`).then(() => {
                                window.location.reload();
                            });
                        } else {
                            alert("Удаление отменено");
                        }
                });
            });
        });

        async function send(url) {
            let response = await fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            let result = await response.json();
            return result.ok;
        }

    </script>
@endpush
