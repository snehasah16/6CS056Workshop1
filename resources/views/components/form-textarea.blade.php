
@props([
    'name',
    'label',
    'value' => null,
])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror
</div>
