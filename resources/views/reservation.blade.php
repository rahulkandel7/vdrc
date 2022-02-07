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
            Training Reservation
        </h1>
        <hr class="line dark:border-zinc-500 border-[#5977E9]">
        <form class="px-5" onchange="run()">
            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="name" class="w-full text-zinc-700 dark:text-zinc-300">Full Name</label>
                    <input type="text" name="name" id="name" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                </div>
                <div class="px-5">
                    <label for="organization" class="w-full text-zinc-700 dark:text-zinc-300">Organization / Institue</label>
                    <input type="text" name="organization" id="organization" class="w-full dark:text-black  rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="address" class="w-full text-zinc-700 dark:text-zinc-300">Address</label>
                    <input type="text" name="address" id="address" class="w-full rounded-md border-zinc-600 dark:text-black dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                </div>
                <div class="px-5">
                    <label for="email" class="w-full text-zinc-700 dark:text-zinc-300">Email</label>
                    <input type="text" name="email" id="email" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="phone" class="w-full text-zinc-700 dark:text-zinc-300">Phone number</label>
                    <input type="text" name="phone" id="phone" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                </div>
                <div class="px-5">
                    <label for="reserveFrom" class="w-full text-zinc-700  dark:text-zinc-300">Reserve From</label>
                    <input type="date" name="reserveFrom" id="reserveFrom" class="w-full dark:text-black  rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="reserveTo" class="w-full text-zinc-700 dark:text-zinc-300">Reserve To</label>
                    <input type="date" name="reserveTo" id="reserveTo" class="w-full dark:text-black  rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] mt-1">
                </div>
                <div class="px-5">
                    <label for="hall" class="w-full text-zinc-700 dark:text-zinc-300">Select Hall</label>
                    <select class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] dark:text-black mt-1 hallv" >
                        <option selected disabled>
                           -- Select Hall --
                        </option>
                        <option>Hall A</option>
                        <option>Hall B</option>
                    </select>
                </div>
            </div>


            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="hall" class="w-full text-zinc-700 dark:text-zinc-300">Select Trainee</label>
                    <select class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] dark:text-black mt-1 trainee">
                        <option>
                            Select Trainee
                        </option>
                    </select>
                </div>

                <div class="px-5">
                    <label for="hall" class="w-full text-zinc-700 dark:text-zinc-300">Male Participant</label>
                    <select class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] dark:text-black mt-1 male">
                        <option>
                            Male Participant
                        </option>
                    </select>
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">

                <div class="px-5">
                    <label for="hall" class="w-full text-zinc-700 dark:text-zinc-300">Female Participant</label>
                    <select  class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] dark:text-black mt-1 female">
                        <option>
                            Female Participant
                        </option>
                    </select>
                </div>

                <div class="px-5">
                    <label for="hall" class="w-full text-zinc-700 dark:text-zinc-300">Loding</label>
                    <select class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] dark:text-black mt-1">
                        @for ($i=1; $i<=60; $i++)
                        <option>
                            {{$i}}
                        </option>
                        @endfor
                        
                    </select>
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">

                <div class="px-5">
                    <label for="hall" class="w-full text-zinc-700 dark:text-zinc-300">Fooding</label>
                    <select class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] dark:text-black mt-1">
                        @for ($i=1; $i<=120; $i++)
                        <option>
                            {{$i}}
                        </option>
                        @endfor
                        
                    </select>
                </div>

                <div class="px-5">
                    <label for="hall" class="w-full text-zinc-700 dark:text-zinc-300">Select Price</label>
                    <select class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#5977E9] active:ring-[#5977E9] focus:border-[#5977E9] active:border-[#5977E9] dark:text-black mt-1">

                        <option>
                            With AC
                        </option>

                        <option>
                            Without AC
                        </option>

                        
                    </select>
                </div>
            </div>

            <div class="flex justify-center my-4">
                <input type="submit" value="Submit" class="px-8 py-1 rounded-md bg-[#5977E9] text-white hover:bg-[#4866df] cursor-pointer">
            </div>


        </form>

    </div>
@endsection

@section('js')
    <script>
        function run() {
            let h = $(".hallv option:selected").text();
            if(h === "Hall A") {
                console.log('hello a');

                for (let i = 1; i <=60; i++) {
                    $('.trainee').append($('<option>', { 
                        value: i,
                        text : i
                    }));
                    
                }

            }

            if(h === "Hall B") {
                console.log('hello b');

                for (let i = 1; i <=40; i++) {
                    $('.trainee').append($('<option>', { 
                        value: i,
                        text : i
                    }));
                    
                }

            }
            let t = $(".trainee option:selected").text();

            for (let i = 1; i <=t; i++) {
                $('.male').append($('<option>', { 
                    value: i,
                    text : i
                }));
                    
            }

            let m = $(".male option:selected").text();
            
            let f = t-m;


            if(!f.value.isNan){
            alert(f.value);

                $('.female').append($('<option selected >', { 
                    value: f,
                    text : f
                }));
            }

        }
    </script>
@endsection