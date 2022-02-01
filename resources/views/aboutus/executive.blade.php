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
@endsection

@section('content')
    <div class="w-11/12 mx-auto shadow-sm py-5 shadow-gray-300 dark:shadow-gray-900 rounded my-4 ">
        <div class="grid grid-cols-3">
            <div class="col-span-2">
                <h1 class="text-3xl py-4 px-2 font-semibold text-[#5977E9]">
                    <span class="border-l-4 border-[#5977E9] px-2"></span> 
                    Executive Committee
                </h1>
                <hr class="line dark:border-zinc-500 border-[#5977E9]">
                <div class="flex flex-wrap justify-evenly">
                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/1.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Ms. Laxmi Gautam (Kandel)
                        </p>
                        <p class="text-center text-zinc-500">
                            President
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Shiva Mandir , Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:lgautam@vdrc.org.np">lgautam@vdrc.org.np</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/2.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Harilal Sapkota
                        </p>
                        <p class="text-center text-zinc-500">
                            Member (IPP)
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot-8, Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:hlsapkota@vdrc.org.np">hlsapkota@vdrc.org.np</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/3.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Krishna Prasad Sapkota
                        </p>
                        <p class="text-center text-zinc-500">
                            Vice-President
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot-8 , Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:ksapkota@vdrc.org.np">ksapkota@vdrc.org.np</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/4.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Bhumi Raj Chapagain
                        </p>
                        <p class="text-center text-zinc-500">
                            Secretary
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot-5 , Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:brchapagain@gmail.com">brchapagain@gmail.com</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/5.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Ms. Parbati Kandel
                        </p>
                        <p class="text-center text-zinc-500">
                            Treasurer
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot-8, Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:pkandel@vdrc.org.np">pkandel@vdrc.org.np</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/6.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Ms. Rekha Shrestha
                        </p>
                        <p class="text-center text-zinc-500">
                            Joint-Secretary
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot-2, Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:rshrestha@vdrc.org.np">rshrestha@vdrc.org.np</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/7.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Dip Narayan Sapkota
                        </p>
                        <p class="text-center text-zinc-500">
                            Member
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot-7,  Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:dnsapkota@vdrc.org.np">dnsapkota@vdrc.org.np</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/8.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Ms. Sita Rijal
                        </p>
                        <p class="text-center text-zinc-500">
                            Member
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot- Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:srijal@vdrc.org.np">srijal@vdrc.org.npp</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/9.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr.Khadga Jung Gurung
                        </p>
                        <p class="text-center text-zinc-500">
                            Member
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Kshetrapur, Chitwan
                        </p>
                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/10.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Tikaram Kandel
                        </p>
                        <p class="text-center text-zinc-500">
                            Member
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot-5, Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:trkandel@vdrc.org.np">trkandel@vdrc.org.np</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/11.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Tila Ban Arjun
                        </p>
                        <p class="text-center text-zinc-500">
                            Member
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot-8, Nawalparasi
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:tbarjun@vdrc.org.np">tbarjun@vdrc.org.np</a>
                        </p>
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/12.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Ms.Parbati Kandel Sapkota
                        </p>
                        <p class="text-center text-zinc-500">
                            Member
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Gaindakot-8 , Nawalpur
                        </p>
                        {{-- <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:pkandel@vdrc.org.np">pkandel@vdrc.org.np</a>
                        </p> --}}
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/executive/13.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Ms. Sajana Nepali
                        </p>
                        <p class="text-center text-zinc-500">
                            Member
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            Mukundapur, Nawalpur
                        </p>
                        {{-- <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:pkandel@vdrc.org.np">pkandel@vdrc.org.np</a>
                        </p> --}}
                    </div>

                </div>
        
                
            </div>
            <div>
                <div class="px-8 my-5">
                    <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                      <h1 class="text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
                        Notices / Vacancy
                      </h1>
                      <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-md list-disc list-inside">
                        <li class="py-2">
                          <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                            <span class="font-semibold">Article Name</span>
                            <p class="text-sm px-5">Jul, 2020</p>
                            <hr class="line dark:border-zinc-500 border-[#5977E9]">
                          </a>
                        </li>
                        <li class="py-2">
                          <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                            <span class="font-semibold">Article Name</span>
                            <p class="text-sm px-5">Jul, 2020</p>
                            <hr class="line dark:border-zinc-500 border-[#5977E9]">
                          </a>
                        </li>
                      </ul>
                      <div class="flex justify-center my-5">
                        <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                          Read More
                        </a>
                      </div>
                    </div>
                </div>

                <div class="px-8 my-5">
                    <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded  pb-2">
                        <h1 class="text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
                            Articles
                          </h1>
                      <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-md list-disc list-inside">
                        <li class="py-2">
                          <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                            <span class="font-semibold">Article Name</span>
                            <p class="text-sm px-5">Jul, 2020</p>
                            <hr class="line dark:border-zinc-500 border-[#5977E9]">
                          </a>
                        </li>
                        <li class="py-2">
                          <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                            <span class="font-semibold">Article Name</span>
                            <p class="text-sm px-5">Jul, 2020</p>
                            <hr class="line dark:border-zinc-500 border-[#5977E9]">
                          </a>
                        </li>
                      </ul>
                      <div class="flex justify-center my-5">
                        <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                          Read More
                        </a>
                      </div>
                    </div>
                </div>

                <div class="px-8 my-5">
                    <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                        <h1 class="text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
                           Recent Activities
                          </h1>
                      <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-md list-disc list-inside">
                        <li class="py-2">
                          <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                            <span class="font-semibold">Article Name</span>
                            <p class="text-sm px-5">Jul, 2020</p>
                            <hr class="line dark:border-zinc-500 border-[#5977E9]">
                          </a>
                        </li>
                        <li class="py-2">
                          <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                            <span class="font-semibold">Article Name</span>
                            <p class="text-sm px-5">Jul, 2020</p>
                            <hr class="line dark:border-zinc-500 border-[#5977E9]">
                          </a>
                        </li>
                      </ul>
                      <div class="flex justify-center my-5">
                        <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                          Read More
                        </a>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection