<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogHub | Discover Stories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans" style="display: flex; flex-direction: column; justify-content: space-between; min-height: 110vh;">

    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-2">
                    <div class="bg-blue-600 text-white p-2 rounded-lg">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <span class="text-xl font-bold text-gray-800">BlogHub</span>
                </div>
                <div class="hidden md:flex space-x-8 text-gray-600 font-medium">
                    <a href="/" class="hover:text-blue-600">Home</a>
                    <a href="/blogs" class="hover:text-blue-600">Blogs</a>
                    <a href="#" class="hover:text-blue-600">About</a>
                </div>
                <div class="flex items-center gap-4">
                    
                    <form action="/search" method="GET" class="hidden md:flex flex-1 max-w-md relative group">
                        
                        <input type="text" name="q" placeholder="Search for articles..." class="w-full bg-gray-100 border-none rounded-xl py-2 pl-10 pr-4 focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all outline-none text-sm"
                        >
                        <div class="absolute left-3 top-2.5 text-gray-400 group-focus-within:text-blue-500 transition-colors">
                            <i class="fa-solid fa-magnifying-glass text-sm"></i>
                        </div>
                        <button type="submit" class="hidden">Search</button>
                    </form>

                    @guest
                        <x-link-button href="/login">Login</x-link-button>
                        <x-link-button href="/register">Register</x-link-button>
                    @endguest
                    @auth
                        <x-link-button href="/manage">Manage</x-link-button>
                        <x-link-button href="/logout">Logout</x-link-button>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        {{ $slot }}
        
    </main>

    <footer class="bg-white border-t border-gray-200 mt-20 py-10 text-center">
        <p class="text-gray-500 text-sm">© 2026 BlogHub Platform. All rights reserved.</p>
    </footer>

</body>
</html>