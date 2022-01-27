<div class="w-full bg-[#5977E9] hidden md:block">
   <div class="w-11/12 mx-auto py-2">
        <div class=" flex justify-center mb-2">
            <img src="{{asset('images/logo.png')}}" class="w-80">
        </div>
        <div class="flex justify-center">
            <ul class="flex justify-end text-white text-md">
                <x-nav-items values="Home" />

                <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <button class="flex items-center" @mouseover="isDrop=true">
                            <span class="mr-1 ">About US</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>

                        <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="#">
                                <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                    Introduction
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Organizational Structure
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Executive Committee
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Staff Members
                                </li>
                            </a>
                        </ul>
                    </div>
                    
                </li>

                <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <button class="flex items-center" @mouseover="isDrop=true">
                            <span class="mr-1 ">Programs</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>

                        <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="#">
                                <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                    Resource Mobilization Program
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Promotion and Welfare Program
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Partnership Program
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Currently Running Programs
                                </li>
                            </a>
                        </ul>
                    </div>
                    
                </li>

                <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <button class="flex items-center " @mouseover="isDrop=true">
                            <span class="mr-1 ">Membership</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>

                        <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="#">
                                <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                    Introduction
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Organizational Structure
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Executive Committee
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Staff Members
                                </li>
                            </a>
                        </ul>
                    </div>
                    
                </li>

                <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <button class="flex items-center" @mouseover="isDrop=true">
                            <span class="mr-1 ">Publications</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>

                        <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="#">
                                <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                    Introduction
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Organizational Structure
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Executive Committee
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Staff Members
                                </li>
                            </a>
                        </ul>
                    </div>
                    
                </li>

                <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                    <div class="dropdown inline-block relative" >

                        <button class="flex items-center" @mouseover="isDrop=true">
                            <span class="mr-1 ">Gallery</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>

                        <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                            <a href="#">
                                <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                    Introduction
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Organizational Structure
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Executive Committee
                                </li>
                            </a>
                            <a href="#">
                                <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                    Staff Members
                                </li>
                            </a>
                        </ul>
                    </div>
                    
                </li>

                <x-nav-items values="Reserve Training Center" />
                <x-nav-items values="Contact Us" />
                
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
            <x-nav-items values="Home" />

            <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <button class="flex items-center" @mouseover="isDrop=true">
                        <span class="mr-1 ">About US</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>

                    <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="#">
                            <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                Introduction
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Organizational Structure
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Executive Committee
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Staff Members
                            </li>
                        </a>
                    </ul>
                </div>
                
            </li>

            <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <button class="flex items-center" @mouseover="isDrop=true">
                        <span class="mr-1 ">Programs</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>

                    <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="#">
                            <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                Resource Mobilization Program
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Promotion and Welfare Program
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Partnership Program
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Currently Running Programs
                            </li>
                        </a>
                    </ul>
                </div>
                
            </li>

            <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <button class="flex items-center " @mouseover="isDrop=true">
                        <span class="mr-1 ">Membership</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>

                    <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="#">
                            <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                Introduction
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Organizational Structure
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Executive Committee
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Staff Members
                            </li>
                        </a>
                    </ul>
                </div>
                
            </li>

            <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <button class="flex items-center" @mouseover="isDrop=true">
                        <span class="mr-1 ">Publications</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>

                    <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="#">
                            <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                Introduction
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Organizational Structure
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Executive Committee
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Staff Members
                            </li>
                        </a>
                    </ul>
                </div>
                
            </li>

            <li class="px-4 py-2 hover:bg-[#000DF6] hover:rounded-md" x-data="{isDrop: false}">

                <div class="dropdown inline-block relative" >

                    <button class="flex items-center" @mouseover="isDrop=true">
                        <span class="mr-1 ">Gallery</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>

                    <ul class=" absolute  text-[#5977E9] font-normal text-sm pt-1 w-52 z-10 bg-slate-50 shadow-lg"  x-show="isDrop"  @mouseover.outside="isDrop = false" x-cloak>

                        <a href="#">
                            <li class="px-4 py-2 bg-[#5977E9] text-white shadow-sm shadow-[#5977E9]">
                                Introduction
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Organizational Structure
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Executive Committee
                            </li>
                        </a>
                        <a href="#">
                            <li class="px-4 py-2 hover:bg-[#5977E9] hover:text-white shadow-sm shadow-[#5977E9]">
                                Staff Members
                            </li>
                        </a>
                    </ul>
                </div>
                
            </li>

            <x-nav-items values="Reserve Training Center" />
            <x-nav-items values="Contact Us" />
            
        </ul>
    </div>
</div>