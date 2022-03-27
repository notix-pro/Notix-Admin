<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">

@if(\Illuminate\Http\Request::capture()->is('admin/login'))
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
@endif
