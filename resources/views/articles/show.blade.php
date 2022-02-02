@extends('layouts.app')

@section('css')
    <style>
        .line {
            height: 0;
            border-top-width: 1px;
            /* border-style: dotted; */
        }
    </style>
@endsection

@section('content')
    <div class="w-11/12 mx-auto shadow-sm py-5 shadow-gray-300 dark:shadow-gray-900 rounded my-4 ">
        <div class="grid md:grid-cols-3">
            <div class="md:col-span-2">
                <h1 class="text-3xl py-4 px-2 font-semibold text-[#5977E9]">
                    <span class="border-l-4 border-[#5977E9] px-2"></span> 
                    Articles Title
                </h1>
                <hr class="line dark:border-zinc-500 border-[#5977E9]">
        
               <p class="text-lg py-2 px-5 text-zinc-700 dark:text-zinc-300">
                    Sharada Adhikari, permanent resident of Kalika Rural Municipality Ward No. 3, Rasuwa is a Village Model Farmer who practices agriculture as her major source of income. She is a well-known model farmer in her community. She has been helping herself and her community members eat healthy food and use their garden to grow nutritious vegetables.
               </p>
 
                <p class="text-lg py-2 px-5 text-zinc-700 dark:text-zinc-300">
                    However the situation of Sharada was not same in the past. In earlier days, though agriculture was her major occupation, she was not able to make desired profit out of it.  She says at that time, our food wouldn’t last for more than six month. My husband had to go abroad for additional income.
                </p>
                 
                <p class="text-lg py-2 px-5 text-zinc-700 dark:text-zinc-300">
                    Suaahara program has made efforts to increase the number of local volunteer agriculture support persons, such as VMFs and HFPBs who act as local agriculture resources for the community. Sharada was one of the beneficiaries for Suaahara program.  It’s when she got 2 days HFP training in 2069 B.S. her life changed. She considers the training as a breakthrough in her life. She says it drastically changed the way she was practicing agriculture.
               </p>
        
                

            </div>
            <div>
              <div class="px-8 my-5">
                  <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                    <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
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
                <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                  <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
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
                  <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
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