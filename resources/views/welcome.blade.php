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

      .glass{
        background: rgba(255, 255, 255, 0.048);
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 7.5px );
        -webkit-backdrop-filter: blur( 7.5px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );


      }
   </style>
@endsection

@section('content')

  {{-- Slideshow start --}}
     <div class="w-full">
      <div class="owl-carousel">
          <div class="item">
            <div class="relative">
                  <img src="{{asset('images/slideshow/s1.jpeg')}}" class="h-[80vh] object-cover w-full ">
                  <p class="absolute bottom-12 bg-zinc-100 px-4 text-zinc-700 bg-opacity-80 rounded-md shadow ">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi 
                  </p>
            </div>
          </div>

          <div class="item">
            <div class="relative">
                  <img src="{{asset('images/slideshow/s2.jpeg')}}" class="h-[80vh] object-cover w-full ">
                  <p class="absolute bottom-12 bg-zinc-100 px-4 text-zinc-700 bg-opacity-80 rounded-md shadow ">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi 
                  </p>
            </div>
          </div>

          <div class="item">
            <div class="relative">
                  <img src="{{asset('images/slideshow/s3.jpeg')}}" class="h-[80vh] object-cover w-full ">
                  <p class="absolute bottom-12 bg-zinc-100 px-4 text-zinc-700 bg-opacity-80 rounded-md shadow ">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi 
                  </p>
            </div>
          </div>

          <div class="item">
            <div class="relative">
                  <img src="{{asset('images/slideshow/s4.jpeg')}}" class="h-[80vh] object-cover w-full ">
                  <p class="absolute bottom-12 bg-zinc-100 px-4 text-zinc-700 bg-opacity-80 rounded-md shadow ">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi 
                  </p>
            </div>
          </div>
        </div>
    </div>
  {{-- Slideshow end --}}

    {{-- About Us Start --}}  
        <div id="about-us" class="w-11/12 mx-auto">
          <div class="grid grid-cols-2">
              <div class="my-5">
                <h1 class="text-3xl py-4 font-semibold text-[#5977E9] text-center dark:text-zinc-100">
                  About Us
                </h1>
                <p class="text-md text-zinc-500 dark:text-zinc-300 py-2 text-justify">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ratione provident, cum accusantium perferendis non sequi quibusdam nesciunt vero est quidem explicabo reiciendis hic temporibus commodi. Deleniti eum blanditiis odio!
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ratione provident, cum accusantium perferendis non sequi quibusdam nesciunt vero est quidem explicabo reiciendis hic temporibus commodi. Deleniti eum blanditiis odio!
                </p>
                <ul class="text-md text-zinc-500 dark:text-zinc-300 list-disc list-inside">
                    <li>
                      <a class="hover:text-[#5977E9] py-2 cursor-pointer">
                          Introduction
                      </a>
                    </li>
                    <li>
                      <a class="hover:text-[#5977E9] py-2 cursor-pointer">
                          Organizational Structure
                      </a>
                    </li>
                    <li>
                      <a class="hover:text-[#5977E9] py-2 cursor-pointer">
                          Executive Committee
                      </a>
                    </li>
                    <li>
                      <a class="hover:text-[#5977E9] py-2 cursor-pointer">
                          Staff Members
                      </a>
                    </li>
                </ul>
              </div>
              <div class="px-8 my-5">
                <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                  <h1 class="text-3xl py-4 font-semibold bg-[#5977E9] text-center rounded-md text-white  px-5">
                    Articles
                  </h1>
                  <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-lg list-disc list-inside">
                    <li class="py-2">
                      <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                        <span class="font-semibold">Article Name</span>
                        <p class="text-sm px-5">Jul, 2020</p>
                        <hr class="line dark:border-zinc-500 border-[#5977E9]">
                      </a>
                    </li>
                    <li class="py-2">
                      <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                        <span class="font-semibold">Article Name</span>
                        <p class="text-sm px-5">Jul, 2020</p>
                        <hr class="line dark:border-zinc-500 border-[#5977E9]">
                      </a>
                    </li>
                  </ul>
                  <div class="flex justify-center my-5">
                    <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
    {{-- About Us End --}}

    {{-- CSO Roles Start --}}
      <div class="w-11/12 mx-auto shadow-lg shadow-[#5976e977] dark:shadow-gray-900 px-8 py-5 my-5 rounded-md hover:shadow-sm hover:shadow-[#5976e977] dark:hover:shadow-gray-900">
        <h1 class="text-3xl py-4 font-semibold text-[#5977E9] dark:text-zinc-100 text-center">
          CSOs' role instrumental during pandemic
        </h1>
        <p class="text-justify text-zinc-700 dark:text-zinc-300">
          Vijaya Development Resource Centre (VDRC-Nepal) – a civil society organization based in Gaindakot-8, Nawalpur – has marked its 42nd establishment day amidst a virtual programme on 11th July, 2020. At a zoom-enabled social dialogue 'Accountable response/recovery of COVID-19 crisis: Role of Civil Society Organizations' held on 11th July, 2020 on the occasion, key note speaker, Hari Sharma, a noted social-political analyst, said the CSO role of questioning was always instrumental in protecting democracy, citizen freedoms and people's lives in any crisis including pandemic. "Democratic institutions and freedoms are always under attack in the pretexts of crisis and emergency. Social dialogue and consultations are a must to counter such assaults which demands the civic groups and organizations' role in raising questions against authorities", he stressed. As an intermediary force, the community-rooted and trusted CSOs can bridge the citizens and democracy through dialogue and deliberations, Sharma said, noting that the democratically communicated and engaged communities can exercise self-discipline and decision to fight against any pandemic such as COVID-19. "Germany and South Korea, among others, democratically took the people into confidence to tackle the pandemic and ...
        </p>
        <div class="flex justify-center my-5">
          <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
            Read More
          </a>
        </div>
      </div>
    {{-- CSO Roles End --}}

    {{-- Notices and Recent Activities Start --}}  
      <div id="about-us" class="w-11/12 mx-auto">
        <div class="grid grid-cols-2">
            
            <div class="px-8 my-5">
              <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                <h1 class="text-3xl py-4 font-semibold bg-[#5977E9] text-center rounded-md text-white  px-5">
                  Notices / Vacancy
                </h1>
                <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-lg list-disc list-inside">
                  <li class="py-2">
                    <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                      <span class="font-semibold">Article Name</span>
                      <p class="text-sm px-5">Jul, 2020</p>
                      <hr class="line dark:border-zinc-500 border-[#5977E9]">
                    </a>
                  </li>
                  <li class="py-2">
                    <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                      <span class="font-semibold">Article Name</span>
                      <p class="text-sm px-5">Jul, 2020</p>
                      <hr class="line dark:border-zinc-500 border-[#5977E9]">
                    </a>
                  </li>
                </ul>
                <div class="flex justify-center my-5">
                  <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                    Read More
                  </a>
                </div>
              </div>
            </div>

            <div class="px-8 my-5">
              <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                <h1 class="text-3xl py-4 font-semibold bg-[#5977E9] text-center rounded-md text-white  px-5">
                  Recent Activities
                </h1>
                <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-lg list-disc list-inside">
                  <li class="py-2">
                    <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                      <span class="font-semibold">Article Name</span>
                      <p class="text-sm px-5">Jul, 2020</p>
                      <hr class="line dark:border-zinc-500 border-[#5977E9]">
                    </a>
                  </li>
                  <li class="py-2">
                    <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                      <span class="font-semibold">Article Name</span>
                      <p class="text-sm px-5">Jul, 2020</p>
                      <hr class="line dark:border-zinc-500 border-[#5977E9]">
                    </a>
                  </li>
                </ul>
                <div class="flex justify-center my-5">
                  <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    {{-- Notices and Recent Activities Start End --}}

    {{-- Events Start --}}
      <div class="w-full bg-[#5977E9]">
        <div class="w-11/12 mx-auto py-5">
          <div class="flex justify-between items-center">
            <h1 class="text-3xl py-4 px-2 font-semibold text-white ">
              <span class="border-l-4 border-white px-2"></span> Events
            </h1>
            <a href="#" class=" text-zinc-200  font-semibold hover:text-white">
              More Events <span><i class="fa fa-angle-right pl-1"></i></span>
            </a>
          </div>
          <div class="swiper tSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide shadow-sm">
                  <div class="w-full  shadow-lg rounded glass image overflow-hidden">
                    <img src="{{asset('images/i.jpeg')}}">
                    <p class="text-white px-5 font-semibold text-lg text-justify py-3">
                      Here will be a title.
                    </p>
                    <div class="flex justify-center my-5">
                      <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                        Read More
                      </a>
                    </div>
                    
                  </div>
                </div>

                <div class="swiper-slide shadow-sm">
                  <div class="w-full  shadow-lg rounded glass image overflow-hidden">
                    <img src="{{asset('images/i.jpeg')}}">
                    <p class="text-white px-5 font-semibold text-lg text-justify py-3">
                      Here will be a title.
                    </p>
                    <div class="flex justify-center my-5">
                      <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                        Read More
                      </a>
                    </div>
                    
                  </div>
                </div>

                <div class="swiper-slide shadow-sm">
                  <div class="w-full  shadow-lg rounded glass image overflow-hidden">
                    <img src="{{asset('images/i.jpeg')}}">
                    <p class="text-white px-5 font-semibold text-lg text-justify py-3">
                      Here will be a title.
                    </p>
                    <div class="flex justify-center my-5">
                      <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                        Read More
                      </a>
                    </div>
                    
                  </div>
                </div>

                <div class="swiper-slide shadow-sm">
                  <div class="w-full  shadow-lg rounded glass image overflow-hidden">
                    <img src="{{asset('images/i.jpeg')}}">
                    <p class="text-white px-5 font-semibold text-lg text-justify py-3">
                      Here will be a title.
                    </p>
                    <div class="flex justify-center my-5">
                      <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                        Read More
                      </a>
                    </div>
                    
                  </div>
                </div>

                <div class="swiper-slide shadow-sm">
                  <div class="w-full  shadow-lg rounded glass image overflow-hidden">
                    <img src="{{asset('images/i.jpeg')}}">
                    <p class="text-white px-5 font-semibold text-lg text-justify py-3">
                      Here will be a title.
                    </p>
                    <div class="flex justify-center my-5">
                      <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                        Read More
                      </a>
                    </div>
                    
                  </div>
                </div>

                <div class="swiper-slide shadow-sm">
                  <div class="w-full  shadow-lg rounded glass image overflow-hidden">
                    <img src="{{asset('images/i.jpeg')}}">
                    <p class="text-white px-5 font-semibold text-lg text-justify py-3">
                      Here will be a title.
                    </p>
                    <div class="flex justify-center my-5">
                      <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                        Read More
                      </a>
                    </div>
                    
                  </div>
                </div>
            </div>
          </div>
          
        </div>
      </div>
    {{-- Events End --}}

    {{-- Program and major accomplishment Start --}}  
      <div id="about-us" class="w-11/12 mx-auto">
        <div class="grid grid-cols-2">
            
            <div class="px-8 my-5">
              <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                <h1 class="text-3xl py-4 font-semibold bg-[#5977E9] text-center rounded-md text-white  px-5">
                  Programs
                </h1>
                <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-lg list-disc list-inside">
                  <li class="py-2">
                    <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                      <span class="font-semibold">Article Name</span>
                      <p class="text-sm px-5">Jul, 2020</p>
                      <hr class="line dark:border-zinc-500 border-[#5977E9]">
                    </a>
                  </li>
                  <li class="py-2">
                    <a href="#" class="hover:text-blue-800 dark:hover:text-white">
                      <span class="font-semibold">Article Name</span>
                      <p class="text-sm px-5">Jul, 2020</p>
                      <hr class="line dark:border-zinc-500 border-[#5977E9]">
                    </a>
                  </li>
                </ul>
                <div class="flex justify-center my-5">
                  <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                    Read More
                  </a>
                </div>
              </div>
            </div>

            <div class="px-8 my-5">
              <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md dark:text-zinc-400 w-full rounded pb-2">
                <h1 class="text-2xl py-2 font-semibold bg-[#5977E9] text-center rounded-md text-white  px-5">
                  Major Accomplishments
                </h1>
                <p class="py-2 px-4 text-zinc-600 dark:text-zinc-400">
                  VDRC-Nepal in its almost four decade long history has accomplished several program and project activities, of which selected ones are outlined below.
                </p>
                <strong class="px-4 py-2">Literacy Program, Chitwan and Nawalparasi</strong>
                <p class="px-4 ">
                  Support: Room to Read
                </p>
                <p class="px-4 ">
                  Objective: To improve reading habit
                </p>
                <div class="flex justify-center my-5">
                  <a href="#" class="px-4 py-1 bg-blue-800 text-white rounded-md shadow-lg hover:bg-blue-900">
                    View More
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>
    {{-- Program and major accomplishment Start End --}}

    {{-- Gallery Start --}}
      <div class="w-full bg-[#5977E9]">
        <div class="w-11/12 mx-auto py-5">
          <div class="flex justify-between items-center">
            <h1 class="text-3xl py-4 px-2 font-semibold text-white ">
              <span class="border-l-4 border-white px-2"></span> Photo Gallery
            </h1>
            <a href="#" class=" text-zinc-200  font-semibold hover:text-white">
              More Photos <span><i class="fa fa-angle-right pl-1"></i></span>
            </a>
          </div>
          <div class="grid grid-cols-4 gap-x-11">
            <div class="w-full  shadow-lg rounded glass image overflow-hidden">
              <img src="{{asset('images/i.jpeg')}}">
              <p class="text-white px-5 text-justify py-3">
                Third Gallery
              </p>
              
            </div>
            
            <div class="w-full  shadow-lg rounded glass image overflow-hidden">
              <img src="{{asset('images/i.jpeg')}}">
              <p class="text-white px-5 text-justify py-3">
                Third Gallery
              </p>
              
            </div>

            <div class="w-full  shadow-lg rounded glass image overflow-hidden">
              <img src="{{asset('images/i.jpeg')}}">
              <p class="text-white px-5 text-justify py-3">
                Third Gallery
              </p>
              
            </div>

            <div class="w-full  shadow-lg rounded glass image overflow-hidden">
              <img src="{{asset('images/i.jpeg')}}">
              <p class="text-white px-5 text-justify py-3">
                Third Gallery
              </p>
              
            </div>
          </div>
          
        </div>
      </div>
    {{-- Gallery End --}}

    {{-- Reservation Button Start --}}
      <div class="fixed bottom-5 right-4 z-50">
        <button class="px-4 py-2 bg-blue-800 hover:bg-[#5977E9] rounded-md shadow-md text-white font-semibold text-lg ">
          <i class="far fa-hand-point-up"></i> Click Here For Reservation
        </button>
      </div>
    {{-- Reservation Button End --}}
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
@endsection