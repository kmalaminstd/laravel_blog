@props(['featuredPost'])

<section class="mb-12">
    <h2 class="text-sm font-bold uppercase tracking-widest text-blue-600 mb-4">Featured Post</h2>
    <div class="relative h-[400px] rounded-3xl overflow-hidden group cursor-pointer">
        <img src="{{ asset('storage/'. $featuredPost->image) }}"
            alt="Featured" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
        <div class="absolute featured_text_targ inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex flex-col justify-end p-8">
            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full w-fit mb-4">{{ $featuredPost->category->name }}</span>
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
                <a href="/blog/{{ $featuredPost->id }}">{{ $featuredPost->title }}</a>
            </h1>
            <p class="text-white max-w-2xl mb-4 line-clamp-2 feat_short_desc">
                {!! Str::words($featuredPost->description, 20, '...') !!}
            </p>
            <a href="/{{ Auth::id() === $featuredPost->user->id ? 'manage/profile' : 'public-profile' }}/{{  Auth::id() !== $featuredPost->user->id ?$featuredPost->user->id : '' }}{{ Auth::id() !== $featuredPost->user->id ? '/' . Str::slug($featuredPost->user->name) : '' }}" class="flex items-center gap-3 text-white text-sm">
                <img src="{{ $featuredPost->user->logo ? asset( 'storage/'. $featuredPost->user->logo): 'images/user.png' }}" class="w-8 h-8 rounded-full border-2 border-white">
                <span> {{ $featuredPost->user->name }} </span>
            </a>
        </div>
    </div>
</section>
