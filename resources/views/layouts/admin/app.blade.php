<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- Alpine --}}
        <script src="//unpkg.com/alpinejs" defer></script>
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="{{ asset('myassets/js/datatable.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('myassets/css/datatable.css')}}">

        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>

        <style>
            [x-cloak] { 
      display: none !important;
   }
        </style>

        @yield('css')
    </head>
    <body class="font-sans antialiased dark:bg-gray-700 dark:text-slate-300">

            {{-- For Mobile Nav --}}

                <div class="w-full md:hidden shadow-gray-300 dark:shadow-gray-800 bg-blue-800 shadow-md" x-data="{ isNav: false }">
                    <div class="flex justify-between items-center">
                    <a href="/dashboard"><img src="{{ asset('images/logo.png') }}" width="200" alt="" class="p-5"></a>
                        <a  class="mr-8" @click="isNav=true" ><i class="fa fa-bars text-lg text-blue-400"></i></a>
                    </div>

                    <div class="w-full px-8" x-show="isNav" @click.away ="isNav=false">
                        <ul class="my-2">

                           
                            <a href="{{ route('dashboard') }}" class="block mt-1">
                                <li class="pl-4 text-lg py-2 font-semibold hover:bg-blue-300 hover:text-gray-700
                                {{(request()->routeIs('dashboard'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                transition-colors ease-in-out delay-100">
                                    <i class="fa fa-tachometer"></i> &nbsp; Dashboard
                                </li>
                             </a>
                             <a href="{{route('admin.articles.index')}}" class="block mt-1 ">
                                 <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                                 {{(request()->routeIs('admin.articles.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                 transition-colors ease-in-out delay-100">
                                     <i class="fa fa-newspaper"></i> &nbsp;  Articles
                                 </li>
                              </a>
             
                              <a href="{{route('admin.notices.index')}}" class="block mt-1 ">
                                 <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                                 {{(request()->routeIs('admin.notices.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                 transition-colors ease-in-out delay-100">
                                     <i class="fas fa-copy"></i> &nbsp;  Notices
                                 </li>
                              </a>
             
                              <a href="{{route('admin.recentactivities.index')}}" class="block mt-1 ">
                                 <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                                 {{(request()->routeIs('admin.recentactivities.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                 transition-colors ease-in-out delay-100">
                                     <i class="fas fa-tasks"></i> &nbsp;  Recent Activity
                                 </li>
                              </a>
             
                              <a href="{{route('admin.majoraccomplishments.index')}}" class="block mt-1 ">
                                 <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                                 {{(request()->routeIs('admin.majoraccomplishments.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                 transition-colors ease-in-out delay-100">
                                     <i class="fas fa-clipboard-list"></i> &nbsp;  Major Accomplishment
                                 </li>
                              </a>
             
                              <a href="{{route('admin.events.index')}}" class="block mt-1 ">
                                 <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                                 {{(request()->routeIs('admin.events.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                 transition-colors ease-in-out delay-100">
                                 <i class="fas fa-calendar"></i> &nbsp;  Events
                                 </li>
                              </a>
             
                              <a href="{{route('admin.memberships.index')}}" class="block mt-1 ">
                                 <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                                 {{(request()->routeIs('admin.memberships.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                 transition-colors ease-in-out delay-100">
                                     <i class="fas fa-users"></i> &nbsp;  Members
                                 </li>
                              </a>

                              <a href="{{route('admin.publications.index')}}" class="block mt-1 ">
                                <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                                {{(request()->routeIs('admin.publications.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                transition-colors ease-in-out delay-100">
                                    <i class="fas fa-books"></i> &nbsp;  Publications
                                </li>
                             </a>

                             <a href="{{route('admin.currentlyrunnings.index')}}" class="block mt-1 ">
                                <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                                {{(request()->routeIs('admin.currentlyrunnings.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                transition-colors ease-in-out delay-100">
                                    <i class="fas fa-running"></i> &nbsp;  Currently Running Programs
                                </li>
                             </a>

                             <a href="{{route('admin.videos.index')}}" class="block mt-1 ">
                                <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                                {{(request()->routeIs('admin.videos.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                transition-colors ease-in-out delay-100">
                                    <i class="fas fa-video"></i> &nbsp;  Videos
                                </li>
                             </a>
             
                             
                              <form method="POST" action="{{ route('logout')}}">
                                @csrf
                             <button type="submit" class="block mt-4 w-full ">
                                <li class="pl-4 text-left text-lg py-2 text-slate-300 hover:bg-blue-300 hover:text-gray-700 transition-colors ease-in-out delay-100">
                                    <i class="fa fa-sign-out"></i> &nbsp; Logout
                                </li>
                            </button>
                            </form>


                           </ul>
                    </div>

                </div>


       <div class="w-full h-full flex">
            <div class="w-64 hidden md:flex">
                <div class="w-64 max-h-100 h-full bg-[#5977E9] dark:bg-gray-800 dark:shadow-gray-700 shadow-lg shadow-sky-300 fixed">
                <a href="/dashboard" >
                    <img src="{{ asset('images/logo.png') }}" alt="" class="py-5 px-5">
                </a>
               <ul class="my-8">

                <a href="{{ route('dashboard') }}" class="block mt-1">
                   <li class="pl-4 text-lg py-2 font-semibold hover:bg-blue-300 hover:text-gray-700
                   {{(request()->routeIs('dashboard'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                   transition-colors ease-in-out delay-100">
                       <i class="fa fa-tachometer"></i> &nbsp; Dashboard
                   </li>
                </a>
                <a href="{{route('admin.articles.index')}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                    {{(request()->routeIs('admin.articles.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                        <i class="fa fa-newspaper"></i> &nbsp;  Articles
                    </li>
                 </a>

                 <a href="{{route('admin.notices.index')}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                    {{(request()->routeIs('admin.notices.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-copy"></i> &nbsp;  Notices
                    </li>
                 </a>

                 <a href="{{route('admin.recentactivities.index')}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                    {{(request()->routeIs('admin.recentactivities.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-tasks"></i> &nbsp;  Recent Activity
                    </li>
                 </a>

                 <a href="{{route('admin.majoraccomplishments.index')}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                    {{(request()->routeIs('admin.majoraccomplishments.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-clipboard-list"></i> &nbsp;  Major Accomplishment
                    </li>
                 </a>

                 <a href="{{route('admin.events.index')}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                    {{(request()->routeIs('admin.events.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                    <i class="fas fa-calendar"></i> &nbsp;  Events
                    </li>
                 </a>

                 <a href="{{route('admin.memberships.index')}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                    {{(request()->routeIs('admin.memberships.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-users"></i> &nbsp;  Members
                    </li>
                 </a>

                 <a href="{{route('admin.publications.index')}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                    {{(request()->routeIs('admin.publications.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-books"></i> &nbsp;  Publications
                    </li>
                 </a>

                 <a href="{{route('admin.currentlyrunnings.index')}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                    {{(request()->routeIs('admin.currentlyrunnings.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-running"></i> &nbsp;  Currently Running Programs
                    </li>
                 </a>

                 <a href="{{route('admin.videos.index')}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-blue-300 hover:text-gray-700 
                    {{(request()->routeIs('admin.videos.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-video"></i> &nbsp;  Videos
                    </li>
                 </a>

                

                <form method="POST" action="{{ route('logout')}}">
                    @csrf
                 <button type="submit" class="block mt-4 w-full ">
                    <li class="pl-4 text-left text-lg py-2 text-slate-300 hover:bg-blue-300 hover:text-gray-700 transition-colors ease-in-out delay-100">
                        <i class="fa fa-sign-out"></i> &nbsp; Logout
                    </li>
                </button>
                </form>


                 
                 
               </ul>

            </div>  

            </div>
            @yield('main')
       </div>

       <div class="fixed right-2 top-2 text-slate-300">
        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm ">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        </button>
    </div>
       @yield('js')

      <script>
          var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});
      </script>
    </body>
</html>
