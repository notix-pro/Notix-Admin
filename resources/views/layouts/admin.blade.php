<!doctype html>
<html lang="{{ trans('static.site_locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ trans('static.site_name') }}</title>

    @include('_static/_styles')
</head>
<body>
    <div class="app-wrapper">
        <header class="app-header">

        </header>
        <div class="app-body">
            <main>
                <div class="container">
                    <!-- Top of the top messages, errors etc. -->

                    @yield('content')
                </div>
            </main>
            @auth
                <form action="{{ route('admin.logout') }}" method="post" style="display: none;" >
                    @csrf
                </form>
            @endauth
        </div>
    </div>
<!-- Scripts -->
</body>
</html>
