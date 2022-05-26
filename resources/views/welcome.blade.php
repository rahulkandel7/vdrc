@extends('layouts.app')

@section('css')
     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

     <!-- Owl Carousel -->
     <link rel="stylesheet" href="{{asset('css/owl/owl.carousel.min.css')}}">

   <style>
      .line {
        height: 0;
        border-top-width: 2px;
        border-style: dotted;
      }

      .image{
        transition: all .2s ease-in-out;
      }

      .image:hover img{
        transition: all .2s ease-in-out;

        transform: scale(1.03);
      }

      .owl-dots{
        display: none;
      }

      .glass{
        background: rgba(255, 255, 255, 0.048);
        box-shadow: 0 8px 32px 0 rgba(135, 31, 48, 0.37);
        backdrop-filter: blur( 7.5px );
        -webkit-backdrop-filter: blur( 7.5px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );


      }
      

      .card{
                background: linear-gradient(to right, #000cf9 50%, white 50%);
                background-size: 200% 100%;
                background-position: right top;
                transition: all .5s ease-out;
            }

            .card:hover {
                background-position: left top;
            }
   </style>
@endsection

@section('content')

  {{-- Slideshow start --}}
     <div class="w-full">
      <div class="owl-carousel">
        @foreach ($slideshows as $slideshow)
          <div class="item">
            <div class="relative">
                  <img src="/storage/{{$slideshow->photopath}}" class="h-[80vh] object-cover w-full ">
                  <p class="absolute bottom-12 bg-zinc-100 px-4 text-zinc-700 bg-opacity-80 rounded-md shadow ">
                      {{$slideshow->title}}
                  </p>
            </div>
          </div>
        @endforeach

        </div>
    </div>
  {{-- Slideshow end --}}

    {{-- About Us Start --}}  
        <div class="w-full bg-[#a7b8d338] py-8 " id="about-us">
          <div  class="w-11/12 mx-auto pt-12">
            <div >
              
                <div class="my-5">
                  <div class="flex justify-center wow fadeInDown"  data-wow-duration="2s">
                    <div>
                        <center>
                            <a class="text-[#000cf9] px-6 py-1 bg-sky-100 rounded-full text-xl font-bold">
                                About 
                            </a>
                        </center>
                        <h1 class="text-4xl font-bold text-gray-800 py-4 text-center dark:text-gray-300">Find Out <span class="text-[#000cf9]">About Us</span> </h1>
                        <p class="max-w-md text-center text-gray-600 dark:text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi vero aut, repellat mollitia maiores, iste maxime eum t
                        </p>
                    </div>
                  </div>
                  <p class="text-md text-zinc-500 dark:text-zinc-300 py-2 text-justify">
                    Vijaya Development Resource Centre (VDRC-Nepal), initially known as Vijaya Youth Club, is a non-profit member-based social development organization. It has been working in the community development sector for the last 42 years with a vision of equitable, peaceful, affluent and inter-dependent society. Established as a local self-help group in 1979, it is now recognized as a national level NGO with multi-disciplinary human resources and good infrastructure facilities.
                  </p>
                  <div class="grid grid-cols-4 wow fadeInUp" data-wow-duration="2s">
  
                      <a href="{{route('aboutus.introduction')}}" >
                        <p class="px-4 mx-2  py-1 my-2 bg-[#000cf9] hover:bg-[#4a50c9] rounded-md text-white">
                          Introduction
                        </p>
                      </a>
  
    
                    <a href="{{route('aboutus.os')}}" >
                      <p class="px-4 mx-2 py-1 my-2 bg-[#000cf9] hover:bg-[#4a50c9] rounded-md text-white">
                        Organizational Structure
                      </p>
                    </a>
    
                    <a href="{{route('aboutus.ec')}}" >
                      <p class="px-4 mx-2 my-2 py-1 bg-[#000cf9] hover:bg-[#4a50c9] rounded-md text-white">
                        Executive Committee
                      </p>
                    </a>
    
                    <a href="{{route('aboutus.sm')}}" >
                      <p class="px-4 mx-2 my-2 py-1 bg-[#000cf9] hover:bg-[#4a50c9] rounded-md text-white">
                        Staff Members
                      </p>
                    </a>
                    
                  </div>
                </div>
                {{-- <div class="px-8 my-5">
                  <div class="shadow-lg shadow-[#a33a4621] dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                    <h1 class="text-xl md:text-3xl py-1 md:py-2 font-semibold text-left  rounded-md text-[#000cf9]  px-5 ">
                      <span class="border-l-8 border-[#000cf9] px-2"></span> Articles 
                    </h1>
                    <ul class="px-5 text-[#000cf9] dark:text-zinc-400 text-md md:text-lg list-disc list-inside">
                      @foreach ($articles as $article)
                        <li class="py-2">
                          <a href="{{route('articlesview',$article->id)}}" class="hover:text-[#4a50c9] dark:hover:text-white">
                            <span class="font-semibold">{{$article->title}}</span>
                            <p class="text-sm px-5">{{ \Carbon\Carbon::parse($article->created_at)->format('d F Y')}}</p>
                            <hr class="line dark:border-zinc-500 border-[#000cf9]">
                          </a>
                        </li>
                      @endforeach
                      
                    </ul>
                    <div class="flex justify-center my-5">
                      <a href="{{route('articles')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
                        Read More
                      </a>
                    </div>
                  </div>
                </div> --}}
            </div>
          </div>
        </div>
    {{-- About Us End --}}

    {{-- CSO Roles Start --}}
      <div class="w-11/12 mx-auto shadow-lg shadow-[#a33a4621] dark:shadow-gray-900 px-8 py-5 my-5 rounded-md hover:shadow-sm hover:shadow-[#a33a4621] dark:hover:shadow-gray-900 wow fadeInRight" data-wow-duration="2s">
        <h1 class="text-xl md:text-3xl py-4 font-semibold text-[#000cf9] dark:text-zinc-100 text-center">
          CSOs' role instrumental during pandemic
        </h1>
        <p class="text-justify text-zinc-700 dark:text-zinc-300 text-xm md:text-lg">
          Vijaya Development Resource Centre (VDRC-Nepal) – a civil society organization based in Gaindakot-8, Nawalpur – has marked its 42nd establishment day amidst a virtual programme on 11th July, 2020. At a zoom-enabled social dialogue 'Accountable response/recovery of COVID-19 crisis: Role of Civil Society Organizations' held on 11th July, 2020 on the occasion, key note speaker, Hari Sharma, a noted social-political analyst, said the CSO role of questioning was always instrumental in protecting democracy, citizen freedoms and people's lives in any crisis including pandemic. "Democratic institutions and freedoms are always under attack in the pretexts of crisis and emergency. Social dialogue and consultations are a must to counter such assaults which demands the civic groups and organizations' role in raising questions against authorities", he stressed. As an intermediary force, the community-rooted and trusted CSOs can bridge the citizens and democracy through dialogue and deliberations, Sharma said, noting that the democratically communicated and engaged communities can exercise self-discipline and decision to fight against any pandemic such as COVID-19. "Germany and South Korea, among others, democratically took the people into confidence to tackle the pandemic and ...
        </p>
        <div class="flex justify-center my-5">
          <a href="{{route('cso')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
            Read More
          </a>
        </div>
      </div>
    {{-- CSO Roles End --}}

    {{-- Programs Start --}}
      <div class="w-full bg-[#a7b8d338] py-8" id="programs">
        <div class="w-11/12 mx-auto py-5">
          <div class="flex justify-center wow fadeInDown"  data-wow-duration="2s">
            <div>
                <center>
                    <a class="text-[#000cf9] px-6 py-1 bg-sky-100 rounded-full text-xl font-bold">
                        Programs
                    </a>
                    <h1 class="text-4xl font-bold text-gray-800 py-4 dark:text-gray-300">Find Out  <span class="text-[#000cf9]">Our Programs</span> </h1>
                <p class="max-w-md text-center text-gray-600 dark:text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi vero aut, repellat mollitia maiores, iste maxime eum t
                </p>
                </center>
                
            </div>
          </div>
          <div class="w-full">
            <div class="w-11/12 mx-auto my-5">
              <div class="grid grid-cols-1 md:grid-cols-4 gap-y-8 gap-x-4">
                <div class=" bg-white shadow-xl rounded-lg shadow-[#a33a4611]  hover:shadow-[#a33a4631] hover:shadow-2xl card group wow fadeInUp" data-wow-duration="2s" >
      
                  <h1 class="text-xl font-semibold pt-4 text-center text-[#000cf9] px-5 group-hover:text-white">
                     Resource Mobilization Program 
                  </h1>
      
                    <ul class="px-5  group-hover:text-gray-300 text-zinc-400 text-md  list-disc list-inside">
                      @foreach ($programs as $program)
                        <li class="py-2">
                          <a href="/storage/{{$program->filepath}}" class=" hover:text-white">
                            <span class="font-semibold">{{$program->title}}</span>
                            <hr class="line border-zinc-500 ">
                          </a>
                        </li>
                      @endforeach
                      
                    </ul>
                    <div class="flex justify-center my-5">
                      <a href="{{route('notice')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
                        Read More
                      </a>
                    </div>
      
                </div>
      
                <div class=" bg-white shadow-xl rounded-lg shadow-[#a33a4611]  hover:shadow-[#a33a4631] hover:shadow-2xl card group wow fadeInUp" data-wow-duration="2s" >
      
                  <h1 class="text-xl font-semibold py-4 text-center text-[#000cf9] px-5 group-hover:text-white">
                    Promotion and Welfare Program
                 </h1>
                    <ul class="px-5  group-hover:text-gray-300 text-zinc-400 text-md  list-disc list-inside">
                      @foreach ($programs as $program)
                        <li class="py-2">
                          <a href="/storage/{{$program->filepath}}" class=" hover:text-white">
                            <span class="font-semibold">{{$program->title}}</span>
                            <hr class="line border-zinc-500 ">
                          </a>
                        </li>
                      @endforeach
                      
                    </ul>
                  <div class="flex justify-center my-5">
                    <a href="{{route('articles')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
                      Read More
                    </a>
                  </div>
                </div>
      
                <div class=" bg-white shadow-xl rounded-lg shadow-[#a33a4611]  hover:shadow-[#a33a4631] hover:shadow-2xl card group wow fadeInUp" data-wow-duration="2s" >
      
                    <h1 class="text-xl font-semibold py-4 text-center text-[#000cf9] px-5 group-hover:text-white">
                      Partnership Program
                    </h1>
                    <ul class="px-5  group-hover:text-gray-300 text-zinc-400 text-md  list-disc list-inside">
                      @foreach ($programs as $program)
                        <li class="py-2">
                          <a href="/storage/{{$program->filepath}}" class=" hover:text-white">
                            <span class="font-semibold">{{$program->title}}</span>
                            <hr class="line border-zinc-500 ">
                          </a>
                        </li>
                      @endforeach
                      
                    </ul>
                  <div class="flex justify-center my-5">
                    <a href="{{route('recentactivities')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
                      Read More
                    </a>
                  </div>
                </div>
      
                <div class=" bg-white shadow-xl rounded-lg shadow-[#a33a4611]  hover:shadow-[#a33a4631] hover:shadow-2xl card group wow fadeInUp" data-wow-duration="2s" >
      
                    <h1 class="text-xl font-semibold py-4 text-center text-[#000cf9] px-5 group-hover:text-white">
                      Currently Running Program
                    </h1>
                    <ul class="px-5  group-hover:text-gray-300 text-zinc-400 text-md  list-disc list-inside">
                      @foreach ($programs as $program)
                        <li class="py-2">
                          <a href="/storage/{{$program->filepath}}" class=" hover:text-white">
                            <span class="font-semibold">{{$program->title}}</span>
                            <hr class="line border-zinc-500 ">
                          </a>
                        </li>
                      @endforeach
                      
                    </ul>
                  <div class="flex justify-center my-5">
                    <a href="{{route('recentactivities')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
                      Read More
                    </a>
                  </div>
                </div>
      
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
    {{-- Programs End --}}

    {{-- Program and major accomplishment Start --}}  
      <div  class="w-11/12 mx-auto">
        <div class="">
            <div class="px-8 my-5">
              <div class="shadow-lg shadow-[#a33a4621] dark:shadow-gray-900 dark:shadow-md dark:text-zinc-400 w-full rounded pb-2">
                <div class="flex justify-center wow fadeInDown pt-10"  data-wow-duration="2s">
                  <div>
                      <center>
                          <a class="text-[#000cf9] px-6 py-1 bg-sky-100 rounded-full text-xl font-bold">
                              Major Accomplishment
                          </a>
                          <h1 class="text-2xl md:text-4xl font-bold text-gray-800 py-4 text-center dark:text-gray-300">Find Out Our <span class="text-[#000cf9]">Major Accomplishments</span> </h1>
                          <p class="max-w-md text-center text-gray-600 dark:text-gray-500">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi vero aut, repellat mollitia maiores, iste maxime eum t
                        </p>
                      </center>
                      
                  </div>
                </div>
                <p class="py-2 px-4 text-zinc-600 dark:text-zinc-400">
                  VDRC-Nepal in its almost four decade long history has accomplished several program and project activities, of which selected ones are outlined below.
                </p>
                @foreach ($majoraccomplishments as $majoraccomplishment )
                  <strong class="px-4 py-2">{{$majoraccomplishment->title}}</strong>
                  <p class="px-4 ">
                    Support: {{$majoraccomplishment->support}}
                  </p>
                  <p class="px-4 ">
                    Objective: {{$majoraccomplishment->objective}}
                  </p>
                @endforeach
                
                <div class="flex justify-center my-5">
                  <a href="{{route('major')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
                    Read More
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>
    {{-- Program and major accomplishment Start End --}}

    <div class="w-full bg-[#a7b8d338] py-8">
      <div class="w-11/12 mx-auto my-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-y-8 gap-x-4 py-8">
          <div class=" bg-white shadow-xl rounded-lg shadow-[#a33a4611]  hover:shadow-[#a33a4631] hover:shadow-2xl card group wow fadeInUp" data-wow-duration="2s">

            <h1 class="text-2xl font-semibold pt-4 text-center text-[#000cf9] px-5 group-hover:text-white">
               Notices / Vacancy
            </h1>

              <ul class="px-5  group-hover:text-gray-300 text-zinc-400 text-md  list-disc list-inside">
                @foreach ($notices as $notice)
                  <li class="py-2">
                    <a href="/storage/{{$notice->filepath}}" class=" hover:text-white">
                      <span class="font-semibold">{{$notice->title}}</span>
                      <p class="text-sm px-5">{{\Carbon\Carbon::parse($notice->created_at)->format('d F Y')}}</p>
                      <hr class="line border-zinc-500 ">
                    </a>
                  </li>
                @endforeach
                
              </ul>
              <div class="flex justify-center my-5">
                <a href="{{route('notice')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
                  Read More
                </a>
              </div>

          </div>

          <div class=" bg-white shadow-xl rounded-lg shadow-[#a33a4611]  hover:shadow-[#a33a4631] hover:shadow-2xl card group wow fadeInUp" data-wow-duration="2s">

            <h1 class="text-2xl font-semibold py-4 text-center text-[#000cf9] px-5 group-hover:text-white">
              Articles
           </h1>
            <ul class="px-5 group-hover:text-gray-300 text-zinc-400 text-md  list-disc list-inside">
              @foreach ($articles as $article)
                <li class="py-2">
                  <a href="{{route('articlesview',$article->id)}}" class=" hover:text-white">
                    <span class="font-semibold">{{$article->title}}</span>
                    <p class="text-sm px-5">{{ \Carbon\Carbon::parse($article->created_at)->format('d F Y')}}</p>
                    <hr class="line border-zinc-500 ">
                  </a>
                </li>
              @endforeach
              
            </ul>
            <div class="flex justify-center my-5">
              <a href="{{route('articles')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
                Read More
              </a>
            </div>
          </div>

          <div class=" bg-white shadow-xl rounded-lg shadow-[#a33a4611]  hover:shadow-[#a33a4631] hover:shadow-2xl card group wow fadeInUp" data-wow-duration="2s">

              <h1 class="text-2xl font-semibold py-4 text-center text-[#000cf9] px-5 group-hover:text-white">
                Recent Activites
              </h1>
              <ul class="px-5 group-hover:text-gray-300 text-zinc-400 text-md  list-disc list-inside">
                @foreach ($recentactivities as $recentactivity)
                  <li class="py-2">
                    <a href="{{route('recentactivitiesview',$recentactivity->id)}}" class="hover:text-white">
                      <span class="font-semibold">{{$recentactivity->title}}</span>
                      <p class="text-sm px-5">{{\Carbon\Carbon::parse($recentactivity->created_at)->format('d F Y')}}</p>
                      <hr class="line border-zinc-500 ">
                    </a>
                  </li>
                @endforeach
            
              </ul>
            <div class="flex justify-center my-5">
              <a href="{{route('recentactivities')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a50c9]">
                Read More
              </a>
            </div>
          </div>

          <div class=" bg-white shadow-xl rounded-lg shadow-[#a33a4611]  hover:shadow-[#a33a4631] hover:shadow-2xl card group wow fadeInUp" data-wow-duration="2s">

              <h1 class="text-2xl font-semibold py-4 text-center text-[#000cf9] px-5 group-hover:text-white">
                Members
              </h1>
              <ul class="px-5 group-hover:text-gray-300 text-zinc-400 text-md  list-disc list-inside">
                  <li class="py-2">
                    <a href="{{route('membership.hm')}}" class="hover:text-white">
                      <span class="font-semibold">Honorable Members</span>
                      <hr class="line border-zinc-500 ">
                    </a>
                  </li>

                  <li class="py-2">
                    <a href="{{route('membership.lm')}}" class="hover:text-white">
                      <span class="font-semibold">Life Members</span>
                      <hr class="line border-zinc-500 ">
                    </a>
                  </li>

                  <li class="py-2">
                    <a href="{{route('membership.gm')}}" class="hover:text-white">
                      <span class="font-semibold">General Members</span>
                      <hr class="line border-zinc-500 ">
                    </a>
                  </li>

                  <li class="py-2">
                    <a href="{{route('membership.ep')}}" class="hover:text-white">
                      <span class="font-semibold">Ex-Presidents</span>
                      <hr class="line border-zinc-500 ">
                    </a>
                  </li>
            
              </ul>
              
          </div>

          
        </div>
      </div>
    </div>

       {{-- Gallery Start --}}
          <div class="w-full">
            <div class="w-11/12 mx-auto py-5">
              
              <div class="flex justify-center wow fadeInDown py-5 mt-5"  data-wow-duration="2s">
                <div>
                    <center>
                        <a class="text-[#000cf9] px-6 py-1 bg-sky-100 rounded-full text-xl font-bold">
                            Gallery
                        </a>
                    </center>
                    <h1 class="text-4xl font-bold text-gray-800 py-4 text-center dark:text-gray-300">Look Our <span class="text-[#000cf9]">Gallery</span> </h1>
                    <p class="max-w-md text-center text-gray-600 dark:text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi vero aut, repellat mollitia maiores, iste maxime eum t
                    </p>
                </div>
              </div>

              <div class="swiper tSwiper my-8">
                <div class="swiper-wrapper wow slideInLeft" data-wow-duration="1s">
                  @foreach ($photos as $photo)
                    <div class="swiper-slide shadow-sm bg-white">
                      <a href="{{route('gallery.pv',$photo->id)}}">
                        <div class="w-full shadow-md shadow-[#a33a4621] rounded image overflow-hidden">
                          <img src="/storage/{{$photo->photopath}}" class="w-full object-cover">
                          <p class="text-[#000cf9] px-5 text-justify py-3">
                            {{$photo->title}}
                          </p>
                          
                        </div>
                      </a>
                    </div>
                  @endforeach
                    
                </div>

                <div class="flex justify-center mt-8">
                 
                  <a href="{{route('gallery.pg')}}" class=" bg-[#000cf9] px-8 py-1 rounded-full text-white  font-semibold hover:bg-[#4a50c9]">
                    More Photos <span><i class="fa fa-angle-right pl-1"></i></span>
                  </a>
                </div>
              </div>
              
            </div>
          </div>
      {{-- Gallery End --}}

   

    
@endsection

@section('js')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="{{asset('js/owl/owl.carousel.min.js')}}"></script>
    <script>
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
          items:1,
          loop:true,
          autoplay:true,
          autoplayTimeout:2000,
          autoplayHoverPause:true
        });
      });
    </script>

    <!-- Initialize Swiper -->
    <script>
      // var swiper = new Swiper(".mySwiper", {
      //   spaceBetween: 30,
      //   centeredSlides: false,
      //   autoplay: {
      //     delay: 2500,
      //     disableOnInteraction: false,
      //   },
      //   pagination: {
      //     el: ".swiper-pagination",
      //     clickable: true,
      //   },
        
      // });

      var swiper = new Swiper(".tSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay:true,
        pagination: {
        //   el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
            slidesPerView: 1,
            spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
            slidesPerView: 2,
            spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
            slidesPerView: 4,
            spaceBetween: 40
            },
            // when window width is >= 1421px
            1421: {
            slidesPerView: 4,
            spaceBetween: 40
            }
        }
      });
    </script>

    <!-- Smooth Scroll -->
    <script>
      // Select all links with hashes
        $('a[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .click(function(event) {
            // On-page links
            if (
              location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
              && 
              location.hostname == this.hostname
            ) {
              // Figure out element to scroll to
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              // Does a scroll target exist?
              if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top - 100
                }, 1000, function() {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                  } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                  };
                });
              }
            }
          });
    </script>
@endsection