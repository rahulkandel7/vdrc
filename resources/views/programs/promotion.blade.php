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
                <h1 class="text-3xl py-4 px-2 font-semibold text-[#000cf9]">
                    <span class="border-l-4 border-[#000cf9] px-2"></span> 
                    Promotion and Welfare Program
                </h1>
                <hr class="line dark:border-zinc-500 border-[#000cf9]">
                
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">
                    Promotional Programs
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Over the decades, VDRC-Nepal has spearheaded promotion of distinct institutions catering to specific socio-economic needs of the community. The Vijaya Group of Institutions (VGI) now includes VDRC-Nepal and following six institutions:

                    <ul class="px-5 text-zinc-600 dark:text-zinc-400 list-disc list-inside">
                        <li class="py-1">
                            VYCCU Savings and Credit Cooperative
                        </li>
                        <li class="py-1">
                            Vijaya Community Education Cooperative
                        </li>
                        <li class="py-1">
                            Vijaya Information and Communication Cooperative
                        </li>
                        <li class="py-1">
                            Vijaya Micro-finance Development Bank
                        </li>
                        <li class="py-1">
                            Vijaya Consulting Pvt Ltd (non-profit)
                        </li>
                        <li class="py-1">
                            Vijaya Foundation - Nepal
                        </li>
                        <li class="py-1">
                            Vijaya shree Consumers Co-operative Ltd
                        </li>
                    </ul>
                </p>
        
                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    VYCCU Savings and Credit Cooperative
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    VYCCU Savings and Credit Cooperative Limited initiated in August 1991 is engaged in collecting savings from its members, providing a definite interest on the savings and providing loans to its members on moderate interest rates, thereby working towards social security and transformation. There are currently 18,642 members (53% female), of which 593 are landless and a total cash deposit of NPR 1.2 billion. The cooperative, accorded with the ACCESS Brand, is working through six service centers with ABBS service. It has recently started SMS banking and SCT service.
                </p>
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Through 34 different policies and procedures, the organization has been run and guided by policies rather than by individuals. Due to its diversified financial and non-financial as well as social transformation program activities, it has been able to receive several awards including Nepal’s Best Savings and Credit Cooperative Award and Mix Market – the worldwide network of microfinance – has conferred it with a 5-star status.
                </p>
        
                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Vijaya Community Education Cooperative
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    <div class="grid grid-cols-2 px-5">
                        <div class="text-justify">
                            Vijaya Samudayik Siksha Sadan established in 2002 is progressing well academically as well as on extra-curricular activities. In the School Leaving Certificate exam of 2072 BS, 92 students passed out with 25% in A+/A and 60% in B+/B grades. Within the school, among 1006 students who appeared in the 2072 annual exam, 46% secured distinction marks followed by 30% in first division and 10% second division.
                            
                        </div>
                        <div>
                            <img src="{{asset('images/staff/11.jpeg')}}" class="rounded shadow-md w-9/12 mx-auto">
                        </div>
                    </div>
                    <p class="px-5 py-2">
                        A 10+2 English-medium school with 1,166 students managed well by 65 staff (52 teaching and 13 non-teaching) is conscious in promoting quality education. As a regular feature, the school management discusses quality improvement plans with Executive Committee, schedules parent teacher meetings and organizes training events for teaching faculty. The school has won recently several awards including the first positions in district-level inter-school Coca-cola Cup girls’ football; quiz-contest participated in by 10 colleges; and oratory competition organized by VYCCU savings and credit cooperative. 
                    </p>
                </p>
        
                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Vijaya Information and Communication Cooperative Ltd
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    VICCOL was established in August 2000 and under its aegis Vijaya FM first aired its program in August 2004. The community radio Vijaya FM is the common endeavor of peoples from different socio-economic background and social institutions of different nature. Representing the ‘voice of voiceless people,’ the radio is dedicated to carry out the issues and references hidden in the society. With 1,000 watt transmission capacity, it is broadcasting programs in four local languages from 03:55 to 23:00 hours on FM 101.6 MHz, online on www.vijayafm.org.np, Nepali patro, and mobile app vijayafm. <br>
 
                    The institution owned by 329 members (297 individual and 32 organizational) and managed by 35 trained staff is also bringing out Vijaya Khabar - a weekly community newspaper since November 2015. Building on the track record and encouraged by several awards, it has plans among others to make the newspaper daily and broadcast radio from its own new building using modern technology.
                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Vijaya Micro-finance Development Bank
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Vijaya Laghubitta Bittiya Sanstha (VLBS) is in operation since February 2013 as a national level micro-finance bank with an objective to contribute on poverty reduction and socio-economic development of the country. With authorized capital of NPR 200 million and issued and paid-up capital of NPR 161 million, its operation has covered 23 districts through 35 branch offices managed well by 150 trained staff. As of December 2016, the total asset of the bank is nearly NPR 800 million and loan portfolio of NPR 650 million. Owned by 31,000 shareholders (including 186 promoters), about 17,300 community people are associated with the bank of which 11,700 are the borrowers.
                    <br>
 
                    With innovative partnership projects, the bank is making good progress in all aspects and expanding its program area rapidly. It is providing both financial and non-financial services including education in financial literacy, technical training, market linkages, and on-site support.

                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Vijaya Consulting Pvt Ltd
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Vijaya Consulting has been established to undertake study and research on community development, health, and education as well as to provide consulting services in these areas. It was registered with the Office of the Company Registrar as a non-profit company in January 2015 with an authorized capital of NPR 500 thousand. With completion of office incorporation and setup processes, the company is looking forward to relevant assignments on pro-bono as well as cost recovery basis.

                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Vijaya Foundation -Nepal
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    The concept of the foundation is the recent one with establishment of a five-member committee as endorsed by the VDRC-Nepal Board in July 2016. It is yet another social innovation to supplement and amplify humanitarian and philanthropic works in the field of health, education, human rights and poverty alleviation. The potential sources of funding are trustee membership (platinum, gold, and silver member), annual giving by VGI, and interested individual donors wishing to donate for humanitarian cause and/or in memory of their loved ones.

                    <br>

                    While consultation with key stakeholders and registration process is moving ahead, initial pledges to the foundation are forthcoming. Once the institutional setup is in place, it would move ahead with the grant-making process based on proposals solicited from VDRC-Nepal and other CSOs working in the designated thematic areas.

                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Vijaya shree Consumers Cooperative Ltd 
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    A consumer cooperative, founded to avail local consumers quality goods in one roof in 2016. A mart started since 2019 which has seen good start in consumerism and cooperative concept. This model expects engaged producers and consumers benefitting grass root economies.

                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Welfare Programs</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    As a non-profit making and non-political organization, VDRC-Nepal is providing welfare service to the broader community people. The welfare programs are managed through internal resources in bringing positive social change.
                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Natural Resource Management
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    The Eastern and Southern part of Gaindakot has been affected by Narayani River over many years. Having felt the need of embanking, VDRC-Nepal took initiative and planted about 16,000 Sissoo plant throughout the bank of Narayani River covering 4.2 hectors land. It is taking due care in conserving the growing trees in the plantation area with provision of a dedicated caretaker.
                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Community Health Service
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    VDRC-Nepal has been contributing to community health related issues since its establishment. Water-borne diseases treatment, safe drinking water supply and sanitation are the major concerns of the community people that VDRC-Nepal addressed in the past. It has been operating an ambulance service, and organizing blood donation, health camp, and vaccination programs occasionally.

                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Community Library
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    VDRC-Nepal has been operating a community library in its premises to serve staff, members, local community and researchers. It has collections of various development related materials, journals, literature, research papers, reports, daily newspapers and VDRC-Nepal publications.
                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Relief Fund
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    All staff, members and professionals of VDRC-Nepal are obliged to contribute their one day salary or remuneration to the relief fund, which is mobilized and used on need basis to help victims of natural calamities.
                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Radio Program
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    VDRC-Nepal has been producing and broadcasting several radio programs in Vijaya Community FM 101.6 on weekly basis. VDRC-Nepal activities, interviews with development professionals, and community development related information are the major contents of Bikash Chintan (development thinking). Nasuniyaka Sworharu (unheard voices) focuses on empowerment of marginalized groups, which targets the Bote, Majhi and Mushar communities. In addition, Mero Vidhyalaya Mero Sikai (my school my learning) radio magazine focuses on education.
                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    Scholarship Program
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    VDRC-Nepal regularly facilitates scholarship programs with support from individuals and organizations targeting students in the local schools. Such scholarships cover educational materials, warm clothes, and annual school fees.
                </p>
        
                
            </div>
            <div>
                <div class="px-8 my-5 w-full">
                    <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                      <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#000cf9] text-left rounded-tr-full text-white  px-5">
                        Notices / Vacancy
                      </h1>
                      <ul class="px-5 text-[#000cf9] dark:text-zinc-400 text-md list-disc list-inside">
                        @foreach ($notices as $notice)
                          <li class="py-2">
                              <a href="/storage/{{$notice->filepath}}" class="hover:text-[#4a52e7] dark:hover:text-white">
                                <span class="font-semibold">{{$notice->title}}</span>
                                <p class="text-sm px-5">{{ \Carbon\Carbon::parse($notice->created_at)->format('d F Y')}}</p>
                                <hr class="line dark:border-zinc-500 border-[#000cf9]">
                              </a>
                          </li>
                        @endforeach
                        
                      </ul>
                      <div class="flex justify-center my-5">
                        <a href="{{route('notice')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a52e7]">
                          Read More
                        </a>
                      </div>
                    </div>
                </div>
  
                <div class="px-8 my-5">
                  <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                    <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#000cf9] text-left rounded-tr-full text-white  px-5">
                      Articles
                    </h1>
                    <ul class="px-5 text-[#000cf9] dark:text-zinc-400 text-md list-disc list-inside">
                      @foreach ($articles as $article)
                          <li class="py-2">
                              <a href="{{route('articlesview',$article->id)}}" class="hover:text-[#4a52e7] dark:hover:text-white">
                                <span class="font-semibold">{{$article->title}}</span>
                                <p class="text-sm px-5">{{ \Carbon\Carbon::parse($article->created_at)->format('d F Y')}}</p>
                                <hr class="line dark:border-zinc-500 border-[#000cf9]">
                              </a>
                          </li>
                        @endforeach
                      
                    </ul>
                    <div class="flex justify-center my-5">
                      <a href="{{route('articles')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a52e7]">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
  
                <div class="px-8 my-5">
                  <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                    <h1 class="text-lg md:text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#000cf9] text-left rounded-tr-full text-white  px-5">
                      Recent Activities
                    </h1>
                    <ul class="px-5 text-[#000cf9] dark:text-zinc-400 text-md list-disc list-inside">
                      @foreach ($recentactivities as $recentactivity)
                          <li class="py-2">
                              <a href="{{route('recentactivitiesview',$recentactivity->id)}}" class="hover:text-[#4a52e7] dark:hover:text-white">
                                <span class="font-semibold">{{$recentactivity->title}}</span>
                                <p class="text-sm px-5">{{ \Carbon\Carbon::parse($recentactivity->created_at)->format('d F Y')}}</p>
                                <hr class="line dark:border-zinc-500 border-[#000cf9]">
                              </a>
                          </li>
                        @endforeach
                      
                    </ul>
                    <div class="flex justify-center my-5">
                      <a href="{{route('recentactivities')}}" class="px-4 py-1 bg-[#000cf9] text-white rounded-md shadow-lg hover:bg-[#4a52e7]">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
  
            </div>
        </div>

    </div>
@endsection