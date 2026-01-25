<x-manage-layout>

    <div class="px-4 pt-3">

        <div class="bg-white rounded-3xl border border-gray-200 shadow-sm overflow-hidden mb-10">
            <div class="h-32 bg-gradient-to-r from-blue-600 to-indigo-700"></div>

            <div class="px-8 pb-8">
                <div class="relative flex flex-col md:flex-row md:items-end -mt-12 gap-6">
                    <img src="{{ $user->logo ? asset('storage/' . $user->logo) : asset('images/user.png') }}"
                        class="w-32 h-32 rounded-2xl border-4 border-white shadow-md object-cover bg-white">

                    <div class="flex-1">
                        <h1 class="text-3xl font-black text-gray-900">{{ $user->name }}</h1>

                        <p class="text-gray-500 font-medium bg-white py-2 px-4">{{ $user->designation }}</p>

                        <div class="flex gap-6 mt-4">
                            <div class="text-center md:text-left">
                                <span class="block text-xl font-bold text-gray-900">{{ $user->followers()->count() }}</span>
                                <span class="text-xs text-gray-400 uppercase font-bold tracking-widest">Followers</span>
                            </div>
                            <div class="text-center md:text-left">
                                <span class="block text-xl font-bold text-gray-900">{{ $user->posts()->where('published', true)->count() }}</span>
                                <span class="text-xs text-gray-400 uppercase font-bold tracking-widest">Blogs</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-2">
                        <form method="POST" action="/follow/{{ $user->id }}">
                            @csrf
                            <button class="bg-blue-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-100 flex items-center gap-2">

                                @if ($user->followers()->where('follower_id', Auth::id())->exists())
                                    <i class="fa-solid fa-bell"></i> Following
                                @else
                                    <i class="fa-solid fa-plus text-sm"></i> Follow
                                @endif
                                
                            </button>
                        </form>
                        <button class="p-3 border border-gray-200 rounded-xl hover:bg-gray-50 transition text-gray-600">
                            <i class="fa-solid fa-share-nodes"></i>
                        </button>
                    </div>
                </div>

                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8 pt-8 border-t border-gray-100">
                    <div class="md:col-span-2">
                        <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-2">About</h3>
                        <p class="text-gray-700 leading-relaxed">
                           {{ $user->bio }}
                        </p>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-3">Links</h3>
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition">
                                <i class="fa-solid fa-globe"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-4xl">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center gap-3">
                Published Stories
                <span class="text-sm font-normal text-gray-400 bg-gray-100 px-3 py-1 rounded-full">{{ $user->posts()->where('published', true)->count() }}</span>
            </h2>

            <div class="space-y-8">
                
                @foreach ($posts as $post)
                    
                    <x-article-wide :post="$post" />
                    
                @endforeach

                

            </div>

            <div class="w-full mt-10 bg-white border border-gray-200 rounded-2xl font-bold text-gray-500 hover:bg-gray-50 transition uppercase tracking-widest text-xs">
                {{ $posts->links() }}
            </div>
        </div>

    </div>

</x-manage-layout>
