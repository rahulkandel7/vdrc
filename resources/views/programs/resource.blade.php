@extends('layouts.app')

@section('css')
    <style>
        .line {
            height: 0;
            border-top-width: 1px;
            /* border-style: dotted; */
        }
    </style>
@endsection

@section('content')
    <div class="w-11/12 mx-auto shadow-sm py-5 shadow-gray-300 dark:shadow-gray-900 rounded my-4 ">
        <div class="grid md:grid-cols-3">
            <div class="md:col-span-2">
                <h1 class="text-3xl py-4 px-2 font-semibold text-[#5977E9]">
                    <span class="border-l-4 border-[#5977E9] px-2"></span> 
                    Resource Mobilization Program
                </h1>
                <hr class="line dark:border-zinc-500 border-[#5977E9]">
                <p class="text-justify px-5 pt-5 text-zinc-600 dark:text-zinc-300">
                    With an aim to ensure financial sustainability, VDRC-Nepal has introduced several resource mobilization and fund raising programs since its establishment. Initially dependent on individual donations and income from cultural activities, it has now embarked on following business initiatives to ensure regular income to support its regular program activities. 
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">
                    Training Center (Chetana Sadan)
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Chetana Sadan has been the major contributor to the VDRC-Nepal funds. The facility established in 1995, is available to development agencies who organize training, workshop and seminars. It currently has two fully equipped training halls and food and lodging facilities enough for 60 pax at a time. It also provides other logistic support needed to conduct training events.
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">
                    Customized Training
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    VDRC-Nepal organizes various training events including on self-help promotion, savings and credit program, book-keeping, NGO management, leadership, participatory rural appraisal, social entrepreneurship, capacity development, gender and development, social mobilization, strategic planning and so on. The duration of these events and package rates vary based on the topic and participant needs. Most of these events are organized at the VDRC-Nepal central office with some done at the field level based on the client demand. 
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">
                    Membership Fees
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    The general members and co-members of the organization are required to renew their membership annually paying certain amount of fee. The amount thus received is used in institutional development activities. The honorable and life members also contribute one-time fixed membership amount.
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Innovation Stage: [2002-present]</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    This is the period VDRC-Nepal is testing its holistic development approach in the local community. Four pillars - economic, social, media and education – are considered institutions essential for a holistic development of the society. Establishment of Vijaya Community Education Cooperative was one of the pioneer acts following a cooperative principle, a third-dimensional educational institution with positive aspects of both public and private schools. Likewise, establishment of Vijaya Community FM 101.6 MHz, Vijaya Laghubitta Bittiya Sanstha Ltd. and Vijaya Consultancy Pvt. Ltd (non-profit) are other important initiatives during the period. Currently, a process of incorporating Vijaya Foundation (trust fund) is ongoing. Therefore, this stage has been considered as a very creative period in the organizational timeline.
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Voluntary Contribution</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    The organization seeks voluntary contribution in cash and kind from its staff, members, and resource persons. The amount thus collected is used for human resource development.
                </p>
        
                
            </div>
            <div>
              <div class="px-8 my-5">
                  <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                    <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
                      Notices / Vacancy
                    </h1>
                    <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-md list-disc list-inside">
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
                  <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
                    Articles
                  </h1>
                  <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-md list-disc list-inside">
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
                  <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
                    Recent Activities
                  </h1>
                  <ul class="px-5 text-[#5977E9] dark:text-zinc-400 text-md list-disc list-inside">
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

    </div>
@endsection