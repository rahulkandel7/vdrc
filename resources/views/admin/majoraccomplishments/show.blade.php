@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-primary text-3xl text-[#5977E9] font-bold">
                Major Accomplishment
            </h3>
            <hr class="border-[#5977E9] dark:border-gray-500">

            <h3 class="text-primary text-3xl  font-bold mt-3">
                {{$majoraccomplishment->title}}
            </h3>
            
            <div class="flex">
                <p class="font-bold text-lg dark:text-gray-200">
                    Support:
                </p>
                <p class="text-lg px-2 dark:text-gray-200">
                    {{$majoraccomplishment->support}}
                </p>
            </div>

            <div class="flex">
                <p class="font-bold text-lg dark:text-gray-200">
                    Objective:
                </p>
                <p class="text-lg px-2 dark:text-gray-200">
                    {{$majoraccomplishment->objective}}
                </p>
            </div>

            <div class="flex">
                <p class="font-bold text-lg dark:text-gray-200">
                    Period:
                </p>
                <p class="text-lg px-2 dark:text-gray-200">
                    {{$majoraccomplishment->period}}
                </p>
            </div>

        </div>
    </div>
@endsection
