<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth ">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Alpine JS -->
        <script src="//unpkg.com/alpinejs" defer></script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased dark:bg-gray-800 dark:text-slate-300">
       
<div class="w-full h-screen bg-slate-200 dark:bg-gray-700">
    <div class="w-10/12 mx-auto">
        <div class="flex justify-center">
            <div>
                <img src="{{asset('images/logo.png')}}" class="w-72 mt-20">
                <div class=" bg-slate-300 dark:bg-gray-800 shadow-xl rounded-md mt-5 ">
                    <form class="px-5 py-3 text-lg">
                        <div>
                            <label for="email" class="font-semibold text-gray-700 dark:text-gray-300 w-full">Email</label>
                            <input type="email" name="email" id="email" class="w-full rounded-md border-none shadow-xl focus:border-gray-600 focus:border-2 active:border-2 active:border-gray-600 focus:ring-transparent active:ring-transparent active:shadow-md focus:shadow-md my-2">
                        </div>

                        <div>
                            <label for="password" class="font-semibold text-gray-700 dark:text-gray-300 w-full">Password</label>
                            <input type="password" name="password" id="password" class="w-full rounded-md border-none shadow-xl focus:border-gray-600 focus:border-2 active:border-2 active:border-gray-600 focus:ring-transparent active:ring-transparent active:shadow-md focus:shadow-md my-2">
                        </div>

                        <div class="flex justify-center my-3">
                            <button type="submit"  class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900 cursor-pointer">
                            <i class="fa fa-sign-in"></i>
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

        
    </body>
</html>
