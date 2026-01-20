@props(["type" => "submit"])

<button {{ $attributes->merge(["class" => "w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition duration-300 transform active:scale-[0.98]", "type" => $type]) }} >{{ $slot }}
</button>