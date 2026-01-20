<x-manage-layout>
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8 px-4 mt-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">My Posts</h1>
                <p class="text-gray-500 text-sm">You have published 12 stories this month.</p>
            </div>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-xl font-bold transition flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Create New Post
            </button>
        </div>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm mb-6">
            <div class="flex flex-col md:flex-row items-center justify-between p-4 gap-4">
                <div class="flex bg-gray-100 p-1 rounded-xl">
                    <a href="/manage/posts" class="px-6 py-2 {{ $request->query('sort') ?? 'bg-white rounded-lg shadow-sm font-bold text-blue-600' }} rounded-lg shadow-sm text-sm">All ({{ auth()->user()->posts()->count() }})</a>
                    <a href="/manage/posts?sort=published" class="px-6 py-2 text-sm hover:text-gray-700 {{ $request->query('sort') === 'published' ? 'bg-white rounded-lg shadow-sm font-bold text-blue-600' : 'font-medium text-gray-500' }}">Published</a>
                    <a href="/manage/posts?sort=draft" class="px-6 py-2 text-sm hover:text-gray-700 {{ $request->query('sort') === 'draft' ? 'bg-white rounded-lg shadow-sm font-bold text-blue-600' : 'font-medium text-gray-500' }}">Drafts</a>
                </div>
                <div class="relative w-full md:w-64">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400 text-sm"></i>
                    <input type="text" placeholder="Search your posts..." class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-blue-500 transition text-sm">
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-t border-gray-100">
                    <thead class="bg-gray-50/50 text-gray-400 text-[11px] uppercase tracking-widest font-bold">
                        <tr>
                            <th class="px-6 py-4"><input type="checkbox" class="rounded"></th>
                            <th class="px-6 py-4">Post Title</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Engagement</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">

                        @foreach ($posts as $post)
                            
                            <tr class="hover:bg-gray-50/50 transition group">
                                <td class="px-6 py-4"><input type="checkbox" class="rounded text-blue-600"></td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('storage/'. $post->image) }}" class="w-12 h-12 rounded-lg object-cover">
                                        <div>
                                            <a href="#" class="font-bold text-gray-800 hover:text-blue-600 transition block">{{ $post->title }}</a>
                                            <span class="text-xs text-gray-400">Modified 2 days ago</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">

                                    @if ($post->published)   
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider">Published</span>
                                    @else
                                       <span class="bg-gray-100 text-gray-500 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider">Draft</span> 
                                    @endif

                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4 text-gray-500">
                                        <span class="flex items-center gap-1.5 text-xs"><i class="fa-regular fa-eye"></i> 1.2k</span>
                                        <span class="flex items-center gap-1.5 text-xs"><i class="fa-regular fa-comment"></i> 48</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                        <button class="p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                    </div>
                                </td>
                            </tr>

                        @endforeach

                       
                    </tbody>
                </table>
            </div>

            

            {{ $posts->links() }}
        </div>
</x-manage-layout>