@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Wrapper Login</h1>
        <x-form.inputs.input inputId="Input Id" inputName="Input Name" inputPlaceholder="Input Placeholder" labelText="Label Text" />
        <br><br>
        <x-form.select selectId="Select Id" selectName="Select Name" selectPlaceholder="Select Placeholder" labelText="Label Text"
            :options="['' => 'Wybierz','option1' => 'Option 1', 'option2' => 'Option 2']" />

    </div>
@endsection
