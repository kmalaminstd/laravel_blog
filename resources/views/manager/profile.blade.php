<x-manage-layout>
    
    <div class="max-w-2xl bg-white rounded-2xl border border-gray-100 shadow-sm mt-8 p-8 mx-auto">
        <h3 class="font-bold text-gray-800 mb-6">Profile Settings</h3>
        
        
        <form class="space-y-4" action="/manage/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex items-center gap-6 mb-8">
                <div class="relative">
                    <img src="{{ $user->logo ? asset('storage/'. $user->logo) : asset('public/imaegs/user.png')  }}" class="w-20 h-20 rounded-full">
                    <label for="image" class="absolute bottom-0 right-0 bg-white shadow-md p-1.5 rounded-full text-blue-600 border border-gray-100">
                        <input name="image" accept="image/*" id="image" type="file" hidden />
                        <i class="fa-solid fa-camera text-xs"></i>
                    </label>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-lg">Profile Picture</h4>
                    <p class="text-gray-500 text-sm">PNG or JPG no larger than 2MB</p>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Designation</label>
                <input type="text" name="designation" value="{{ $user->designation }}" class="w-100 p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Full Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Email</label>
                    <input type="email" name="email" disabled value="{{ $user->email }}" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
            </div>
            <div>
                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Bio</label>
                <textarea name="bio" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none h-24">{{ $user->bio ?? "" }}</textarea>
            </div>
            <button class="bg-blue-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-blue-700 transition">Update Profile</button>
        </form>
    </div>
</x-manage-layout>