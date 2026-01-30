<x-admin-layout>
    <div class="p-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-2xl font-black text-slate-900 uppercase tracking-tight italic">Content Moderation</h2>
                <p class="text-slate-500 text-sm font-medium">Review, feature, or remove community articles</p>
            </div>
            <div class="flex gap-2">
                <button class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-50">All Posts</button>
                <button class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm font-bold text-amber-600 hover:bg-amber-50">Pending Review</button>
            </div>
        </div>

        <div class="flex flex-col gap-4">

            @foreach ($posts as $post)
                
                <div class="bg-white p-4 rounded-[2rem] border border-slate-200 shadow-sm flex flex-col md:flex-row items-center gap-6 hover:border-blue-200 transition">
                    <img src="{{ asset('storage/' . $post->image) }}" class="w-full md:w-32 h-24 rounded-2xl object-cover shrink-0">
                    
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[10px] font-black bg-slate-100 text-slate-500 px-2 py-0.5 rounded uppercase"> {{ $post->category->name }} </span>
                            <span class="text-xs text-slate-400">{{ $post->created_at->timezone('Asia/Dhaka')->format('D d M, Y, H : i A') }}</span>
                        </div>
                        <h3 class="font-bold text-slate-900 truncate"> <a href="/blog/{{ $post->id }}">{{ $post->title }}</a> </h3>
                        <a href="{{ auth()->user()->id === $post->user->id ? '/manage/profile' : '/public-profile/' . $post->user->id . '/' . Str::slug($post->user->name) }}" class="flex items-center gap-2 mt-1">
                            <img src=" {{$post->user->logo ? asset('storage/' . $post->user->logo) : asset('images/user.png')}} " class="w-5 h-5 rounded-full">
                            <span class="text-xs text-slate-500 font-medium"> {{ $post->user->name }} </span>
                        </a>
                    </div>

                    <div class="flex gap-6 px-6 border-x border-slate-100 hidden lg:flex">
                        <div class="text-center">
                            <span class="block text-sm font-black text-slate-900">{{ $post->comments->count() }}</span>
                            <span class="text-[10px] text-slate-400 font-bold uppercase">Comments</span>
                        </div>
                        <div class="text-center">
                            <span class="block text-sm font-black text-slate-900">{{ $post->likes->count() }}</span>
                            <span class="text-[10px] text-slate-400 font-bold uppercase">Likes</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2">
                        <form action="/admin/featurepost/{{ $post->id }}" method="POST">
                            @csrf
                            <button title="Feature Post" class="p-3  {{ $post->featured ? 'bg-amber-50 text-amber-600' : '' }} rounded-xl hover:bg-amber-100 transition">
                                <i class="fa-solid fa-star"></i>
                            </button>
                        </form>
                        <button title="Edit" class="p-3 bg-blue-50 text-blue-600 rounded-xl hover:bg-blue-100 transition">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button title="Delete" class="p-3 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-100 transition">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>

            @endforeach

            <div class="bg-white">
                {{ $posts->links() }}
            </div>

        </div>

    </div>
</x-admin-layout>