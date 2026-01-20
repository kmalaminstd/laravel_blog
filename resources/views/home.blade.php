<x-home-layout>

    <x-feature-post :featuredPost=$featuredPost />
    
    <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-2/3">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-bolt text-yellow-500"></i> Latest Stories
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        
                        @foreach ($latestPosts as $post )
                            <x-article :post=$post />
                        @endforeach
                        
                    </div>
                </div>
    
                <aside class="lg:w-1/3 space-y-10">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-l-4 border-blue-600 pl-3">Categories</h3>
                        <div class="space-y-2">
                            @foreach ($categories as $category)
                                <a href="/category/{{ strtolower($category->name) }}" class="flex justify-between items-center p-3 bg-white rounded-xl border border-gray-100 hover:border-blue-300 transition group">
                                <span class="text-gray-700 group-hover:text-blue-600">
                                    {{ $category->name }}
                                </span>
                                <span class="bg-gray-100 text-gray-500 text-xs px-2 py-1 rounded-md">{{ $category->posts()->where('published', true)->count() }}</span>
                            </a>
                            @endforeach
                            
                        </div>
                    </div>
    
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-l-4 border-blue-600 pl-3">Popular Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="bg-gray-200 hover:bg-blue-100 hover:text-blue-600 text-gray-600 px-3 py-1.5 rounded-lg text-sm transition">#Javascript</a>
                            <a href="#" class="bg-gray-200 hover:bg-blue-100 hover:text-blue-600 text-gray-600 px-3 py-1.5 rounded-lg text-sm transition">#Tailwind</a>
                            <a href="#" class="bg-gray-200 hover:bg-blue-100 hover:text-blue-600 text-gray-600 px-3 py-1.5 rounded-lg text-sm transition">#UIUX</a>
                            <a href="#" class="bg-gray-200 hover:bg-blue-100 hover:text-blue-600 text-gray-600 px-3 py-1.5 rounded-lg text-sm transition">#Writing</a>
                            <a href="#" class="bg-gray-200 hover:bg-blue-100 hover:text-blue-600 text-gray-600 px-3 py-1.5 rounded-lg text-sm transition">#Career</a>
                        </div>
                    </div>
                </aside>
    </div>



    <x-newsletter-wide />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Featured Creators</h2>
                <p class="text-gray-500 text-sm">Meet the voices shaping the community</p>
            </div>
            <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center gap-1">
                View all <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 text-center hover:shadow-lg transition duration-300">
                <img src="https://i.pravatar.cc/150?u=1" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-blue-50">
                <h4 class="font-bold text-gray-800 text-lg">Sarah Jenkins</h4>
                <p class="text-gray-500 text-sm mb-4">Tech Architect</p>
                <button class="text-blue-600 text-sm font-bold hover:bg-blue-50 w-full py-2 rounded-lg border border-blue-100 transition">
                    Follow
                </button>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 text-center hover:shadow-lg transition duration-300">
                <img src="https://i.pravatar.cc/150?u=2" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-blue-50">
                <h4 class="font-bold text-gray-800 text-lg">Marcus Chen</h4>
                <p class="text-gray-500 text-sm mb-4">UX Designer</p>
                <button class="text-blue-600 text-sm font-bold hover:bg-blue-50 w-full py-2 rounded-lg border border-blue-100 transition">
                    Follow
                </button>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 text-center hover:shadow-lg transition duration-300">
                <img src="https://i.pravatar.cc/150?u=3" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-blue-50">
                <h4 class="font-bold text-gray-800 text-lg">Elena Rose</h4>
                <p class="text-gray-500 text-sm mb-4">Growth Lead</p>
                <button class="text-blue-600 text-sm font-bold hover:bg-blue-50 w-full py-2 rounded-lg border border-blue-100 transition">
                    Follow
                </button>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 text-center hover:shadow-lg transition duration-300">
                <img src="https://i.pravatar.cc/150?u=4" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-blue-50">
                <h4 class="font-bold text-gray-800 text-lg">David Vogt</h4>
                <p class="text-gray-500 text-sm mb-4">Fullstack Dev</p>
                <button class="text-blue-600 text-sm font-bold hover:bg-blue-50 w-full py-2 rounded-lg border border-blue-100 transition">
                    Follow
                </button>
            </div>
        </div>
    </section>
</x-home-layout>
