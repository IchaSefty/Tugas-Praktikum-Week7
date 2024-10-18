@extends('components.template')

@section('title', 'register')

@section('content')
    <div class="min-h-screen flex items-center justify-center" style="background: linear-gradient(to bottom, #B79D9B, #30333A)">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold text-center text-pink-700 mb-6">Create Your Account</h1>
            <form action="/register" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-pink-700 font-semibold">Name</label>
                    <input type="text" id="name" name="name" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div>
                    <label for="email" class="block text-pink-700 font-semibold">Email</label>
                    <input type="email" id="email" name="email" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div>
                    <label for="password" class="block text-pink-700 font-semibold">Password</label>
                    <input type="password" id="password" name="password" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <button class="w-full bg-gray-500 text-white p-3 rounded-lg hover:bg-gray-600 transition-colors duration-300"> <a href="/home"> Register</a>
                </button>
                
            </form>

            <p class="text-center text-gray-600 mt-6">
                Kamu sudah punya akun? 
                <a href="/contact" class="text-blue-500 hover:underline">Login</a>
            </p>
        </div>
    </div>
@endsection
