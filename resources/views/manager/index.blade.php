<x-manage-layout>

    <div class="p-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <p class="text-gray-500 text-sm font-medium">Total Views</p>
                <h3 class="text-2xl font-bold text-gray-800">24,512</h3>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <p class="text-gray-500 text-sm font-medium">Total Comments</p>
                <h3 class="text-2xl font-bold text-gray-800">1,204</h3>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <p class="text-gray-500 text-sm font-medium">Average Rating</p>
                <h3 class="text-2xl font-bold text-gray-800">4.8 / 5</h3>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-bold text-gray-800">Recent Posts</h3>
                <button class="text-blue-600 text-sm font-bold">View All</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-4">Blog Title</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Published Date</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">


                        @foreach ($latestPosts as $post)
                            {{-- {{ dd($post); }} --}}
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-gray-800">{{ $post->title }}</div>
                                    <div class="text-xs text-gray-400"> {{ $post->category->name }} </div>
                                </td>
                                <td class="px-6 py-4">
                                    @if ($post->published) 
                                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-bold">Published</span>
                                    @else
                                        <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-bold">Draft</span>  
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{ $post->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    <a href="{{ 'manage/post-edit/'. $post->id }}" class="p-2 text-gray-400 hover:text-blue-600"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button class="p-2 text-gray-400 hover:text-red-600 transition"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-manage-layout>
