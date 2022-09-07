@extends('layouts.admin')
@section('content')
    <h2>Users list</h2>
    <div class="row">
        <div class="col-12">

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
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        {{ $user->is_admin ? 'Admin' : 'User' }}
                    </td>
                    <td>
                        <a href="{{route('admin.users.edit', ['user'=>$user])}}">Edit</a>
                        <a class="delete" href="javascript:;" rel="{{ $user->id }}" style="color:red;">Delete</a>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No users</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            let elements = document.querySelectorAll('.delete');
            elements.forEach((e, k) => {
                e.addEventListener("click", () => {
                    const id = e.getAttribute('rel');
                    if(confirm(`Подтверждаете удаление пользователя с ID = ${id}`)) {
                        send(`/admin/users/${id}`).then(() => {
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
