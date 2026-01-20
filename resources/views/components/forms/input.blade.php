@props(["name", "type" => "text", "label"])

@php
    $defaults = [
        "class" => "w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200",
        "name" => $name,
        "type" => $type
    ]
@endphp

<div>
    @if ($label)
        <label class="block text-sm font-semibold text-gray-700 mb-1"> {{ $label }} </label>
    @endif
    <input {{ $attributes->merge($defaults) }}>
    @error($name)
        {{ $message }}
    @enderror
</div>