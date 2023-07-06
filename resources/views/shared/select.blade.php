@php
    $placeholder ??= null;
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);
@endphp

<div @class([$class])>
    <label @class([$class]) for="{{ $name }}">{{ $placeholder }}</label>
    <select
        class="w-full rounded-lg border-gray-200 p-3 text-sm @error($name) border-red-500 @enderror"
        placeholder="{{ $placeholder }}"
        name="{{ $name }}[]"
        id="{{ $name }}"
        {{ $multiple ? 'multiple' : '' }}
    >
        @foreach($options as $k => $v)
            <option @selected($value->contains($k)) value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>
    @error($name)
    <p class="text-red-500 text-xs mt-1">
        {{ $message }}
    </p>
    @enderror
</div>
