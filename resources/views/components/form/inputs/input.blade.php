<div class="form-box {{ $attributes['optionalClasses'] }}">
    <label for="{{ $attributes['inputId'] }}">{{ $attributes['labelText'] }}</label>
    @if ($attributes['isRequired'])
        <span class="required">*</span>
    @endif
    <input
        type="{{ $attributes['inputType'] ?? 'text' }}"
        id="{{ $attributes['inputId'] }}"
        class="{{ $attributes['optionalInputClasses'] ?? null }}"
        name="{{ $attributes['inputName'] }}"
        placeholder="{{ $attributes['inputPlaceholder'] }}"
        @if ($attributes['isRequired'])
            required
        @endif >
</div>
