<x-admin-layout>

    <div class="max-w-2xl mt-10 bg-white rounded-[2.5rem] border border-slate-200 shadow-2xl overflow-hidden mx-auto">
            <div class="bg-slate-50 px-8 py-6 border-b border-slate-100">
                <h3 class="text-xl font-black text-slate-900 flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center shadow-lg shadow-blue-100">
                        <i class="fa-solid fa-user-plus text-sm"></i>
                    </div>
                    Create Category
                </h3>
            </div>

            <form action="/admin/category/{{ $categories->id }}/update" method="POST" class="p-8">
                @csrf
                @method("PATCH")
                <div class="grid grid-cols-1 gap-6">
                    
                    <div class="flex flex-col ">
                        <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-1">Category Name</label>
                        <input type="text" name="name" placeholder="e.g. John Doe" value="{{ $categories->name }}"
                            class="w-full px-4 py-3 rounded-2xl bg-slate-50 border border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all outline-none text-sm font-medium">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-1">Category Status</label>
                        <div class="relative">
                            <select name="role" class="w-full px-4 py-3 rounded-2xl bg-slate-50 border border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all outline-none text-sm font-medium appearance-none">
                                <option value="1" {{ $categories->status ? "selected" : "" }}>Active</option>
                                <option value="0" {{ $categories->status ? "" : "selected" }}>Inactive</option>
                            </select>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none"></i>
                        </div>
                    </div>
                    
                </div>

                <div class="flex items-center justify-end gap-3 mt-10 pt-6 border-t border-slate-100">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-xl font-black uppercase tracking-widest text-[11px] hover:bg-blue-700 shadow-lg shadow-blue-100 transition active:scale-95">
                        Update
                    </button>
                </div>
            </form>
    </div>


</x-admin-layout>