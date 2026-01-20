<x-manage-layout>
    <form class="new_post_form" action="/manage/create-post" method="post" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg mb-4">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl border border-gray-100 shadow-sm mt-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold">Create New Story</h2>
                <div class="flex gap-3">
                    <button type="submit" value="draft" name="action" class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium transition">Save Draft</button>
                    <button type="submit" value="publish" name="action" class="px-6 py-2 bg-blue-600 text-white rounded-lg font-bold hover:bg-blue-700 transition">Publish Now</button>
                </div>
            </div>
    
            <div class="space-y-6">
                <input type="text" name="title" placeholder="Title of your story..." class="w-full text-4xl font-bold outline-none border-b border-transparent focus:border-gray-100 py-2">
                
                <div class="flex flex-wrap gap-4">
                    <select name="categories_id" class="bg-gray-50 border border-gray-200 px-3 py-2 rounded-lg text-sm">
                        <option>Select Category</option>
                        @foreach ($categories as $category)
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="tags" placeholder="Add tags (e.g. #js, #web)" class="bg-gray-50 border border-gray-200 px-3 py-2 rounded-lg text-sm flex-1">
                </div>
    
                <div class="border-2 py-10 w-full relative border-dashed border-gray-200 rounded-2xl p-8 text-center hover:bg-gray-50 transition cursor-pointer">
                    <label for="image" class="h-full w-full absolute top-50 left-50" style="transform: translate(-50%, -50%);">
                        <input type="file" name="image" accept="image/*" id="image" hidden />
                        <i class="fa-solid fa-image text-3xl text-gray-300 mb-2"></i>
                        <p class="text-gray-500 text-sm font-medium">Click to upload featured image</p>
                    </label>
                </div>
    
                <textarea name="description" id="editorjs" placeholder="Tell your story..." class="editorjs hidden_input w-full min-h-[400px] outline-none text-lg leading-relaxed text-gray-700 resize-none"></textarea>
            </div>
        </div>
    </form>
</x-manage-layout>