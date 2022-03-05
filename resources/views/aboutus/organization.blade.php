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
                <h1 class="text-3xl py-4 px-2 font-semibold text-[#000cf9]">
                    <span class="border-l-4 border-[#000cf9] px-2"></span> 
                    Organizational Structure
                </h1>
                <hr class="line dark:border-zinc-500 border-[#000cf9]">
                <p class="text-justify px-5 pt-5 text-zinc-600 dark:text-zinc-300">
                    The governing body - Executive Committee - provides overall policy guidance to the organization and ensures its smooth operation. The committee is headed by the President, selection of which is a democratic process. The committee comprised of 13 members is elected for a two-year term. There are a total of 93 members (3 Honorary, 67 General  and 23 Life-members) and different sub-committees are established to carry out organizational activities effectively.
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    The Executive Director appointed by the Executive Committee leads the senior management team to oversee office operations. VDRC-Nepal operations are divided into three program departments - Resource Mobilization, Welfare/Promotion, and Partnerships contributed currently by 34 staff (35% women) in total.
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Operational Strategies</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    <table >
                        <tr>
                            <td class="px-7 dark:text-zinc-300">
                                a) Sustainability
                            </td>
                            <td class="px-7 dark:text-zinc-300">
                                b) Change Management
                            </td>
                        </tr>

                        <tr>
                            <td class="px-7 dark:text-zinc-300">
                                c) Knowledge Management
                            </td>
                            <td class="px-7 dark:text-zinc-300">
                                d) Communication
                            </td>
                        </tr>

                        <tr>
                            <td class="px-7 dark:text-zinc-300">
                                e) Community Mobilization
                            </td>
                            <td class="px-7 dark:text-zinc-300">
                                f) Relationship Management
                            </td>
                        </tr>

                        <tr>
                            <td class="px-7 dark:text-zinc-300">
                                g) Human Resource Development
                            </td>
                            <td class="px-7 dark:text-zinc-300">
                                h) Succession Plan
                            </td>
                        </tr>
                    </table>
                </p>
        
                
            </div>
            <div>
              <div class="px-8 my-5 w-full">
                  <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                    <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#000cf9] text-left rounded-tr-full text-white  px-5">
                      Notices / Vacancy
                    </h1>
                    <ul class="px-5 text-[#000cf9] dark:text-zinc-400 text-md list-disc list-inside">
                      @foreach ($notices as $notice)
                        <li class="py-2">
                            <a href="/storage/{{$notice->filepath}}" class="hover:text-[#4a52e7] dark:hover:text-white">
                              <span class="font-semibold">{{$notice->title}}</span>
                              <p class="text-sm px-5">{{ \Carbon\Carbon::parse($notice->created_at)->format('d F Y')}}</p>
                              <hr class="line dark:border-zinc-500 border-[#000cf9]">
                            </a>
                        </li>
                      @endforeach
                      
                    </ul>
                    <div class="flex justify-center my-5">
                      <a href="{{route('notice')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a52e7]">
                        Read More
                      </a>
                    </div>
                  </div>
              </div>

              <div class="px-8 my-5">
                <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                  <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#000cf9] text-left rounded-tr-full text-white  px-5">
                    Articles
                  </h1>
                  <ul class="px-5 text-[#000cf9] dark:text-zinc-400 text-md list-disc list-inside">
                    @foreach ($articles as $article)
                        <li class="py-2">
                            <a href="{{route('articlesview',$article->id)}}" class="hover:text-[#4a52e7] dark:hover:text-white">
                              <span class="font-semibold">{{$article->title}}</span>
                              <p class="text-sm px-5">{{ \Carbon\Carbon::parse($article->created_at)->format('d F Y')}}</p>
                              <hr class="line dark:border-zinc-500 border-[#000cf9]">
                            </a>
                        </li>
                      @endforeach
                    
                  </ul>
                  <div class="flex justify-center my-5">
                    <a href="{{route('articles')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a52e7]">
                      Read More
                    </a>
                  </div>
                </div>
              </div>

              <div class="px-8 my-5">
                <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                  <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#000cf9] text-left rounded-tr-full text-white  px-5">
                    Recent Activities
                  </h1>
                  <ul class="px-5 text-[#000cf9] dark:text-zinc-400 text-md list-disc list-inside">
                    @foreach ($recentactivities as $recentactivity)
                        <li class="py-2">
                            <a href="{{route('recentactivitiesview',$recentactivity->id)}}" class="hover:text-[#4a52e7] dark:hover:text-white">
                              <span class="font-semibold">{{$recentactivity->title}}</span>
                              <p class="text-sm px-5">{{ \Carbon\Carbon::parse($recentactivity->created_at)->format('d F Y')}}</p>
                              <hr class="line dark:border-zinc-500 border-[#000cf9]">
                            </a>
                        </li>
                      @endforeach
                    
                  </ul>
                  <div class="flex justify-center my-5">
                    <a href="{{route('recentactivities')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a52e7]">
                      Read More
                    </a>
                  </div>
                </div>
              </div>

          </div>
        </div>

    </div>
@endsection