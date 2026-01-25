@props(['follower'])

{{-- {{ dd($follower->user) }} --}}

<div class="bg-white p-5 rounded-3xl border border-gray-100 flex items-center justify-between hover:shadow-md transition group">
    <div class="flex items-center gap-4 flex-1">
        <div class="relative shrink-0">
            <img src="{{ $follower->follower->logo ? asset('storage/' . $follower->follower->logo) : asset('images/user.png') }}" class="w-14 h-14 rounded-2xl object-cover">
            <span class="absolute -top-1 -right-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"
                title="Recently active"></span>
        </div>

        <div class="flex-1 min-w-0">
            <div class="flex items-center gap-2">
                <h3 class="font-bold text-gray-900 hover:text-blue-600 transition truncate cursor-pointer">{{ $follower->follower->name }}</h3>
                <i class="fa-solid fa-circle-check text-blue-500 text-[10px]"></i>
            </div>
            <p class="text-xs text-gray-500 truncate">{{ $follower->follower->designation }} •  followers</p>
            <p class="text-[11px] text-blue-500 mt-1 font-medium italic truncate">
                {{ Str::words($follower->follower->bio, '28', '...') }}
            </p>
        </div>
    </div>

    <div class="flex items-center gap-3 ml-4">
        <a href="/public-profile/{{ $follower->follower->id }}/{{ Str::slug($follower->follower->name) }}" class="hidden md:block px-4 py-2 text-xs font-bold text-gray-600 hover:bg-gray-50 rounded-xl transition">
            View Profile
        </a>
        
    </div>
</div>
