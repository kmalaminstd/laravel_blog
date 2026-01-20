@props(['post'])

<article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition group border border-gray-100">
    <div class="h-48 overflow-hidden">
        <img src="{{ asset('storage/'. $post->image) }}"
            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
    </div>
    <div class="p-5">
        <span class="text-green-600 text-xs font-bold uppercase tracking-wider">
            {{ $post->category->name }}
        </span>
        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3 leading-snug group-hover:text-blue-600 transition">
            <a href="/blog/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </h3>
        <div class="flex items-center justify-between text-gray-500 text-xs">
            <span class="flex items-center gap-1"><i class="fa-regular fa-calendar"></i> 
                {{ $post->created_at->format('M d, Y') }}
            </span>
            <span class="flex items-center gap-1"><i class="fa-regular fa-comment"></i> 8</span>
        </div>
    </div>
</article>
