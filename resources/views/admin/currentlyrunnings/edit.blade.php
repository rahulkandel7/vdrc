@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-primary text-3xl text-[#5977E9] font-bold">
                {{$currentlyrunning->title}}
            </h3>
            <hr class="border-[#5977E9] dark:border-gray-500">
    
            @if($errors->any())
                <p class="my-3 text-red-400 font-bold">
                    {{$errors->first()}}
                </p>
              @endif
    
            <form method="post" action="{{route('admin.currentlyrunnings.update',$currentlyrunning->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                {{-- For Title --}}
                <div class="mt-5">
                    <label for="title" class="block font-bold text-gray-600 dark:text-gray-200">Title</label>
                    <input type="text" name="title" id="title" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2" required value="{{$currentlyrunning->title}}">
                </div>
    
                {{-- For description  --}}
                <div class="mt-5">
                    <label for="description" class="block font-bold text-gray-600 dark:text-gray-200">Description</label>
                    <textarea  name="description" id="description" class="editor border-0 w-full focus:ring-transparent focus:border-primary bg-transparent mt-2">{{$currentlyrunning->description}}</textarea>
                </div>
    
    
                
                {{--  Add and Discard Button --}}
                
                <div class="mt-4">
                    <button type="submit" class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-[#5977E9] hover:bg-[#3c56c0] rounded-md text-white">
                        Update
                    </button>
                    
                    <button class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-red-500 hover:bg-red-600 rounded-md text-white mx-5">
                        <a href="{{ route('admin.currentlyrunnings.index') }}" >Cancel</a>
                    </button>
                </div>
            </form>
    
            
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script>

			const watchdog = new CKSource.EditorWatchdog();
			
			window.watchdog = watchdog;
			
			watchdog.setCreator( ( element, config ) => {
				return CKSource.Editor
					.create( element, config )
					.then( editor => {
						
						
						
			
						return editor;
					} )
			} );
			
			watchdog.setDestructor( editor => {
				
				
			
				return editor.destroy();
			} );
			
			watchdog.on( 'error', handleError );
			
			watchdog
				.create( document.querySelector( '.editor' ), {
					
					licenseKey: '',
					
					
					
				} )
				.catch( handleError );
			
			function handleError( error ) {
				console.error( 'Oops, something went wrong!' );
				console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
				console.warn( 'Build id: kvtdcaa8eob-38ok4bbwko32' );
				console.error( error );
			}
			
		
    </script>
@endsection
