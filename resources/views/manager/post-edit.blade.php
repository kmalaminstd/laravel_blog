<x-manage-layout>

    <div class="max-w-4xl mt-5 mx-auto bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gray-50 px-8 py-6 border-b border-gray-100 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Edit Post</h2>
                <p class="text-sm text-gray-500">Update your content and publishing settings</p>
            </div>
            
        </div>

        <form id="blogEditForm" class="p-8 space-y-8" method="POST" action="/posts/{{ $post['id'] }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="flex gap-3">
                <button type="submit" value="draft" name="action" form="blogEditForm" class="action px-5 py-2.5 text-gray-600 hover:bg-gray-200 rounded-xl font-semibold transition">Draft</button>
                <button type="submit" value="publish" name="action" form="blogEditForm" class="action px-8 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold shadow-lg shadow-blue-200 transition">Publish</button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-xs font-black text-gray-400 uppercase tracking-widest mb-2">
                        Blog Title
                    </label>
                    <input type="text" name="title" value="{{ $post->title }}"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition">
                </div>
                <div>
                    <label class="block text-xs font-black text-gray-400 uppercase tracking-widest mb-2">Category</label>
                    <select name="categories_id" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none appearance-none cursor-pointer">
                        
                        @foreach ($categories as $category)
                            <option {{ $category->id === $post->category->id ? "slected" : "" }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-black text-gray-400 uppercase tracking-widest mb-2">Featured
                    Image</label>
                <div
                    class="flex items-center gap-6 p-4 border-2 border-dashed border-gray-200 rounded-2xl hover:bg-gray-50 transition group">
                    <img src="{{ asset('storage/'. $post->image) }}" alt="Current"
                        class="w-32 h-20 object-cover rounded-lg shadow-md">
                    <div class="flex-1">
                        <p class="text-sm font-bold text-gray-700">Change featured image</p>
                        <p class="text-xs text-gray-400">Drag and drop or click to replace</p>
                    </div>
                    <input type="file" name="image" class="hidden" id="imageUpload">
                    <label for="imageUpload"
                        class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-xs font-bold hover:shadow-sm cursor-pointer">Browse
                        Files</label>
                </div>
            </div>

            <div>
                <label class="block text-xs font-black text-gray-400 uppercase tracking-widest mb-2">Post
                    Content</label>
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <textarea name="description" id="joditorjs2" rows="12" class="w-full editorjs2 p-6 text-gray-700 leading-relaxed outline-none resize-y" placeholder="Start writing your story...">
                        {{ $post->description }}
                    </textarea>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-black text-gray-400 uppercase tracking-widest mb-2">Tags</label>
                    <input type="text" name="tags" placeholder="Add new tag"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
                <div>
                    <label class="block text-xs font-black text-gray-400 uppercase tracking-widest mb-2">Short Excerpt
                        (SEO)</label>
                    <input type="text" value="Learn how to master fluid typography in 2026."
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
            </div>
        </form>

        <div class="mt-3 px-10 border flex gap-3 py-4">
            @foreach ($post->tags as $tag)
                <div class="bg-gray-300 px-3 py-1">
                    <form method="post" action="/delete-tag/{{ $post->id }}/{{ $tag->id }}">
                        @csrf
                        @method("DELETE")
                        <button type="submit">{{$tag->name}} <i class="fa-classic fa-solid fa-xmark"></i> </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>


</x-manage-layout>
