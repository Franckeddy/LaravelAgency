@php
$placeholder ??= null;
$type ??= 'text';
$class ??= null;
$name ??= '';
$value ??= '';
$label ??= ucfirst($name);
$rows ??= 8;
@endphp

<div @class([$class])>
    <label @class([$class]) for="{{ $name }}">{{ $placeholder }}</label>
    @if($type === 'textarea')
        <textarea
            class="w-full rounded-lg border-gray-200 p-3 text-sm @error($name) border-red-500 @enderror"
            placeholder="{{ $placeholder }}"
            name="{{ $name }}"
            type="{{ $type }}"
            id="{{ $name }}"
            rows="{{ $rows }}"
        >{{ old($name, $value) }}</textarea>
    @else
    <input
        class="w-full rounded-lg border-gray-200 p-3 text-sm @error($name) border-red-500 @enderror"
        placeholder="{{ $placeholder }}"
        name="{{ $name }}"
        type="{{ $type }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
    />
    @endif
    @error($name)
        <p class="text-red-500 text-xs mt-1">
            {{ $message }}
        </p>
    @enderror
</div>
