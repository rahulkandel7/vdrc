@extends('layouts.admin.app')
@section('css')
<script src="https://code.highcharts.com/highcharts.js"></script>
@endsection
@section('main')
@include('layouts.message')
    <div class="px-6 pt-6 flex-1">
        <div class="flex flex-wrap">
            <a href="{{route('admin.articles.index')}}" class="w-64 my-4">
            <div class=" mx-4 mt-4 p-2 shadow-md rounded-md bg-emerald-500 shadow-emerald-200 hover:shadow-sm hover:cursor-pointer">
                <h2 class="text-xl font-bold text-white">No of Articles</h2>
                <div class="flex justify-between">
                    <i class="fa fa-newspaper fa-2x text-white opacity-70"></i>
                <h1 class="text-4xl font-bold text-right text-white mr-4">{{$articles}}</h1>
                </div>
            </div>
            </a>
            

            <a href="{{route('admin.notices.index')}}" class="w-64 my-4">
            <div class="  mx-4 mt-4 p-2 shadow-md shadow-orange-300 dark:shadow-gray-600 rounded-md bg-orange-500 hover:shadow-sm hover:cursor-pointer">
                <h2 class="text-xl font-bold text-white">No of Notices</h2>
                <div class="flex justify-between">
                    <i class="fas fa-copy fa-2x text-white opacity-70"></i>
                <h1 class="text-4xl font-bold text-right text-white mr-4"> {{$notices}} </h1>
                </div>
            </div>
            </a>

            <a href="{{route('admin.slideshows.index')}}" class="w-64 my-4">
                <div class="  mx-4 mt-4 p-2 shadow-md shadow-lime-300 dark:shadow-gray-600 rounded-md bg-lime-500 hover:shadow-sm hover:cursor-pointer">
                    <h2 class="text-xl font-bold text-white">No of Slideshows</h2>
                    <div class="flex justify-between">
                        <i class="fas fa-images fa-2x text-white opacity-70"></i>
                    <h1 class="text-4xl font-bold text-right text-white mr-4">{{$slideshows}}</h1>
                    </div>
                </div>
            </a>

            <a href="{{route('admin.recentactivities.index')}}" class="w-64 my-4">
            <div class="  mx-4 mt-4 p-2 shadow-md shadow-pink-300 dark:shadow-gray-600 rounded-md bg-pink-500 hover:shadow-sm hover:cursor-pointer">
                <h2 class="text-xl font-bold text-white">No of Recent Activity</h2>
                <div class="flex justify-between">
                    <i class="fas fa-tasks fa-2x text-white opacity-70"></i>
                <h1 class="text-4xl font-bold text-right text-white mr-4">{{$activities}}</h1>
                </div>
            </div>
            </a>

            

                <a href="{{route('admin.memberships.index')}}" class="w-64 my-4">
                    <div class="  mx-4 mt-4 p-2 shadow-md shadow-indigo-300 dark:shadow-gray-600 rounded-md bg-indigo-500 hover:shadow-sm hover:cursor-pointer">
                        <h2 class="text-xl font-bold text-white">No of Members</h2>
                        <div class="flex justify-between">
                            <i class="fas fa-users fa-2x text-white opacity-70"></i>
                        <h1 class="text-4xl font-bold text-right text-white mr-4">{{$members}}</h1>
                        </div>
                    </div>
                </a>

                <a href="{{route('admin.events.index')}}" class="w-64 my-4">
                    <div class="  mx-4 mt-4 p-2 shadow-md shadow-emerald-300 dark:shadow-gray-600 rounded-md bg-emerald-500 hover:shadow-sm hover:cursor-pointer">
                        <h2 class="text-xl font-bold text-white">No of Events</h2>
                        <div class="flex justify-between">
                            <i class="fas fa-calendar fa-2x text-white opacity-70"></i>
                        <h1 class="text-4xl font-bold text-right text-white mr-4">{{$events}}</h1>
                        </div>
                    </div>
                    </a>

                <a href="{{route('admin.publications.index')}}" class="w-64 my-4">
                    <div class="  mx-4 mt-4 p-2 shadow-md shadow-amber-300 dark:shadow-gray-600 rounded-md bg-amber-500 hover:shadow-sm hover:cursor-pointer">
                        <h2 class="text-xl font-bold text-white">No of Publications</h2>
                        <div class="flex justify-between">
                            <i class="fas fa-books fa-2x text-white opacity-70"></i>
                        <h1 class="text-4xl font-bold text-right text-white mr-4">{{$publications}}</h1>
                        </div>
                    </div>
                </a>

                <a href="{{route('admin.currentlyrunnings.index')}}" class="w-64 my-4">
                    <div class="  mx-4 mt-4 p-2 shadow-md shadow-fuchsia-300 dark:shadow-gray-600 rounded-md bg-fuchsia-500 hover:shadow-sm hover:cursor-pointer">
                        <h2 class="text-xl font-bold text-white">No of Currently Running Programs</h2>
                        <div class="flex justify-between">
                            <i class="fas fa-running fa-2x text-white opacity-70"></i>
                        <h1 class="text-4xl font-bold text-right text-white mr-4">{{$currently}}</h1>
                        </div>
                    </div>
                </a>

                <a href="{{route('admin.videos.index')}}" class="w-64 my-4">
                    <div class="  mx-4 mt-4 p-2 shadow-md shadow-teal-300 dark:shadow-gray-600 rounded-md bg-teal-500 hover:shadow-sm hover:cursor-pointer">
                        <h2 class="text-xl font-bold text-white">No of Videos</h2>
                        <div class="flex justify-between">
                            <i class="fas fa-video fa-2x text-white opacity-70"></i>
                        <h1 class="text-4xl font-bold text-right text-white mr-4">{{$videos}}</h1>
                        </div>
                    </div>
                </a>

                <a href="{{route('admin.galleries.index')}}" class="w-64 my-4">
                    <div class="  mx-4 mt-4 p-2 shadow-md shadow-sky-300 dark:shadow-gray-600 rounded-md bg-sky-500 hover:shadow-sm hover:cursor-pointer">
                        <h2 class="text-xl font-bold text-white">No of Gallery</h2>
                        <div class="flex justify-between">
                            <i class="fas fa-image fa-2x text-white opacity-70"></i>
                        <h1 class="text-4xl font-bold text-right text-white mr-4">{{$gallery}}</h1>
                        </div>
                    </div>
                </a>

            <a href="#" class="w-64 my-4">
            <div class="mx-4 mt-4 p-2 shadow-md rounded-md bg-indigo-500 hover:shadow-sm hover:cursor-pointer">
                <h2 class="text-xl font-bold text-white">No of Visits</h2>
                <div class="flex justify-between">
                    <i class="fa fa-globe fa-2x text-white opacity-70"></i>
                <h1 class="text-4xl font-bold text-right text-white mr-4">11555</h1>
                </div>
            </div>
            </a>
            

        </div>

        <div id="container" class="mt-8 bg-gray-500" style="max-width:100%; height:400px;"></div>
    </div>


    <script>
        var colorr = '#ffffff';
        if (document.documentElement.classList.contains('dark')) {
            colorr = '#1f2937';
        }
        document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('container', {
            chart:  { 
                backgroundColor: '#6a6671',
                color: 'white',
                type: 'line',
            },
            title: {
                text: 'No of Visits'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Visits'
                }
            },
            series: [{
                name: 'No of Visitors',
                data: [1, 0, 4]
            }]
        });
    });
    </script>
@endsection