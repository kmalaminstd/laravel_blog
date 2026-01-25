@props(['following'])

<div class="bg-white p-5 rounded-3xl border border-gray-100 flex items-center justify-between hover:shadow-md transition group">
    <div class="flex items-center gap-4 flex-1">
        <div class="relative shrink-0">
            <img src="{{ $following->user->logo ? asset('storage/' . $following->user->logo) : asset('images/user.png') }}" class="w-14 h-14 rounded-2xl object-cover">
            <span class="absolute -top-1 -right-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"
                title="Recently active"></span>
        </div>

        <div class="flex-1 min-w-0">
            <div class="flex items-center gap-2">
                <h3 class="font-bold text-gray-900 hover:text-blue-600 transition truncate cursor-pointer">{{$following->user->name}}</h3>
                <i class="fa-solid fa-circle-check text-blue-500 text-[10px]"></i>
            </div>
            <p class="text-xs text-gray-500 truncate">{{ $following->user->designation }}</p>
            <p class="text-[11px] text-blue-500 mt-1 font-medium italic truncate">
                {{ Str::words($following->user->bio, 28, '...') }}
            </p>
        </div>
    </div>

    <div class="flex items-center gap-3 ml-4">
        <a href="/public-profile/{{ $following->user->id }}/{{ Str::slug($following->user->name) }}" class="hidden md:block px-4 py-2 text-xs font-bold text-gray-600 hover:bg-gray-50 rounded-xl transition">
            View Profile
        </a>
        <form method="POST" action="/follow/{{ $following->user->id }}">
            @csrf
            <button type="submit" class="px-5 py-2 text-xs font-bold bg-gray-100 text-gray-700 hover:bg-red-50 hover:text-red-500 rounded-xl transition group-hover:bg-gray-200">
                Following
            </button>
        </form>
    </div>
</div>
