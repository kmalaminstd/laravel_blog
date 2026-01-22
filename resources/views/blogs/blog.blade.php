<x-home-layout>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col lg:flex-row gap-12">

        <aside class="hidden lg:flex flex-col gap-6 sticky top-28 h-fit">

            <form action="/post/like/{{ $post->id }}" method="POST">
                @csrf
                <button type="submit" class="w-12 h-12 rounded-full border border-gray-100 flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition group">
                    @if ($post->likes()->where('user_id', auth()->id())->exists())
                        <i class="fa-classic fa-solid fa-heart text-red-500"></i>
                    @else
                        <i class="fa-regular fa-heart"></i>
                    @endif
                    
                    <span class="absolute ml-16 bg-gray-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100">Like</span>
                </button>
            </form>

            <button class="w-12 h-12 rounded-full border border-gray-100 flex items-center justify-center hover:bg-blue-50 hover:text-blue-500 transition group">
                <i class="fa-regular fa-comment"></i>
                <span class="absolute ml-16 bg-gray-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100">Comment</span>
            </button>
            <button class="w-12 h-12 rounded-full border border-gray-100 flex items-center justify-center hover:bg-gray-50 hover:text-gray-900 transition group">
                <i class="fa-regular fa-bookmark"></i>
                <span class="absolute ml-16 bg-gray-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100">Save</span>
            </button>
        </aside>

        <article class="flex-1 max-w-3xl mx-auto">
            <div class="flex items-center gap-2 text-xs font-bold text-blue-600 uppercase tracking-widest mb-4">
                <a href="#">{{ $post->category->name }}</a>
            </div>

            <h1 class="text-4xl md:text-5xl font-black text-gray-900 leading-tight mb-6">
                {{ $post->title }}
            </h1>

            <div class="flex items-center gap-4 mb-10 pb-10 border-b border-gray-100">
                <img src="{{ $post->user->logo ? asset('storage/'. $post->user->logo) : asset('images/user.png') }}" class="w-12 h-12 rounded-full object-cover">

                <div>
                    <div class="flex items-center gap-2">
                        <a href="/{{ Auth::id() === $post->user->id ? 'manage/profile' : 'public-profile' }}/{{  Auth::id() !== $post->user->id ?$post->user->id : '' }}{{ Auth::id() !== $post->user->id ? '/' . Str::slug($post->user->name) : '' }}" class="font-bold text-gray-900">{{ $post->user->name }}</a>
                        @if (auth()->id() !== $post->user->id )
                            <form action="/follow/{{$post->user->id}}" method="POST">
                                @csrf
                                <button class="text-xs font-bold text-blue-600 hover:text-blue-800">{{ $post->user->followers()->where('follower_id', Auth::id())->exists() ? 'Following' : 'Follow' }}</button>
                            </form>
                        @endif
                        </div>
                        <p class="text-xs text-gray-500">Published {{ $post->created_at->format('D m, y') }}</p>
                    </div>
                    
                </div>

            <figure class="mb-10">
                <img src="{{ asset('storage/'.$post->image) }}" class="rounded-3xl w-full shadow-lg">
            </figure>

           <div>

            {!! $post->description !!}

           </div>

            <div class="flex flex-wrap gap-2 mt-12 mb-16">

                @foreach ($post->tags as $tag)
                    <a href="/tags/{{ strtolower($tag->name) }}" class="bg-gray-100 px-4 py-1.5 rounded-full text-xs font-semibold text-gray-600 hover:bg-gray-200">#{{ $tag->name }}</a>
                @endforeach

                
            </div>

            <section class="border-t border-gray-100 pt-12" id="comments">
                <div class="flex gap-10">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">Comments ({{ $post->comments->count() }})</h3>

                    <h3 class="text-2xl font-bold text-gray-900 mb-8">Likes ({{ $post->likes()->count() }})</h3>
                </div>

                <div class="flex gap-4 mb-10">
                    <img src="{{ $post->user->logo ? asset('/storage' . $post->user->logo) : asset('images/user.png') }}" class="w-10 h-10 rounded-full shrink-0">
                    <div class="flex-1">
                        <form method="post" action="/manage/comments/{{ $post->id }}">
                            @csrf
                            <textarea name="text" placeholder="What are your thoughts?"
                                class="w-full bg-gray-50 border border-gray-200 rounded-2xl p-4 text-sm outline-none focus:ring-2 focus:ring-blue-500 h-24 transition resize-none"></textarea>
                            <div class="flex justify-end mt-2">
                                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-bold hover:bg-blue-700 transition">Post
                                    Comment</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="space-y-8">
                    @foreach ($post->comments as $comment)
                        
                        <div class="flex gap-4">
                            <a href="/{{ Auth::id() === $comment->user->id ? 'manage/profile' : 'public-profile' }}/{{  Auth::id() !== $comment->user->id ?$comment->user->id : '' }}{{ Auth::id() !== $comment->user->id ? '/' . Str::slug($comment->user->name) : '' }}">
                                <img src="{{ $comment->user->logo ? asset('storage/' . $comment->user->logo) : asset('images/user.png') }}" class="w-10 h-10 rounded-full shrink-0">
                            </a>
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="font-bold text-sm">{{ $comment->user->name }}</h4>
                                    <span class="text-xs text-gray-400">{{ $comment->created_at->format('d M, Y') }}</span>
                                </div>
                                <p class="text-sm text-gray-600">
                                    {{$comment->text}}
                                </p>
                                <div>
                                    <form action="/comment/delete/{{ $comment->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </section>
        </article>

        <aside class="lg:w-80 space-y-12">
            <div>
                <h3 class="font-bold text-gray-900 mb-6 pb-2 border-b-2 border-blue-600 inline-block">More from Alex
                    Rivera</h3>
                <div class="space-y-6">
                    <a href="#" class="group block">
                        <h4 class="font-bold text-gray-800 group-hover:text-blue-600 transition mb-1 leading-snug">The
                            10 Best VS Code Extensions for 2026</h4>
                        <span class="text-xs text-gray-400">5 min read</span>
                    </a>
                    <a href="#" class="group block">
                        <h4 class="font-bold text-gray-800 group-hover:text-blue-600 transition mb-1 leading-snug">
                            Mastering CSS Container Queries</h4>
                        <span class="text-xs text-gray-400">12 min read</span>
                    </a>
                </div>
            </div>

            <div class="bg-blue-600 rounded-2xl p-6 text-white text-center">
                <h3 class="font-bold text-lg mb-2">Subscribe to BlogHub</h3>
                <p class="text-blue-100 text-sm mb-4">Get the latest stories delivered to your inbox.</p>
                <input type="email" placeholder="Email address"
                    class="w-full p-2.5 rounded-lg text-gray-900 text-sm mb-3">
                <button
                    class="w-full bg-white text-blue-600 font-bold py-2 rounded-lg text-sm hover:bg-blue-50 transition">Join
                    Now</button>
            </div>
        </aside>
    </main>
    
</x-home-layout>
