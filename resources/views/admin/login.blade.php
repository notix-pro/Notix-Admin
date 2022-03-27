@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="">
            @if(Session::has('message'))
                <p>{{ Session::get('message') }}</p>
            @endif
        </div>

        <h1>Wrapper Login</h1>
        <x-form.inputs.input inputId="Input Id" inputName="Input Name" inputPlaceholder="Input Placeholder" labelText="Label Text" />
        <br><br>
        <x-form.select selectId="Select Id" selectName="Select Name" labelText="Label Text"
            :options="['' => 'Wybierz','option1' => 'Option 1', 'option2' => 'Option 2']"/>

    </div>
@endsection
