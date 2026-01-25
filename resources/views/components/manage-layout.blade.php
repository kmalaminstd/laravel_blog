<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creator Dashboard | BlogHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/ap7jk2rf0ikevheggkwo1nz0wawioyo3gxnpcjlp22c3slbj/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
    
</head>
<body class="bg-gray-50 flex">

    <aside class="w-64 bg-white h-screen sticky top-0 border-r border-gray-200 hidden md:flex flex-col">
        <a href="/">
            <div class="p-6 flex items-center gap-2">
                <div class="bg-blue-600 text-white p-1.5 rounded-lg">
                    <i class="fa-solid fa-pen-nib"></i>
                </div>
                <span class="text-xl font-bold text-gray-800">
                    BlogHub
                </span>
            </div>
        </a>

        <nav class="flex-1 px-4 space-y-2 mt-4">
            <a href="/manage" class="flex items-center gap-3 bg-blue-50 text-blue-600 px-4 py-3 rounded-xl font-semibold">
                <i class="fa-solid fa-house"></i> Dashboard
            </a>
            <a href="/manage/posts" class="flex items-center gap-3 text-gray-500 hover:bg-gray-50 px-4 py-3 rounded-xl transition">
                <i class="fa-solid fa-file-lines"></i> My Posts
            </a>
            <a href="/manage/analytics" class="flex items-center gap-3 text-gray-500 hover:bg-gray-50 px-4 py-3 rounded-xl transition">
                <i class="fa-solid fa-chart-line"></i> Analytics
            </a>
            <a href="/manage/saved-post" class="flex items-center gap-3 text-gray-500 hover:bg-gray-50 px-4 py-3 rounded-xl transition">
                <i class="fa-solid fa-bookmark"></i> Saved
            </a>
            <a href="/manage/following" class="flex items-center gap-3 text-gray-500 hover:bg-gray-50 px-4 py-3 rounded-xl transition">
                <i class="fa-solid fa-user-check"></i> Following
            </a>
            <a href="/manage/followers" class="flex items-center gap-3 text-gray-500 hover:bg-gray-50 px-4 py-3 rounded-xl transition">
                <i class="fa-solid fa-users"></i> Followers
            </a>
        </nav>

        <div class="p-4 border-t border-gray-100">
            <form action="/logout" method="POST">
                @csrf
                @method("DELETE")
                <button class="flex w-full items-center gap-3 text-red-500 hover:bg-red-50 px-4 py-3 rounded-xl transition font-medium">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    @php
        $user = auth()->user();
    @endphp

    <main class="flex-1 min-h-screen">
        <header class="bg-white border-b border-gray-200 px-8 py-4 flex justify-between items-center">
            <h2 class="text-xl font-bold text-gray-800">Dashboard</h2>
            <div class="flex items-center gap-4">
                <a href="/manage/create-post" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-700 transition">
                    + New Post
                </a>
                <a href="/manage/profile">
                    <img src="{{ $user && $user->logo
                        ? asset('storage/'.$user->logo)
                        : asset('images/user.png') }}" class="w-10 h-10 rounded-full border border-gray-200">
                </a>

            </div>
        </header>

        {{ $slot }}
    </main>

    



    @vite(['resources/js/manage.main.js'])
</body>
</html>