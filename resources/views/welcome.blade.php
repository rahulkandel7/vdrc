@extends('layouts.app')

@section('css')
     <!-- Link Swiper's CSS -->
     <link
     rel="stylesheet"
     href="https://unpkg.com/swiper/swiper-bundle.min.css"
   />
@endsection

@section('content')
    {{-- Slideshow start --}}
        <div class="w-full">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide relative">
                        <img src="{{asset('images/slideshow/s1.jpeg')}}" class="h-[80vh] object-cover w-full ">
                        <p class="absolute bottom-12 bg-zinc-100 px-4 text-zinc-700 bg-opacity-80 rounded-md shadow wow slideInLeft">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi 
                        </p>
                  </div>
                  <div class="swiper-slide relative">
                    <img src="{{asset('images/slideshow/s2.jpeg')}}" class="h-[80vh] object-cover w-full ">
                    <p class="absolute bottom-12 bg-zinc-100 px-4 text-zinc-700 bg-opacity-80 rounded-md shadow wow slideInLeft">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi 
                    </p>
                  </div>
                  <div class="swiper-slide relative">
                    <img src="{{asset('images/slideshow/s3.jpeg')}}" class="h-[80vh] object-cover w-full ">
                    <p class="absolute bottom-12 bg-zinc-100 px-4 text-zinc-700 bg-opacity-80 rounded-md shadow wow slideInLeft">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi 
                    </p>
                  </div>
                  <div class="swiper-slide relative">
                    <img src="{{asset('images/slideshow/s4.jpeg')}}" class="h-[80vh] object-cover w-full ">
                    <p class="absolute bottom-12 bg-zinc-100 px-4 text-zinc-700 bg-opacity-80 rounded-md shadow wow slideInLeft">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi 
                    </p>
                  </div>
                  
                </div>
                <div class="swiper-pagination"></div>
              </div>
        </div>
    {{-- Slideshow end --}}
@endsection

@section('js')
    <script>
        new WOW().init();
    </script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: false,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        
      });
    </script>
@endsection