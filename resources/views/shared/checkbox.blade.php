@php
$class ??= null;
@endphp

<div @class(["flex items-center", $class])>
    <input id="default-checkbox" type="hidden" value="0" name="{{ $name }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <input @checked(old($name, $value ?? false)) id="default-checkbox-checked" type="checkbox" value="1" name="{{ $name }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="{{ $name }}" class="form-check-label text-sm font-medium text-gray-400 dark:text-gray-500">{{ $placeholder }}</label>
    @error($name)
    <p class="text-red-500 text-xs mt-1">
        {{ $message }}
    </p>
    @enderror
</div>
