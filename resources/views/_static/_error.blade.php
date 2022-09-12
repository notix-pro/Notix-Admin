<!doctype html>
<html lang="{{ trans('static.site_locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ trans('static.site_name') }} - {{ __('errors.error.' . $error . '.title') }}</title>

    <script src="https://kit.fontawesome.com/ec6d6a4c89.js" crossorigin="anonymous"></script>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            align-content: center;
            height: 100vh;
        }
        .code {
            font-size: 2.5em;
            font-weight: bold;
        }
        .message {
            font-size: 1.5em;
            font-weight: bold;
            margin-top: 1rem;
            text-transform: uppercase;
        }
        .container a {
            top: 0;
            right: 0;
            font-size: 1.5em;
            margin: 10px 20px;
            position: fixed;
            text-decoration: none;
            color: #0b0b0b;
            text-transform: uppercase;
            display: flex;
            align-items: center;
        }
        .container a i {
            font-size: 2em;
        }
    </style>
</head>
<body>
<div class="app-wrapper">
    <div class="app-body">
        <main>
            <div class="container">
                <a href="{{ url()->route('home') }}"><i class="fa-solid fa-angle-left"></i>&nbsp;@lang('errors.error_page.back-home')</a>
                <div class="code">{{ $error }}</div>
                <div class="message">{{ __('errors.error.' . $error . '.message') }}</div>
            </div>
        </main>
    </div>
</div>
<!-- Scripts -->
</body>
</html>
