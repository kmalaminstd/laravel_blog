<x-manage-layout>
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm mt-8 overflow-hidden">
        <div class="p-6 border-b border-gray-100">
            <h3 class="font-bold text-gray-800">Pending Comments</h3>
        </div>
        <div class="divide-y divide-gray-100">
            <div class="p-6 flex gap-4 hover:bg-gray-50 transition">
                <img src="https://i.pravatar.cc/100?u=user" class="w-10 h-10 rounded-full">
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h4 class="font-bold text-sm text-gray-800">Robert Fox <span class="font-normal text-gray-400 text-xs">on "Power of Tailwind"</span></h4>
                        <span class="text-xs text-gray-400">2h ago</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-3">Great article! Does this work with React as well?</p>
                    <div class="flex gap-2">
                        <button class="px-3 py-1 bg-green-100 text-green-700 rounded text-xs font-bold hover:bg-green-200 transition">Approve</button>
                        <button class="px-3 py-1 bg-red-100 text-red-700 rounded text-xs font-bold hover:bg-red-200 transition">Spam</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-manage-layout>