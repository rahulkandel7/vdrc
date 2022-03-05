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
        <div class="grid md:grid-cols-3">
            <div class="md:col-span-2">
                <h1 class="text-3xl py-4 px-2 font-semibold text-[#000cf9]">
                    <span class="border-l-4 border-[#000cf9] px-2"></span> 
                    Life Members
                </h1>
                <hr class="line dark:border-zinc-500 border-[#000cf9]">
                <div class="flex flex-wrap justify-evenly">
                    @foreach ($lifes as $life)
                    <div class="w-56 shadow-lg rounded-md mx-3 my-4 images">
                        <img src="/storage/{{$life->photopath}}" class=" w-full h-56 rounded overflow-hidden">
                        <p class="text-center mt-2 font-semibold text-zinc-700 dark:text-zinc-200">
                            {{$life->name}}
                        </p>
                        <p class="text-center text-zinc-500">
                            {{$life->post}}
                        </p>
                        <p class="text-center text-slate-700 dark:text-zinc-300">
                            {{$life->address}}
                        </p>
                        <p class="text-center text-slate-500 hover:text-black dark:hover:text-white">
                            <a href="mailto:{{$life->email}}">{{$life->email}}</a>
                        </p>
                    </div>
                  @endforeach

                    

                </div>
        
                
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