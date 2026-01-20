<x-auth-layout>
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-gray-100">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-600 text-white rounded-lg mb-4">
                <i class="fa-solid fa-pen-nib text-xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Register</h1>
        </div>

        <x-forms.form id="loginForm" method="POST" action="/register">

            <x-forms.input name="name" type="text" :label="'Full Name'" placeholder="Enter Full Name"  />
 
            <x-forms.input name="email" type="email" :label="'Email Address'" placeholder="Enter your email"  />

            <x-forms.input name="designation" type="text" :label="'Designation'" placeholder="Story Teller"  />

            <div>
                
                <div class="relative">

                    <x-forms.input id="passwordInput" name="password" type="password" :label="'Password'" class="relative" placeholder="......"  />
                    
                    <button type="button" onclick="togglePassword()" class="absolute right-3 top-[50%] text-gray-400 hover:text-gray-600">
                        <i id="eyeIcon" class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>

            <div>
                
                <div class="relative">

                    <x-forms.input id="passwordInput" name="password_confirmation" type="password" :label="'Confirm Password'" class="relative" placeholder="......"  />
                    
                    <button type="button" class="absolute right-3 top-[50%] text-gray-400 hover:text-gray-600">
                        <i id="eyeIcon" class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="flex justify-between mb-1">
               
            </div>
            
            <x-forms.button>Sign Up</x-forms.button>
        </x-forms.form>

        <div class="mt-8 text-center">
            <p class="text-gray-600">Already have an account? 
                <a href="/login" class="text-blue-600 font-semibold hover:underline">Login</a>
            </p>
        </div>
    </div>
</x-auth-layout>