<x-admin-layout>
    <div class="p-8">

        

        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl font-black text-slate-900 uppercase tracking-tight italic">User Management</h2>
                <p class="text-slate-500 text-sm font-medium">Manage and monitor all registered accounts</p>
            </div>
            <div class="flex gap-3">
                <div class="relative">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                    <input type="text" placeholder="Search by name/email..." class="pl-10 pr-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none w-64">
                </div>
                <button class="bg-slate-900 text-white px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-slate-800 transition">
                    Export CSV
                </button>
            </div>
        </div>

        <div class="bg-white rounded-[2rem] border border-slate-200 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-slate-50 border-b border-slate-100">
                    <tr>
                        <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest">User Details</th>
                        <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest">Status</th>
                        <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest">Joined Date</th>
                        <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-4">
                            <div class="flex items-center gap-3">
                                <img src="https://i.pravatar.cc/100?u=user1" class="w-10 h-10 rounded-xl object-cover">
                                <div>
                                    <p class="font-bold text-slate-900 text-sm">Jason Smythe</p>
                                    <p class="text-xs text-slate-400">jason@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-100 text-green-700 text-[10px] font-black uppercase">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Active
                            </span>
                        </td>
                        <td class="px-8 py-4 text-sm text-slate-500">Jan 12, 2026</td>
                        <td class="px-8 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"><i class="fa-solid fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="max-w-2xl mt-10 bg-white rounded-[2.5rem] border border-slate-200 shadow-2xl overflow-hidden">
            <div class="bg-slate-50 px-8 py-6 border-b border-slate-100">
                <h3 class="text-xl font-black text-slate-900 flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center shadow-lg shadow-blue-100">
                        <i class="fa-solid fa-user-plus text-sm"></i>
                    </div>
                    Create New Account
                </h3>
            </div>

            <form action="#" method="POST" class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="flex flex-col gap-2">
                        <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-1">Full Name</label>
                        <input type="text" name="name" placeholder="e.g. John Doe" 
                            class="w-full px-4 py-3 rounded-2xl bg-slate-50 border border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all outline-none text-sm font-medium">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-1">Email Address</label>
                        <input type="email" name="email" placeholder="john@example.com" 
                            class="w-full px-4 py-3 rounded-2xl bg-slate-50 border border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all outline-none text-sm font-medium">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-1">Account Role</label>
                        <div class="relative">
                            <select name="role" class="w-full px-4 py-3 rounded-2xl bg-slate-50 border border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all outline-none text-sm font-medium appearance-none">
                                <option value="user">Standard User</option>
                                <option value="creator">Creator</option>
                                <option value="admin">Administrator</option>
                            </select>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none"></i>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-1">Designation</label>
                        <input type="text" name="designation" placeholder="e.g. Tech Writer" 
                            class="w-full px-4 py-3 rounded-2xl bg-slate-50 border border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all outline-none text-sm font-medium">
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-1">Temporary Password</label>
                        <div class="relative">
                            <input type="password" name="password" placeholder="••••••••" 
                                class="w-full px-4 py-4 rounded-2xl bg-slate-50 border border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-50 transition-all outline-none text-sm font-medium">
                            <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-blue-600">
                                <i class="fa-solid fa-eye-slash text-sm"></i>
                            </button>
                        </div>
                        <p class="text-[10px] text-slate-400 mt-1 italic">The user will be prompted to change this password on their first login.</p>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-3 mt-10 pt-6 border-t border-slate-100">
                    <button type="button" class="px-6 py-3 rounded-xl text-sm font-bold text-slate-500 hover:bg-slate-100 transition">
                        Cancel
                    </button>
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-xl font-black uppercase tracking-widest text-[11px] hover:bg-blue-700 shadow-lg shadow-blue-100 transition active:scale-95">
                        Create Account
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-admin-layout>