<x-admin-layout>
    <div class="p-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-2xl font-black text-slate-900 uppercase tracking-tight italic">Creator Network</h2>
                <p class="text-slate-500 text-sm font-medium">Verify creators and monitor content performance</p>
            </div>
            <button class="bg-blue-600 text-white px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-blue-700 transition flex items-center gap-2">
                <i class="fa-solid fa-plus text-xs"></i> Add Creator
            </button>
        </div>

        <div class="flex flex-wrap -mx-3 items-stretch">

            
            @foreach ($creators as $creator)

                
                <div class="w-full xl:w-1/3 px-3 mb-6">
                    <div class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-sm hover:border-blue-200 transition h-full flex flex-col justify-between">

                        <div>
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center gap-4">
                                    <div class="relative">
                                        <img src="{{ $creator->logo ? asset('storage/' . $creator->logo) : asset('images/user.png') }}" class="w-16 h-16 rounded-2xl object-cover">
                                        <div class="absolute -bottom-1 -right-1 bg-blue-600 text-white p-1 rounded-md border-2 border-white shadow-sm">
                                            <i class="fa-solid fa-check text-[8px]"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="font-black text-slate-900 leading-tight">{{ $creator->name }}</h3>
                                        <p class="text-xs text-blue-600 font-bold uppercase tracking-wider"> {{ $creator->designation }} </p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end">
                                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Status</span>
                                    <span class="text-xs font-bold text-green-600">Verified</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 my-6 bg-slate-50 p-4 rounded-2xl">
                                <div class="text-center border-r border-slate-200">
                                    <span class="block text-lg font-black text-slate-900">{{ $creator->posts->count() }}</span>
                                    <span class="text-[10px] text-slate-400 font-bold uppercase">Posts</span>
                                </div>
                                <div class="text-center">
                                    <span class="block text-lg font-black text-slate-900">{{ $creator->followers->count() }}</span>
                                    <span class="text-[10px] text-slate-400 font-bold uppercase">Followers</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            @endforeach

        </div>

    </div>
</x-admin-layout>