<x-manage-layout>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8 px-5">
        <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <div class="flex justify-between mb-6">
                <h3 class="font-bold text-gray-800">Traffic Overview</h3>
                <select class="text-sm bg-gray-50 p-1 rounded">
                    <option>Last 7 Days</option>
                    <option>Last 30 Days</option>
                </select>
            </div>
            <div class="h-64 bg-gray-50 rounded-xl flex items-end justify-around p-4">
                <div class="w-8 bg-blue-200 rounded-t h-[40%]"></div>
                <div class="w-8 bg-blue-300 rounded-t h-[60%]"></div>
                <div class="w-8 bg-blue-400 rounded-t h-[45%]"></div>
                <div class="w-8 bg-blue-600 rounded-t h-[90%]"></div>
                <div class="w-8 bg-blue-400 rounded-t h-[70%]"></div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="font-bold text-gray-800 mb-4">Top Stories</h3>
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <span class="text-sm font-bold text-blue-600">01</span>
                    <p class="text-sm font-medium text-gray-700 truncate">How to learn Tailwind...</p>
                    <span class="text-xs text-gray-400 ml-auto">4.2k</span>
                </div>
                </div>
        </div>
    </div>
</x-manage-layout>