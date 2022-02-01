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
        <div class="grid grid-cols-3">
            <div class="col-span-2">
                <h1 class="text-3xl py-4 px-2 font-semibold text-[#5977E9]">
                    <span class="border-l-4 border-[#5977E9] px-2"></span> 
                    Report
                </h1>
                <hr class="line dark:border-zinc-500 border-[#5977E9]">
        
                <ul class="px-4 font-bold my-2 text-lg text-[#5977E9]  dark:text-zinc-400 list-inside list-decimal">
                    <a href="" title="Download File">
                        <li  class="py-2 hover:text-zinc-500">
                            A Completion Report On Oratory Competition 
                            <span>
                                (Publised Date: 05, Jan 2020 )
                            </span>
                         </li>
                    </a>

                    <a href="" title="Download File"  >
                        <li class="py-2 hover:text-zinc-500">
                            Annual Progress Report (2075/76)and Program and Budget (2076/77) 
                            <span>
                                (Publised Date: 05, Jan 2020 ) 
                            </span>
                         </li>
                    </a>

                    <a href="" title="Download File" >
                        <li class="py-2 hover:text-zinc-500">
                            Annual report 2017 
                            <span>
                                (Publised Date: 18, Apr 2018 ) 
                            </span>
                         </li>
                    </a>

                    <a href="" title="Download File">
                        <li  class="py-2 hover:text-zinc-500">
                            Annual Report 2018 
                            <span>
                                (Publised Date: 05, Jan 2020 ) 
                            </span>
                         </li>
                    </a>

                    <a href="" title="Download File">
                        <li  class="py-2 hover:text-zinc-500">
                            Annual Progress Report (2074/75) and Program and Budget (2075/76)
                            <span>
                                (Publised Date: 15, Oct 2019 ) 
                            </span>
                         </li>
                    </a>

                    <a href="" title="Download File" >
                        <li class="py-2 hover:text-zinc-500">
                            VDRC CFLG Outcome Study Report 
                            <span>
                                (Publised Date: 05, Jan 2020 ) 
                            </span>
                         </li>
                    </a>

                    <a href="" title="Download File" >
                        <li class="py-2 hover:text-zinc-500">
                            VDRC-Nepal Strategic Plan 2017-2021
                            <span>
                                (Publised Date: 05, Jan 2020 ) 
                            </span>
                         </li>
                    </a>
                </ul>
        
                

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