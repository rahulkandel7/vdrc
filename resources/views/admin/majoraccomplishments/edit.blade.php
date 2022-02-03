@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-primary text-3xl text-[#5977E9] font-bold">
                Update:- {{$majoraccomplishment->title}}
            </h3>
            <hr class="border-[#5977E9] dark:border-gray-500">
    
            @if($errors->any())
                <p class="my-3 text-red-400 font-bold">
                    {{$errors->first()}}
                </p>
              @endif
    
            <form method="post" action="{{route('admin.majoraccomplishments.update',$majoraccomplishment->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                {{-- For Title --}}
                <div class="mt-5">
                    <label for="title" class="block font-bold text-gray-600 dark:text-gray-200">Title</label>
                    <input type="text" name="title" id="title" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2" required value="{{$majoraccomplishment->title}}">
                </div>

                {{-- For support --}}
                <div class="mt-5">
                    <label for="support" class="block font-bold text-gray-600 dark:text-gray-200">Support</label>
                    <input type="text" name="support" id="support" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2" required value="{{$majoraccomplishment->support}}">
                </div>

                {{-- For objective --}}
                <div class="mt-5">
                    <label for="objective" class="block font-bold text-gray-600 dark:text-gray-200">Objective</label>
                    <textarea name="objective" id="objective" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2">{{$majoraccomplishment->objective}}</textarea>
                </div>

                {{-- For Period --}}
                <div class="mt-5">
                    <label for="period" class="block font-bold text-gray-600 dark:text-gray-200">Period</label>
                    <input type="text" name="period" id="period" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2"   required value="{{$majoraccomplishment->period}}">
                </div>
    
    
                
                {{--  Add and Discard Button --}}
                
                <div class="mt-4">
                    <button type="submit" class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-[#5977E9] hover:bg-[#3c56c0] rounded-md text-white">
                        Update
                    </button>
                    
                    <button class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-red-500 hover:bg-red-600 rounded-md text-white mx-5">
                        <a href="{{ route('admin.majoraccomplishments.index') }}" >Cancel</a>
                    </button>
                </div>
            </form>
    
            
        </div>
    </div>
@endsection
