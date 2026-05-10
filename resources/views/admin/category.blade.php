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

            <form action="/admin/category" method="POST" class="p-8">
                @csrf
                <div class="grid grid-cols-1 gap-6">
                    
                    <div class="flex flex-col ">
                        <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-1">Category Name</label>
                        <input type="text" name="name" placeholder="e.g. John Doe" 
                            class="w-full px-4 py-3 rounded-2xl bg-slate-50 border border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all outline-none text-sm font-medium">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-1">Category Status</label>
                        <div class="relative">
                            <select name="role" class="w-full px-4 py-3 rounded-2xl bg-slate-50 border border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all outline-none text-sm font-medium appearance-none">
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none"></i>
                        </div>
                    </div>
                    
                </div>

                <div class="flex items-center justify-end gap-3 mt-10 pt-6 border-t border-slate-100">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-xl font-black uppercase tracking-widest text-[11px] hover:bg-blue-700 shadow-lg shadow-blue-100 transition active:scale-95">
                        Add Account
                    </button>
                </div>
            </form>
    </div>

    <div class="mx-auto mt-10 mb-20 px-5 w-full">

        <div class="relative bg-white w-full overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Category name
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Staus
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Action
                        </th>
                        
                    </tr>
                </thead>
                <tbody>

                    @forelse ($categories as $cat)
                        
                        <tr class="bg-neutral-primary border-b border-default">
                            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                {{ $cat->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $cat->name ? 'Active' : 'Inactive' }}
                            </td>
                            <td class="px-6 py-4 d-flex">
                                <form method="POST" action="/admin/category/{{ $cat->id }}/delete">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium shadow-xs font-medium leading-5 rounded-base text-sm focus:outline-none"><i class="fa-solid fa-trash"></i></button>
                                </form>

                                <a href="/admin/category/{{ $cat->id }}/edit" type="button" class="border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium shadow-xs font-medium leading-5 rounded-base text-sm focus:outline-none"><i class="fa-regular fa-pen-to-square"></i></a>
                                
                            </td>
                            
                        </tr>

                    @empty
                        <tr>
                            <td colspan="3" style="text-align: center;" class="py-3">
                                <p>There are no categories</p>
                            </td>
                        </tr>
                    @endforelse

                    
                </tbody>
            </table>
        </div>

    </div>

</x-admin-layout>