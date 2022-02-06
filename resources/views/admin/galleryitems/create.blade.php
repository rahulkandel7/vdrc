@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-primary text-3xl text-[#5977E9] font-bold">
                Add new Image
            </h3>
            <hr class="border-[#5977E9] dark:border-gray-500">
    
            @if($errors->any())
                <p class="my-3 text-red-400 font-bold">
                    {{$errors->first()}}
                </p>
              @endif
    
            <form method="post" action="{{route('admin.galleryitems.store')}}" enctype="multipart/form-data">
                @csrf
                
    
                {{-- For selecting Image --}}
                <div class="mt-5">
                    <label for="photopath" class="block font-bold text-gray-600 dark:text-gray-200">Select Image</label>
                    <input type="file" name="photopath" id="photopath" class="border-0 w-full focus:ring-transparent focus:border-primary bg-transparent mt-2 file:border-none file:text-white file:bg-[#5977E9] file:rounded-md file:hover:bg-[#415dce] file:cursor-pointer">
                </div>
    

                
                {{--  Add and Discard Button --}}
                
                <div class="mt-4">
                    <button type="submit" class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-[#5977E9] hover:bg-[#3c56c0] rounded-md text-white">
                        Add
                    </button>
                    
                    <button class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-red-500 hover:bg-red-600 rounded-md text-white mx-5">
                        <a href="{{ route('admin.galleryitems.index') }}" >Cancel</a>
                    </button>
                </div>
            </form>
    
            
        </div>
    </div>
@endsection
