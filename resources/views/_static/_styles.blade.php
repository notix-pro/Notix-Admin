<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@if(\Illuminate\Http\Request::capture()->is('admin/*'))
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endif
