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
                        <a href="{{route('admin.categories.edit', ['category'=>$category])}}">Edit</a>
                        <a class="delete" href="javascript:;" rel="{{ $category->id }}" style="color:red;">Delete</a>

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

@push('js')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            let elements = document.querySelectorAll('.delete');
            elements.forEach((e, k) => {
                e.addEventListener("click", () => {
                    const id = e.getAttribute('rel');
                    if(confirm(`Подтверждаете удаление записи с ID = ${id}`)) {
                        send(`/admin/categories/${id}`).then(() => {
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
