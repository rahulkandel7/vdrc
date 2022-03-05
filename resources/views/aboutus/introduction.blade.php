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
                    Introduction
                </h1>
                <hr class="line dark:border-zinc-500 border-[#000cf9]">
                <p class="text-justify px-5 pt-5 text-zinc-600 dark:text-zinc-300">
                    Vijaya Development Resource Centre (VDRC-Nepal), initially known as Vijaya Youth Club, is a non-profit member-based social development organization. It has been working in the community development sector for the last 42 years with a vision of equitable, peaceful, affluent and inter-dependent society. Established as a local self-help group in 1979, it is now recognized as a national level NGO with multi-disciplinary human resources and good infrastructure facilities. It has successfully completed a number of community development projects across the country and has made significant contribution in bringing positive change through a people-centered development approach. It has successfully demonstrated how a holistic community development model can be applied for sustainable livelihood in rural areas. Furthermore, it has been able to mobilize local resources and develop the foundations for a centre for social learning. 
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    VDRC-Nepal has experienced four institutional development stages pioneering different development paradigms and models; namely, initial stage as a self-help group, institutional development stage as an intermediary organization, professionalism stage as a resource organization, and innovation stage as pioneering a holistic community development model. The different stages are explained below:
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Initial Stage: Self-help Group [1979-1987]</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Initially, the organization was known as Vijaya Youth Club. Then, the main objective was to organize and mobilize local youth and motivate them in organizing different cultural program, quiz contest, sports, oratory competition and so forth. The organization was generating funds by performing Deusi, Bhailo and other cultural programs and spent on sports, donation, fire fighting, flood mitigation etc. Through these activities, the organization was able to gain popularity soon in the local community.
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Institutional Development Stage: Local Support Organization [1987-1993]</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    The organization was registered at the District Administrative Office, Nawalparasi in 1987. The organization built its own office building by mobilizing local resources, and started working in partnership projects together with other development agencies. In addition, the organization focused on development of both physical infrastructure and human resources. The concept of a savings and credit institution initiated during this stage resulted into establishment of VYCCU Savings and Credit Cooperative Limited.
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Professionalism Development Stage: Resource Organization [1993-2001]</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    This stage brought major changes in the VDRC-Nepal institutional structure. The name was changed from Vijaya Youth Club to Vijaya Development Resource Center (VDRC-Nepal) and it expanded programs both geographically and sectorally. The major program areas attended on, in collaboration with different donors, were: Poverty Alleviation, Women Empowerment, Self-help Promotion, Child Development, Formal and Non-Formal Education, HIV/AIDS, Safe Motherhood, Food Security, and Health and Sanitation. Moreover, the organization created three program departments - Business Wing, Core Program, and Promotional Programs - and changed its working modality giving more focus on process facilitation than on services delivery.
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Innovation Stage: [2002-present]</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    This is the period VDRC-Nepal is testing its holistic development approach in the local community. Four pillars - economic, social, media and education – are considered institutions essential for a holistic development of the society. Establishment of Vijaya Community Education Cooperative was one of the pioneer acts following a cooperative principle, a third-dimensional educational institution with positive aspects of both public and private schools. Likewise, establishment of Vijaya Community FM 101.6 MHz, Vijaya Laghubitta Bittiya Sanstha Ltd. and Vijaya Consultancy Pvt. Ltd (non-profit) are other important initiatives during the period. Currently, a process of incorporating Vijaya Foundation (trust fund) is ongoing. Therefore, this stage has been considered as a very creative period in the organizational timeline.
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Vision</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Dignified, prosperous and equitable society
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Mission</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Continue with efforts in establishing an equitable, peaceful, affluent and inter-dependent society, which would be ensured through –
                    <ul class="px-5 list-disc list-inside text-zinc-600 dark:text-zinc-300">
                        <li>
                            keeping the institution vibrant and resource-filled;
                        </li>
                        <li>
                            skill development and human resource management;
                        </li>
                        <li>
                            employment creation;
                        </li>
                        <li>
                            identification, mobilization and management of local resources; and
                        </li>
                        <li>
                            safeguarding human values and protection of fundamental rights.
                        </li>
                    </ul>
                </p>
        
                <p class="px-4 font-bold italic my-2 text-zinc-600 dark:text-zinc-400">Thematic Areas</p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    <ul class="px-5 list-disc list-inside text-zinc-600 dark:text-zinc-300">
                        <li>
                            Governance
                        </li>
                        <li>
                            Advocacy, Campaign and Lobbying
                        </li>
                        <li>
                            Children, Youth and Women
                        </li>
                        <li>
                            Livelihood Improvement
                        </li>
                        <li>
                            Training, Research and Publication
                        </li>
                    </ul>
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