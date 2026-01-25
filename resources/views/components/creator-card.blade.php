@props(['creator'])

<div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
    <div
        class="w-full h-full bg-white rounded-[2rem] border border-gray-100 p-8 text-center hover:shadow-xl hover:border-blue-100 transition-all duration-300 flex flex-col justify-between">

        <div>
            <div class="relative inline-block mb-6">
                <img src="{{ $creator->logo ? asset("storage/" . $creator->logo) : asset('images/user.png') }}"
                    class="w-24 h-24 rounded-3xl object-cover mx-auto ring-4 ring-blue-50">
                <div class="absolute -bottom-2 -right-2 bg-blue-600 text-white p-1.5 rounded-lg border-2 border-white shadow-sm">
                    <i class="fa-solid fa-check text-[10px]"></i>
                </div>
            </div>

            <h3 class="text-xl font-bold text-gray-900 line-clamp-1 min-h-[1.75rem]">
                {{ $creator->name }}
            </h3>
            <p class="text-sm text-gray-500 mb-2 line-clamp-2 min-h-[2.5rem]">
                {{ $creator->designation }}
            </p>

            <div class="flex justify-center gap-6 mb-5 py-4 border-y border-gray-50">
                <div class="text-center">
                    <span class="block font-black text-gray-900">{{ $creator->followers()->count() }}</span>
                    <span class="text-[10px] text-gray-400 uppercase font-black tracking-widest">Followers</span>
                </div>
                <div class="text-center">
                    <span class="block font-black text-gray-900"> {{ $creator->posts()->count() }} </span>
                    <span class="text-[10px] text-gray-400 uppercase font-black tracking-widest">Stories</span>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-2">
            @can('user-follow', $creator)
                <a class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-2xl transition shadow-lg shadow-blue-100 flex items-center justify-center gap-2">
                    Follow
                </a>
            @endcan
            <a href="/{{ Auth::id() === $creator->id ? 'manage/profile' : 'public-profile' }}/{{  Auth::id() !== $creator->id ?$creator->id : '' }}{{ Auth::id() !== $creator->id ? '/' . Str::slug($creator->name) : '' }}" class="w-full text-gray-500 hover:bg-gray-50 font-bold py-3 rounded-2xl transition text-sm text-center border border-transparent hover:border-gray-100">
                View Profile
            </a>
        </div>
    </div>
</div>
