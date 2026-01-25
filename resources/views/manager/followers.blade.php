<x-manage-layout>

    <div class="max-w-4xl mx-auto mt-3">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-black text-gray-900">People follow you</h1>
                <p class="text-gray-500 text-sm"> {{ $countFollowers }} Pople are currently following you</p>
            </div>
            <a href="/creators" class="text-sm font-bold text-blue-600 hover:underline">Discover more</a>
        </div>
    
        <div class="relative mb-6">
            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
            <input type="text" placeholder="Search your following list..."
                class="w-full pl-11 pr-4 py-3 rounded-2xl border-none ring-1 ring-gray-200 focus:ring-2 focus:ring-blue-500 outline-none bg-white transition shadow-sm">
        </div>
    
        <div class="flex flex-col gap-4">


            @foreach ($followers as $follower)
                <x-creator-card-wide :follower="$follower" />
            @endforeach
            
    

    
            <div class="mt-10 p-8 border-2 border-dashed border-gray-200 rounded-[2rem] text-center">
                <p class="text-gray-400 text-sm mb-4">Looking for more inspiration?</p>
                <button
                    class="bg-blue-600 text-white px-6 py-3 rounded-2xl font-bold text-sm hover:bg-blue-700 transition shadow-lg shadow-blue-100">
                    Find new people to follow
                </button>
            </div>
    
        </div>
    </div>

</x-manage-layout>

