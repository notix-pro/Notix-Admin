@extends('admin.layouts.admin')

@section('content')
    <div class="login-form">
        @if(Session::has('message'))
            <div class="flash-message flash-error">
                <p>{{ __(Session::get('message')) }}</p>
            </div>
            <script>
                hideElement('.flash-message', 3000);
            </script>
        @endif

        <div class="form-card">
            <div class="form-header">
                <h3>@lang('admin/login.login_header')</h3>
            </div>
            <div class="form-content">
                @if(session()->has('success'))
                    MESS: {{ session()->get('success') }}
                @endif

                @foreach($errors->all() as $error)
                    <div class="form-alert form-alert-danger">{{ $error }}</div>
                @endforeach

                <form method="post" action="{{ route('admin.login.submit') }}">
                    @csrf
                    <x-Admin.form.inputs.input inputId="login_username" inputName="login_username" :inputPlaceholder="__('admin/login.input.placeholder_login_username')" :labelText="__('admin/login.input.login_label_text_login')" />
                    <x-Admin.form.inputs.input inputType="password" inputId="login_password" inputName="login_password" :inputPlaceholder="__('admin/login.input.placeholder_login_password')" :labelText="__('admin/login.input.login_label_text_password')" />

                    <x-Admin.form.buttons.large-submit buttonId="login_submit" buttonName="login_submit" :buttonText="__('admin/login.input.login_submit_text')" />
                </form>
            </div>
            <div class="form-footer"></div>
        </div>
    </div>
@endsection
