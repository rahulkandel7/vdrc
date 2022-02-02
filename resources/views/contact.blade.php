@extends('layouts.app')

@section('css')
    <style>
        .line {
            height: 0;
            border-top-width: 1px;
            /* border-style: dotted; */
        }

        .images img{
            transition: all .2s ease-in-out;
        }
        .images:hover img{
            transform: scale(1.02);
            transition: all .2s ease-in-out;
        }
    </style>

    <link rel="stylesheet" href="{{asset('css/lightbox/lightbox.css')}}">
@endsection

@section('content')
    <div class="w-11/12 mx-auto shadow-sm py-5 shadow-gray-300 dark:shadow-gray-900 rounded my-4 ">
        <h1 class="text-3xl py-4 px-2 font-semibold text-[#5977E9]">
            <span class="border-l-4 border-[#5977E9] px-2"></span> 
            Contact US
        </h1>
        <hr class="line dark:border-zinc-500 border-[#5977E9]">
       <div class="grid grid-cols-2 my-5">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d555.6908455738284!2d84.38682570838264!3d27.70198072595697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb9a3f827d0d%3A0x72cd7f9da5747b4e!2sVijaya%20FM!5e0!3m2!1sen!2snp!4v1643782055097!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div>
                <form class="px-5">

                    <div class="px-5 py-2">
                        <label for="name" class="w-full text-zinc-700 dark:text-zinc-300">Full Name</label>
                        <input type="text" name="name" id="name" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                    </div>

                    <div class="px-5 py-2">
                        <label for="name" class="w-full text-zinc-700 dark:text-zinc-300">Address</label>
                        <input type="text" name="name" id="name" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                    </div>

                    <div class="px-5 py-2">
                        <label for="name" class="w-full text-zinc-700 dark:text-zinc-300">Email Address</label>
                        <input type="text" name="name" id="name" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                    </div>

                    <div class="px-5 py-2">
                        <label for="name" class="w-full text-zinc-700 dark:text-zinc-300">Phone Number</label>
                        <input type="text" name="name" id="name" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                    </div>

                    <div class="px-5 py-2">
                        <label for="name" class="w-full text-zinc-700 dark:text-zinc-300">Message</label>
                        <textarea  id="name" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1"></textarea>
                    </div>
                    
                    <div class="flex justify-center my-4">
                        <input type="submit" value="Submit" class="px-8 py-1 rounded-md bg-[#5977E9] text-white hover:bg-[#4866df] cursor-pointer">
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{asset('js/lightbox/lightbox.min.js')}}"></script>
@endsection