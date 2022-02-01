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
        <div class="grid grid-cols-3">
            <div class="col-span-2">
                <h1 class="text-3xl py-4 px-2 font-semibold text-[#5977E9]">
                    <span class="border-l-4 border-[#5977E9] px-2"></span> 
                    Currently Running Programs
                </h1>
                <hr class="line dark:border-zinc-500 border-[#5977E9]">
        
                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    A. Food Balance Sheet Project
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Food Balance Sheet Project named “Sustaining Municipal Food and Nutrition Security Using Food Balance Sheet Approach” is currently running in four municipal bodies namely Gaindakot municipality, Devchuli municipality, Bulingtar rural municipality, Binayi Triveni rural municipality of Nawalpur district and one ward of Bharatpur Metropolitan. This project was started as a covid-19 response project as it was supposed to be a preparedness tool to identify the status of food production, distribution and consumption of local municipal bodies and to act accordingly with strategic planning and policy formulation. The major aim of this project is to strengthen the local municipal bodies for defining their status on the overall food production, distribution and consumption system. The project started from August 2020 to September 2021.The project is supported by Open Society Policy Center and implemented by VDRC.
                </p>
        
                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    B. SUAAHARA II - "Good Nutrition"
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    USAID Suaahara II “Good Nutrition” program aims to improve the nutritional status of women and children in 42 underserved rural districts of Nepal from 20216 to 2023.  This will be achieved through a multi-sector partnership with the government of Nepal (GON), the private sector, and other USAID-funded projects. Suaahara II builds and follows on the first Suaahara project (i.e. Phase 1) implemented from 2011-15. Helen Keller International (HKI) serves as the prime and lead organization for Suaahara II and partners with six consortium organizations to implement the program (CARE, FHI360, Digital Broadcast Initiative Equal Access (DBI EA), Environment and Public Health Organization (ENPHO), Nepali Technical Assistance Group (NTAG), Vijaya Development Resource Center (VDRC)), and partner Non-government organization (P-NGO) in each district and they implement activities within the communities. Suaahara II covers a total of 389 municipalities (262 rural municipalities and 127 urban municipalities) and 3353 wards in Nepal. The primary aims of Suaahara II are to reduce the prevalence of stunting, wasting and underweight among children under five years of age and to reduce the prevalence of anemia among WRA and children 6-59 months of age.<br>
                    Vijaya Development Resource Center (VDRC) was engaged with Suaahara since first phase. During first phase VDRC trained Village Model Farmer (VMF) on homestead gardening. From first year to five year of Suaahara II, VDRC had implemented series of activities to improve access to diverse and nutrient rich foods by women and children through institutional development and marketing of surplus agriculture products. A needs-based specialization training, was provided to the selected VMFs to enhance their capacity in institutional development. Till date 487 local resource person were developed through ten days specialized training on poultry rearing and vegetable production. Similarly, 1011 individuals were trained on business plan and HFP marketing training and 3192 persons were trained on saving credit and group mobilization training. Beside this VDRC provided technical as well as materials support to market management committees to establish haat-bazar and collection centers. VMF network were formed in all 42 districts to build the linkage with local government and other stakeholders working on agriculture sector. For follow-up and re-strengthen the capacity building events we have developed garden to market manual as a reference book to frontline workers.<br>
                    Vijaya Development Resource center will continue capacity building of village model farmers and homestead food production beneficiaries’ group member in year six. Ten days specialized training on poultry rearing and vegetable production will be provided to selected VMF and HFP group members. Similarly, five days saving credit and group mobilization training will be given to HFP group member to encourage saving credit activities on group mobilization and the group will be institutionalized through registration on government bodies. Sustainability of VMF, LRP and HFPB group through linking them with marketing channel and financial institution will be the major objectives year six activities.  
                </p>
        
                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    C. SAHAS For Justice 2.0
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    SAHAS for Justice 2.0 is a project run in Gorkha and Nawalpur District to collect the story of the women victim of armed conflict. This project was started in Feb 2020 and ends in Dec 2022. The project is supported by The Story Kitchen, Kupondole, Kathmandu and funded by European Union. The project aims to collect a total of 444 stories of women victims. This is a major step to work in the field of conflict management especially targeting women by raising their advocacy skills. Further capacity building training to organizations working for conflit related victims, referesher training to justice reporter, story workshops for conflict survivers, ethical guidelines training to local radio station and interaction with local government for the justice of conflict victims are the major activities done to promote all the stakeholder related to conflict and conflict management.
                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    D. Change Starts at Home Phase II
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Change Starts at the Home project was launched in May 2021 and ends in February 2023. The major aim of the project is to reduce and prevent intimate partner violence among vulnerable communities and at risk. Building on the knowledge and lessons from the previous phase, the second phase will build on learning so far to intervene in rural areas of Nawalpur districts namely Hupsekot and Binayi Triveni Rural Municipality. The major activity will be development and provision of sensitization class for listening and discussion group (LDG). The project is supported by Equal Access International and implemented by Vijaya Development Resource Centre.
                </p>

                <p class="px-4 font-bold my-2 text-zinc-600 dark:text-zinc-400">
                    E. Child Dedicated COVID-19 Emergency Response Project
                </p>
        
                <p class="text-justify px-5 pt-2 text-zinc-600 dark:text-zinc-300">
                    Targeting the third wave, VDRC with the aid from Americares have been working to develop a covid-19 dedicated ward especially for children whoch are supposed to be prone in third wave. The covid-19 ward is to be built in municipal hospital of Gaindakot municipality and Madyabindu district hospital, Nawalpur and will be supported by a covid-19 consultant, two psycho counceller and a public health officer. For the dissemination of information regarding safety and precaution from covid-19, five radio station will make and play programs in community level. Government schools will be provided assoceries related to covid-19 safety like sensor based hand sanitizer, mask, gloves while all the local school will be provided a video content about covid-19 safety and precaution  which will be played before online class. Further incentives based economic support will be provided to ambulance drivers thus supporting the overall personnel directly related to covid-19 management.

                </p>

            </div>
            <div>
                <div class="px-8 my-5">
                    <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded pb-2">
                      <h1 class="text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
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
                    <div class="shadow-lg shadow-blue-100 dark:shadow-gray-900 dark:shadow-md w-full rounded  pb-2">
                        <h1 class="text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
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
                        <h1 class="text-2xl py-2 border-l-8 border-[#d6da02] font-semibold bg-[#5977E9] text-left rounded-tr-full text-white  px-5">
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