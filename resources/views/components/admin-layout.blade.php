<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogHub | Discover Stories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-50 flex min-h-screen font-sans antialiased text-slate-900">

    <aside class="w-64 bg-white border-r border-slate-200 flex flex-col sticky top-0 h-screen">
        <div class="p-6">
            <div class="flex items-center gap-3 text-blue-600 font-black text-xl italic uppercase">
                <i class="fa-solid fa-shield-halved"></i>
                <span>AdminHub</span>
            </div>
        </div>

        <nav class="flex-1 px-4 space-y-2 overflow-y-auto">
            <a href="/admin" class="flex items-center gap-3 px-4 py-3 bg-blue-50 text-blue-600 rounded-xl font-bold transition">
                <i class="fa-solid fa-chart-pie"></i> Overview
            </a>
            <a href="/admin/creators" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-xl font-bold transition">
                <i class="fa-solid fa-users"></i> Creators
            </a>
            <a href="/admin/posts" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-xl font-bold transition">
                <i class="fa-solid fa-file-lines"></i> Posts
            </a>
            <a href="/admin/users" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-xl font-bold transition">
                <i class="fa-solid fa-user"></i> Users
            </a>
            <a href="/admin/settings" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-xl font-bold transition">
                <i class="fa-solid fa-gear"></i> Settings
            </a>
        </nav>

        <div class="p-4 border-t border-slate-100">
            <button class="w-full flex items-center gap-3 px-4 py-3 text-red-500 font-bold hover:bg-red-50 rounded-xl transition">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </button>
        </div>
    </aside>

    <main class="flex-1 flex flex-col overflow-hidden">

        <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-8">
            <h2 class="text-lg font-black uppercase tracking-tight">Dashboard Overview</h2>
            <div class="flex items-center gap-4">
                <div class="bg-slate-100 p-2 rounded-lg text-slate-400">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <img src="{{ auth()->user()->logo ? asset('storage/' . auth()->user()->logo) : asset('images/user.png') }}" class="w-10 h-10 rounded-xl border border-slate-200">
            </div>
        </header>

        {{ $slot }}

        
    </main>


</body>
</html>