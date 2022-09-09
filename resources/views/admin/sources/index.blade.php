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
                <th scope="col">№</th>
                <th scope="col">Name</th>
                <th scope="col">Link</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
            @forelse($sources as $source)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $source->name }}</td>
                    <td>{{ $source->link }}</td>
                    <td>{{ $source->category->title }}</td>
                    <td>
                        <a href="{{route('admin.sources.edit', ['source'=>$source])}}">Edit</a>
                        <a class="delete" href="javascript:;" rel="{{ $source->id }}" style="color:red;">Delete</a>
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

@push('js')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            let elements = document.querySelectorAll('.delete');
            elements.forEach((e, k) => {
                e.addEventListener("click", () => {
                    const id = e.getAttribute('rel');
                    if(confirm(`Подтверждаете удаление записи с ID = ${id}`)) {
                        send(`/admin/sources/${id}`).then(() => {
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
