<x-manage-layout>
    <div class="px-5">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm mt-8 overflow-hidden">
    
            <div class="p-6 border-b border-gray-100 mb-8">
                <h3 class="font-bold text-gray-800">Saved Posts</h3>
            </div>
    
            <div class="divide-y divide-gray-100 mb-3">
                @foreach ($posts as $post)
                    <x-article-wide :post="$post" />
                @endforeach
            </div>
            
            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-manage-layout>