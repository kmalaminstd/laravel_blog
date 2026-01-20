<x-home-layout>

    <h2 class="text-2xl font-bold text-gray-800">Your Results</h2>

    <div class="flex-1 space-y-6">

        @foreach ($posts as $post)
            
            <div class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition duration-300 flex flex-col md:flex-row gap-6">
                <div class="w-full md:w-48 h-48 md:h-32 rounded-xl overflow-hidden flex-shrink-0">
                    <img src="{{ asset('storage/'. $post->image) }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition">
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-blue-600 text-xs font-bold uppercase">{{ $post->category->name }}</span>
                        <span class="text-gray-300 text-xs">•</span>
                        <span class="text-gray-500 text-xs">{{ $post->created_at->format('M d, Y') }}</span>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition mb-2">
                        <a href="/blog/{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <div>
                        <p class="text-gray-600 text-sm line-clamp-2 mb-4">
                            {!! Str::words(strip_tags($post->description), 40, '...') !!}
                        </p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src=" {{ asset('storage/' . $post->user->logo) }} " class="w-6 h-6 rounded-full">
                            <span class="text-xs font-medium text-gray-700"> {{ $post->user->name }} </span>
                        </div>
                        <span class="text-xs text-gray-400"><i class="fa-regular fa-clock mr-1"></i> 8 min read</span>
                    </div>
                </div>
            </div>

        @endforeach

        <div class="bg-white rounded-lg">
            {{ $posts->links() }}
        </div>
    </div>

</x-home-layout>