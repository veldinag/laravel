@extends('layouts.admin')
@section('content')
    <div class="offset-2 col-8">
        <br>
        <h2>Edit user profile</h2>

        @include('inc.message')

        <form method="post" action="{{route('admin.users.update', ['user' => $user])}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" id="name"
                       value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email"
                       value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm password</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password">
            </div>
            <br>
            <div class="form-group">
                <div class="form-check form-switch">
                    <label class="form-check-label" for="is_admin">Is admin</label>
                    <input class="form-check-input" type="checkbox" name="is_admin" id="is_admin" @if($user->is_admin) checked @endif>
                </div>
            </div>
            <br>
            <button class="btn btn-success" type="submit">Save</button>
        </form>

    </div>
@endsection
