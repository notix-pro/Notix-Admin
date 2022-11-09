<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">

@if(\Illuminate\Http\Request::capture()->is('admin/login'))
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
@endif
