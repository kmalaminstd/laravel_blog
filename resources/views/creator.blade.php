<x-home-layout>
    
    <div class="flex flex-wrap -mx-4 items-stretch">
        @foreach ($creators as $creator)
            <x-creator-card :creator="$creator" />
        @endforeach

    </div>

</x-home-layout>
