<div class="w-full bg-[#5977E9] dark:bg-gray-700 hidden md:block">
   <div class="w-11/12 mx-auto py-2">
        <div class=" flex justify-center mb-2">
            <img src="{{asset('images/logo.png')}}" class="w-80">
        </div>
        <div class="flex justify-center">
            <ul class="flex justify-end text-white text-md">
                <a href="/" class="{{request()->routeIs('home') ? 'bg-[#000DF6] rounded-md' : ''}}">
                    <x-nav-items values="Home"/>
                </a>

                <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('aboutus.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <a href="#about-us" class="flex items-center" @mouseover="isDrop=true">
                            <span class="mr-1 ">About US</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </a>

                        <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="{{route('aboutus.introduction')}}">
                                <li class="px-4 py-2 {{request()->routeIs('aboutus.introduction') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Introduction
                                </li>
                            </a>
                            <a href="{{route('aboutus.os')}}">
                                <li class="px-4 py-2 {{request()->routeIs('aboutus.os') ? 'bg-[#5977E9] text-white' : ''}} hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Organizational Structure
                                </li>
                            </a>
                            <a href="{{route('aboutus.ec')}}">
                                <li class="px-4 py-2 {{request()->routeIs('aboutus.ec') ? 'bg-[#5977E9] text-white' : ''}} hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Executive Committee
                                </li>
                            </a>
                            <a href="{{route('aboutus.sm')}}">
                                <li class="px-4 py-2 {{request()->routeIs('aboutus.sm') ? 'bg-[#5977E9] text-white' : ''}} hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Staff Members
                                </li>
                            </a>
                        </ul>
                    </div>
                    
                </li>

                <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('programs.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <button class="flex items-center" @mouseover="isDrop=true">
                            <span class="mr-1 ">Programs</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>

                        <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="{{route('programs.rmp')}}">
                                <li class="px-4 py-2 {{request()->routeIs('programs.rmp') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Resource Mobilization Program
                                </li>
                            </a>
                            <a href="{{route('programs.pwp')}}">
                                <li class="px-4 py-2 {{request()->routeIs('programs.pwp') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Promotion and Welfare Program
                                </li>
                            </a>
                            <a href="{{route('programs.pp')}}">
                                <li class="px-4 py-2 {{request()->routeIs('programs.pp') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Partnership Program
                                </li>
                            </a>
                            <a href="{{route('programs.crp')}}">
                                <li class="px-4 py-2 {{request()->routeIs('programs.crp') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Currently Running Programs
                                </li>
                            </a>
                        </ul>
                    </div>
                    
                </li>

                <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('membership.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <button class="flex items-center " @mouseover="isDrop=true">
                            <span class="mr-1 ">Membership</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>

                        <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="{{route('membership.hm')}}">
                                <li class="px-4 py-2 {{request()->routeIs('membership.hm') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Honorable Members
                                </li>
                            </a>
                            <a href="{{route('membership.lm')}}">
                                <li class="px-4 py-2 {{request()->routeIs('membership.lm') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Life Members
                                </li>
                            </a>
                            <a href="{{route('membership.gm')}}">
                                <li class="px-4 py-2 {{request()->routeIs('membership.gm') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                   General Members
                                </li>
                            </a>
                            <a href="{{route('membership.ep')}}">
                                <li class="px-4 py-2 {{request()->routeIs('membership.ep') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Ex - Presidents
                                </li>
                            </a>
                        </ul>
                    </div>
                    
                </li>

                <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('publications.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <button class="flex items-center" @mouseover="isDrop=true">
                            <span class="mr-1 ">Publications</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>

                        <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="{{route('publications.report')}}">
                                <li class="px-4 py-2 {{request()->routeIs('publications.report') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Report
                                </li>
                            </a>
                            <a href="{{route('publications.newsletter')}}">
                                <li class="px-4 py-2 {{request()->routeIs('publications.newsletter') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Newsletter
                                </li>
                            </a>
                            
                        </ul>
                    </div>
                    
                </li>

                <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('gallery.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <button class="flex items-center" @mouseover="isDrop=true">
                            <span class="mr-1 ">Gallery</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>

                        <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="{{route('gallery.pg')}}">
                                <li class="px-4 py-2 {{request()->routeIs('gallery.pg') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Photo Gallery
                                </li>
                            </a>
                            <a href="{{route('gallery.vg')}}">
                                <li class="px-4 py-2 {{request()->routeIs('gallery.vg') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                    Video Gallery
                                </li>
                            </a>
                        </ul>
                    </div>
                    
                </li>

                <a href="{{route('reservation')}}" class="{{request()->routeIs('reservation') ? 'bg-[#000DF6] rounded-md' : ''}}">
                    <x-nav-items values="Reserve Training Center" />
                </a>
                <a href="{{route('contact')}}" class="{{request()->routeIs('contact') ? 'bg-[#000DF6] rounded-md' : ''}}">
                    <x-nav-items values="Contact Us"/>
                </a>

                <li class="mx-2">
                    <button id="theme-toggle" type="button" class="text-white dark:text-gray-400 hover:bg-[#000DF6] dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-md p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden  w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
                </li>
                
            </ul>
        </div>
        
   </div>
</div>

<div class="w-full bg-[#5977E9] md:hidden" x-data="{isNav:false}">
    <div class="w-11/12 mx-auto flex justify-between items-center" >
        <img src="{{asset('images/logo.png')}}" class="w-52 my-2">
        <button @click="isNav=true">
            <i class="fa fa-bars text-white text-2xl"></i>
        </button>
        
    </div>
    <div x-show="isNav" @click.away="isNav=false" x-cloak>
        <ul class=" text-white text-md">
            <a href="/" class="">
                <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('home') ? 'bg-[#000DF6] rounded-md' : ''}}">
                    Home
                </li>
            </a>

            <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('aboutus.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <a href="#about-us" class="flex items-center" @mouseover="isDrop=true">
                        <span class="mr-1 ">About US</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </a>

                    <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="{{route('aboutus.introduction')}}">
                            <li class="px-4 py-2 {{request()->routeIs('aboutus.introduction') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Introduction
                            </li>
                        </a>
                        <a href="{{route('aboutus.os')}}">
                            <li class="px-4 py-2 {{request()->routeIs('aboutus.os') ? 'bg-[#5977E9] text-white' : ''}} hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Organizational Structure
                            </li>
                        </a>
                        <a href="{{route('aboutus.ec')}}">
                            <li class="px-4 py-2 {{request()->routeIs('aboutus.ec') ? 'bg-[#5977E9] text-white' : ''}} hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Executive Committee
                            </li>
                        </a>
                        <a href="{{route('aboutus.sm')}}">
                            <li class="px-4 py-2 {{request()->routeIs('aboutus.sm') ? 'bg-[#5977E9] text-white' : ''}} hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Staff Members
                            </li>
                        </a>
                    </ul>
                </div>
                
            </li>

            <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('programs.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <button class="flex items-center" @mouseover="isDrop=true">
                        <span class="mr-1 ">Programs</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>

                    <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="{{route('programs.rmp')}}">
                            <li class="px-4 py-2 {{request()->routeIs('programs.rmp') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Resource Mobilization Program
                            </li>
                        </a>
                        <a href="{{route('programs.pwp')}}">
                            <li class="px-4 py-2 {{request()->routeIs('programs.pwp') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Promotion and Welfare Program
                            </li>
                        </a>
                        <a href="{{route('programs.pp')}}">
                            <li class="px-4 py-2 {{request()->routeIs('programs.pp') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Partnership Program
                            </li>
                        </a>
                        <a href="{{route('programs.crp')}}">
                            <li class="px-4 py-2 {{request()->routeIs('programs.crp') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Currently Running Programs
                            </li>
                        </a>
                    </ul>
                </div>
                
            </li>

            <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('membership.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <button class="flex items-center " @mouseover="isDrop=true">
                        <span class="mr-1 ">Membership</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>

                    <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="{{route('membership.hm')}}">
                            <li class="px-4 py-2 {{request()->routeIs('membership.hm') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Honorable Members
                            </li>
                        </a>
                        <a href="{{route('membership.lm')}}">
                            <li class="px-4 py-2 {{request()->routeIs('membership.lm') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Life Members
                            </li>
                        </a>
                        <a href="{{route('membership.gm')}}">
                            <li class="px-4 py-2 {{request()->routeIs('membership.gm') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                               General Members
                            </li>
                        </a>
                        <a href="{{route('membership.ep')}}">
                            <li class="px-4 py-2 {{request()->routeIs('membership.ep') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Ex - Presidents
                            </li>
                        </a>
                    </ul>
                </div>
                
            </li>

            <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('publications.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <button class="flex items-center" @mouseover="isDrop=true">
                        <span class="mr-1 ">Publications</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>

                    <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="{{route('publications.report')}}">
                            <li class="px-4 py-2 {{request()->routeIs('publications.report') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Report
                            </li>
                        </a>
                        <a href="{{route('publications.newsletter')}}">
                            <li class="px-4 py-2 {{request()->routeIs('publications.newsletter') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Newsletter
                            </li>
                        </a>
                        
                    </ul>
                </div>
                
            </li>

            <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('gallery.*') ? 'bg-[#000DF6] rounded-md' : ''}}" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <button class="flex items-center" @mouseover="isDrop=true">
                        <span class="mr-1 ">Gallery</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>

                    <ul class=" absolute  text-[#5977E9] dark:text-zinc-200 font-normal text-sm pt-1 w-52 z-10 bg-slate-50 dark:bg-slate-700 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="{{route('gallery.pg')}}">
                            <li class="px-4 py-2 {{request()->routeIs('gallery.pg') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Photo Gallery
                            </li>
                        </a>
                        <a href="{{route('gallery.vg')}}">
                            <li class="px-4 py-2 {{request()->routeIs('gallery.vg') ? 'bg-[#5977E9] text-white' : ''}}  shadow-sm shadow-[#5977E9] hover:bg-[#5977E9] hover:text-white">
                                Video Gallery
                            </li>
                        </a>
                    </ul>
                </div>
                
            </li>

            <a href="{{route('reservation')}}" class="{{request()->routeIs('reservation') ? 'bg-[#000DF6] rounded-md' : ''}}">
                <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('reservation') ? 'bg-[#000DF6] rounded-md' : ''}}">
                    Reserve Training Center
                </li>
            </a>
            <a href="{{route('contact')}}" class="{{request()->routeIs('contact') ? 'bg-[#000DF6] rounded-md' : ''}}">
                <li class="px-4 mx-2 py-2 hover:bg-[#000DF6] hover:rounded-md {{request()->routeIs('contact') ? 'bg-[#000DF6] rounded-md' : ''}}">
                    Contact Us
                </li>
            </a>

            <li class="mx-2">
                <button id="theme-toggle" type="button" class="text-white dark:text-gray-400 hover:bg-[#000DF6] dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-md p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden  w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>
            </li>
            
        </ul>
    </div>
</div>