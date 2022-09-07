@extends('layouts.app')
@section('content')
    <div class="row offset-2">
        <h2>Hello, {{ Auth::user()->name }}</h2>
        <br>
        @if(Auth::user()->is_admin === true)
            <a href="{{ route('admin.index') }}">Admin Panel</a>
        @endif
    </div>
@endsection