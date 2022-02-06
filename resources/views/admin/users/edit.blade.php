@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class=" text-3xl text-[#5977E9] font-bold">
                Change Password
            </h3>
            <hr class="border-[#5977E9] dark:border-gray-500">
    
            @if($errors->any())
                <p class="my-3 text-red-400 font-bold">
                    {{$errors->first()}}
                </p>
              @endif
    
            <form method="post" action="{{route('admin.users.update',Auth::id())}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                {{-- For  name --}}
                <div class="mt-5">
                    <label for="name" class="block font-bold text-gray-600 dark:text-gray-200">Username</label>
                    <input type="text" name="name" id="name" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2" readonly value="{{$user->name}}">
                </div>

                {{-- For  email --}}
                <div class="mt-5">
                    <label for="email" class="block font-bold text-gray-600 dark:text-gray-200">Email Address</label>
                    <input type="email" name="email" id="email" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2" readonly value="{{$user->email}}">
                </div>

                {{-- For  password --}}
                <div class="mt-5">
                    <label for="password" class="block font-bold text-gray-600 dark:text-gray-200">New Password</label>
                    <input type="password" name="password" id="password" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2" >
                </div>

                {{-- For  Confirm Password --}}
                <div class="mt-5">
                    <label for="password_confirmation" class="block font-bold text-gray-600 dark:text-gray-200">New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2" >
                </div>
    
                
                
                {{--  Add and Discard Button --}}
                
                <div class="mt-4">
                    <button type="submit" class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-[#5977E9] hover:bg-[#3c56c0] rounded-md text-white">
                        Update
                    </button>
                    
                    <button class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-red-500 hover:bg-red-600 rounded-md text-white mx-5">
                        <a href="{{ route('admin.notices.index') }}" >Cancel</a>
                    </button>
                </div>
            </form>
    
            
        </div>
    </div>
@endsection
