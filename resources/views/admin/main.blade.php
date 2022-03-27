@extends('admin.layouts.admin')

@section('content')
    <div class="admin-container">
        @if(Session::has('message'))
            <div class="flash-message flash-error">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif

        <h1>Admin Main Dashboard page</h1>
        <br>
        <a href="{{ route('admin.logout') }}">logout</a>
    </div>
@endsection
