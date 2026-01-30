<x-admin-layout>
    <div class="p-8 max-w-4xl">
        <div class="mb-8">
            <h2 class="text-2xl font-black text-slate-900 uppercase tracking-tight italic">Platform Settings</h2>
            <p class="text-slate-500 text-sm font-medium">Configure global site behavior and branding</p>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-sm p-8">
                <h3 class="text-lg font-black text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-display text-blue-600"></i> General Configuration
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-black uppercase text-slate-400 tracking-widest">Site Name</label>
                        <input type="text" value="BlogHub" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-black uppercase text-slate-400 tracking-widest">Support Email</label>
                        <input type="email" value="admin@bloghub.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label class="text-xs font-black uppercase text-slate-400 tracking-widest">Site Description</label>
                        <textarea rows="3" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">The premium community for technical writers and creators.</textarea>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-sm p-8">
                <h3 class="text-lg font-black text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-lock text-rose-600"></i> Security & Moderation
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl">
                        <div>
                            <p class="font-bold text-slate-900">Manual Post Approval</p>
                            <p class="text-xs text-slate-500">Require admin review before any post goes live</p>
                        </div>
                        <button class="w-12 h-6 bg-blue-600 rounded-full relative">
                            <span class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full"></span>
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl">
                        <div>
                            <p class="font-bold text-slate-900">New User Registrations</p>
                            <p class="text-xs text-slate-500">Allow new users to create accounts</p>
                        </div>
                        <button class="w-12 h-6 bg-slate-200 rounded-full relative">
                            <span class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full"></span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button class="bg-blue-600 text-white px-10 py-4 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-blue-700 shadow-lg shadow-blue-100 transition">
                    Save All Changes
                </button>
            </div>
        </div>
    </div>
</x-admin-layout>