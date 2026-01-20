@props(["id"])


<form {{ $attributes->merge(["class" => "space-y-5", "id" => $id ?? ""]) }} method="GET">
    @if ($attributes->get('method', 'GET') !== 'GET' )
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>

