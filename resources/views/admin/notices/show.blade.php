@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-primary text-3xl text-[#5977E9] font-bold">
                {{$notice->title}}
            </h3>
            <hr class="border-[#5977E9] dark:border-gray-500">
    
                        
    
            
        </div>
    </div>
@endsection
