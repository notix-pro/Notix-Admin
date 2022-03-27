<div class="form-box {{ $attributes['optionalClasses'] }}">
    <label for="{{ $attributes['selectId'] }}">{{ $attributes['labelText'] }}</label>
    @if ($attributes['isRequired'])
        <span class="required">*</span>
    @endif
    <select id="{{ $attributes['selectId'] }}" name="{{ $attributes['selectName'] }}" @if ($attributes['isRequired']) required @endif >
        @foreach($attributes['options'] as $key => $value)
            <option value="{{ $key }}" {{ $attributes['value'] == $key ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    </select>
</div>
