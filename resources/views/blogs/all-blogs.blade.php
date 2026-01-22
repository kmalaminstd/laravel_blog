
<x-home-layout>

    <aside class="w-full lg:w-64 space-y-8 flex-shrink-0 mb-5">
        <div>
            <h3 class="font-bold text-gray-800 uppercase text-xs tracking-wider mb-4">Sort By</h3>
            <select
                class="w-full p-3 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                <option>Newest First</option>
                <option>Oldest First</option>
                <option>Most Viewed</option>
                <option>Most Commented</option>
            </select>
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
