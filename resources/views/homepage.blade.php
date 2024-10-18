@extends('components.template') 
    {{-- untuk menghubungkan ke template --}}
@section('title', 'homepage')
@section('content')
    <body class="leading-normal tracking-normal text-indigo-400 bg-cover bg-fixed m-0 " style="background: linear-gradient(to bottom, #B79D9B, #30333A)">
        <div class="pt-20 h-full max-w-screen-lg mx-auto px-6">
            <div class="container pt-12 md:pt-16 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
                    <h1 class="my-2 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
                        Welcome To
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-pink-500 to-pink-500">
                        Your One-Stop
                        </span>
                        Destination!
                    </h1>
                    <p class="leading-normal text-white md:text-2xl mb-8 text-center md:text-left">
                        Jelajahi apa yang ingin anda jelajahi >_<
                    </p>
                    <div class="flex items-center justify-center pt-6 px-8 mb-6">
                        <a href="/contact" class="bg-gradient-to-r from-blue-300 to-pink-300 hover:from-blue-100 hover:to-pink-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg focus:ring-2 focus:ring-purple-200 transform transition hover:scale-125 duration-200 ease-in-out mx-4">
                            Login
                        </a>
                        <a href="/register" class="bg-gradient-to-r from-blue-300 to-pink-300 hover:from-blue-100 hover:to-pink-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg focus:ring-2 focus:ring-purple-200 transform transition hover:scale-125 duration-200 ease-in-out mx-6">
                            Register
                        </a>
                    </div>  
                </div>
                <div class="w-full xl:w-3/5 p-12 overflow-hidden">
                    <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="https://i.pinimg.com/enabled_lo/564x/5f/8a/ee/5f8aeec2641c8d429358f9180370a473.jpg" />
                </div>
                <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
                    -by
                    <a class="text-gray-500 no-underline hover:no-underline" href="https://www.instagram.com/exsyr_is/profilecard/?igsh=M3AzNTRiZXl3bzc5">Icha Sefty Exsyari</a>
                </div>
            </div>
        </div>
    </body>
@endsection
