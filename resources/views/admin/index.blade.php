<x-admin-layout>

    <div class="p-8 overflow-y-auto">
            
            <div class="flex flex-wrap -mx-3 mb-8">
                <div class="w-full sm:w-1/2 xl:w-1/4 px-3 mb-6">
                    <div class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Total Users</p>
                            <h3 class="text-2xl font-black mt-1">12,482</h3>
                            <span class="text-green-500 text-xs font-bold"><i class="fa-solid fa-arrow-up"></i> 12% increase</span>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 xl:w-1/4 px-3 mb-6">
                    <div class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Active Posts</p>
                            <h3 class="text-2xl font-black mt-1">1,204</h3>
                            <span class="text-green-500 text-xs font-bold"><i class="fa-solid fa-arrow-up"></i> 5% growth</span>
                        </div>
                        <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 xl:w-1/4 px-3 mb-6">
                    <div class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Engagements</p>
                            <h3 class="text-2xl font-black mt-1">84.2k</h3>
                            <span class="text-slate-400 text-xs font-bold">Past 30 days</span>
                        </div>
                        <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-thumbs-up"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 xl:w-1/4 px-3 mb-6">
                    <div class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Support Tickets</p>
                            <h3 class="text-2xl font-black mt-1">24</h3>
                            <span class="text-red-500 text-xs font-bold">12 urgent</span>
                        </div>
                        <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-2xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-circle-exclamation"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-8 border-b border-slate-100 flex items-center justify-between">
                    <h3 class="text-lg font-black italic uppercase tracking-tighter">Recent Creator Signups</h3>
                    <button class="text-sm font-bold text-blue-600 hover:bg-blue-50 px-4 py-2 rounded-xl transition">View All</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50">
                                <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest">Creator</th>
                                <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest">Topic</th>
                                <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest">Status</th>
                                <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr>
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3">
                                        <img src="https://i.pravatar.cc/150?u=12" class="w-10 h-10 rounded-xl">
                                        <div>
                                            <p class="font-bold text-sm">Marcus Stone</p>
                                            <p class="text-xs text-slate-400">marcus@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5 text-sm font-medium text-slate-600">Technology</td>
                                <td class="px-8 py-5">
                                    <span class="bg-green-100 text-green-600 text-[10px] font-black px-3 py-1 rounded-full uppercase">Active</span>
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <button class="p-2 hover:bg-slate-100 rounded-lg transition text-slate-400"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3">
                                        <img src="https://i.pravatar.cc/150?u=33" class="w-10 h-10 rounded-xl">
                                        <div>
                                            <p class="font-bold text-sm">Elena Joy</p>
                                            <p class="text-xs text-slate-400">elena@web.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5 text-sm font-medium text-slate-600">Lifestyle</td>
                                <td class="px-8 py-5">
                                    <span class="bg-amber-100 text-amber-600 text-[10px] font-black px-3 py-1 rounded-full uppercase">Pending</span>
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <button class="p-2 hover:bg-slate-100 rounded-lg transition text-slate-400"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</x-admin-layout>