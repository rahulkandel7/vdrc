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
                    Ex-Presidents
                </h1>
                <hr class="line dark:border-zinc-500 border-[#5977E9]">
                <div class="flex flex-wrap justify-evenly">
                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/1.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr.Rishi Ram Sapkota
                        </p>
                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/2.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Laxmi Prasad Acharya
                        </p>
                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/3.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Khagaraj Acharya
                        </p>
                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/4.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Indra Raj Jyoti Poudel
                        </p>
                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/5.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Khem Raj Sapkota
                            
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            President
                        </p>
                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/6.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Ram Prasad Poudel
                        </p>

                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/7.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr.Keshab Prasad Sapkota
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            President
                        </p>
                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/8.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Narayan Sapkota
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            President
                        </p>
                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/9.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Basanta Raj Lamsal
                        </p>
                        
                    </div>

                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="{{asset('images/expresident/10.jpeg')}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            Mr. Harilal Sapkota
                        </p>
                        
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