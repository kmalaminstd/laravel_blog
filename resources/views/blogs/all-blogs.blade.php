
<x-home-layout>

    <aside class="w-full lg:w-64 space-y-8 flex-shrink-0 mb-5">
        <div>
            <h3 class="font-bold text-gray-800 uppercase text-xs tracking-wider mb-4">Sort By</h3>
            <form class="flex justify-between w-full gap-10" method="get">
                <select name="q" class="w-full p-3 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                    <option value="newest">Newest First</option>
                    <option value="oldest">Oldest First</option>
                    <option value="popular">Popular</option>
                </select>

                <button class="border bg-blue-600 py-3 px-5 rounded-full text-white">
                    Filter  
                </button>
            </form>
        </div>


    </aside>

    <div class="flex-1 space-y-6">

        @foreach ($posts as $post)
            
            <x-article-wide :post=$post />

        @endforeach

        <div class="bg-white rounded-lg">
            {{ $posts->links() }}
        </div>
    </div>

</x-home-layout>
