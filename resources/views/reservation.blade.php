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
@include('layouts.message')
    <div class="w-11/12 mx-auto shadow-sm py-5 shadow-gray-300 dark:shadow-gray-900 rounded my-4 ">
        <h1 class="text-3xl py-4 px-2 font-semibold text-[#000cf9]">
            <span class="border-l-4 border-[#000cf9] px-2"></span> 
            Training Reservation
        </h1>
        <hr class="line dark:border-zinc-500 border-[#000cf9]">
        <form class="px-5" action="{{route('reservations.store')}}" method="post">
            @csrf
            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="name" class="w-full text-zinc-700 dark:text-zinc-300">Full Name</label>
                    <input type="text" name="name" id="name" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] mt-1" required value="{{old('name')}}">
                </div>
                <div class="px-5">
                    <label for="organization" class="w-full text-zinc-700 dark:text-zinc-300">Organization / Institue</label>
                    <input type="text" name="organization_name" id="organization" class="w-full dark:text-black  rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] mt-1" required value="{{old('organization_name')}}">
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="address" class="w-full text-zinc-700 dark:text-zinc-300">Address</label>
                    <input type="text" name="address" id="address" class="w-full rounded-md border-zinc-600 dark:text-black dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] mt-1" required value="{{old('address')}}">
                </div>
                <div class="px-5">
                    <label for="email" class="w-full text-zinc-700 dark:text-zinc-300">Email</label>
                    <input type="email" name="email" id="email" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] mt-1" required value="{{old('email')}}">
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="phone" class="w-full text-zinc-700 dark:text-zinc-300">Phone number</label>
                    <input type="text" name="phone" id="phone" class="w-full rounded-md dark:text-black  border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] mt-1" required value="{{old('phone')}}">
                </div>
                <div class="px-5">
                    <label for="reservefrom" class="w-full text-zinc-700  dark:text-zinc-300">Reserve From</label>
                    <input type="date" name="reservefrom" id="reservefrom" class="w-full dark:text-black  rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] mt-1" required value="{{old('reservefrom')}}">
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="reserveto" class="w-full text-zinc-700 dark:text-zinc-300">Reserve To</label>
                    <input type="date" name="reserveto" id="reserveto" class="w-full dark:text-black  rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] mt-1" required value="{{old('reserveto')}}">
                </div>
                <div class="px-5">
                    <label for="hall" class="w-full text-zinc-700 dark:text-zinc-300">Select Hall</label>
                    <select id="hall" name="hall" class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] dark:text-black mt-1 hallv" onchange="hallselect()">
                        <option selected disabled>
                           -- Select Hall --
                        </option>
                        <option value="Hall A">Hall A</option>
                        <option value="Hall B">Hall B</option>
                    </select>
                </div>
            </div>


            <div class="grid md:grid-cols-2 my-2">
                <div class="px-5">
                    <label for="trainee" class="w-full text-zinc-700 dark:text-zinc-300">Select Trainee</label>
                    <select id="trainee" name="trainee" class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] dark:text-black mt-1 trainee" onfocus="traineeselect()">
                        <option >
                            Select Trainee
                        </option>
                    </select>
                </div>

                <div class="px-5">
                    <label for="male" class="w-full text-zinc-700 dark:text-zinc-300">Male Participant</label>
                    <select id="male" name="male" class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] dark:text-black mt-1 male" onfocus="maleselect()">
                        <option>
                            Male Participant
                        </option>
                    </select>
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">

                <div class="px-5">
                    <label for="female" class="w-full text-zinc-700 dark:text-zinc-300">Female Participant</label>
                    <select name="female" id="female" class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] dark:text-black mt-1 female" onfocus="femaleselect()">
                        <option>
                            Female Participant
                        </option>
                    </select>
                </div>

                <div class="px-5">
                    <label for="loding" class="w-full text-zinc-700 dark:text-zinc-300">Loding</label>
                    <select name="loding" id="loding" class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] dark:text-black mt-1">
                        @for ($i=1; $i<=60; $i++)
                        <option value="{{$i}}">
                            {{$i}}
                        </option>
                        @endfor
                        
                    </select>
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-2">

                <div class="px-5">
                    <label for="fooding"  class="w-full text-zinc-700 dark:text-zinc-300">Fooding</label>
                    <select name="fooding" id="fooding" class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] dark:text-black mt-1">
                        @for ($i=1; $i<=120; $i++)
                        <option value="{{$i}}">
                            {{$i}}
                        </option>
                        @endfor
                        
                    </select>
                </div>

                <div class="px-5">
                    <label for="type" class="w-full text-zinc-700 dark:text-zinc-300">Select Price</label>
                    <select name="type" id="type" class="w-full rounded-md border-zinc-600 dark:border-zinc-300 focus:ring-[#000cf9] active:ring-[#000cf9] focus:border-[#000cf9] active:border-[#000cf9] dark:text-black mt-1 price" onchange="price()">
                        <option selected disabled>-- Select Package --</option>

                        <option value="With AC">With AC</option>

                        <option value="Without AC">Without AC</option>

                        
                    </select>
                    <p  id="price" class="w-full text-zinc-700 dark:text-zinc-300 my-2"></p>
                </div>
            </div>

            <div class="flex justify-center my-4">
                <input type="submit" value="Submit" class="px-8 py-1 rounded-md bg-[#000cf9] text-white hover:bg-[#575dc0] cursor-pointer">
            </div>


        </form>

    </div>
@endsection

@section('js')
    <script>
        let h;
        let t;
        function hallselect() {
             h = $(".hallv option:selected").text();
        }
        function traineeselect() {
            // alert(h);
            if(h === "Hall A") {
                $('.trainee').empty();

                for (let i = 1; i <=60; i++) {
                    $('.trainee').append($('<option>', { 
                        value: i,
                        text : i
                    }));
                    
                }

            }

            if(h === "Hall B") {
                $('.trainee').empty();


                for (let i = 1; i <=40; i++) {
                    $('.trainee').append($('<option>', { 
                        value: i,
                        text : i
                    }));
                    
                }

            }
        }
        function maleselect() {
            
            
            t = $(".trainee option:selected").text();
            $('.male').empty();
            for (let i = 1; i <=t; i++) {
                $('.male').append($('<option>', { 
                    value: i,
                    text : i
                }));
                    
            }

        }

        function femaleselect() {
            let m = $(".male option:selected").text();
            
            let f = parseInt(t)-parseInt(m);

                $('.female').empty();
                $('.female').append($('<option >', { 
                    value: f,
                    text : f
                }));
        }

        function price() {
            let p = $(".price option:selected").text();
            console.log(p);
            if(p == "With AC") {
                $('#price').text("NRS 2000/pax per day(With AC)");
            }
            if(p == "Without AC") {
                $('#price').text("NRS 1600/pax per day(Without AC)");
            }

        }
    </script>
@endsection