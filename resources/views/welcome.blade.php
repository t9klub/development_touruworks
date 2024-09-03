<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('partials._metas') 

        <title> @lang('home.title-site') / Touru Works 2024 Dev.</title>
        <link rel="icon" href="{{asset('/src/svg/work_mouth_white.svg')}}" type="image/icon" >
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
        <style>
            * {
                scrollbar-width: thin;
                scrollbar-color: #ffbc00 #2A292B;
                }
            body{
                background-color: #171618;
                /* background-color: #e5e5f7; */
                opacity: 0.8;
                background-image:  radial-gradient(#4c4c4c 0.5px, transparent 0.5px), radial-gradient(#ffbb003e 0.5px, #171618 0.5px);
                background-size: 20px 20px;
                background-position: 0 0,10px 10px;
                /* overflow: hidden; */
            }
        </style> 
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gray' : '#171618',
                        'card' : '#202127',
                        'primary' : '#ffbc00',
                        'secondary' : '#fff',
                        'subtext': '#BCBDBE',
                        'input' : '#2A292B'
                    }
                }
            }
            }
        </script>
        {{-- <script src="node_modules/@material-tailwind/html/scripts/tabs.js"></script> --}}
        
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <meta name="google-site-verification" content="I3Jpqomt_cy729MCwFtp10xD5QRW3UwJEIPE9ZC6gnA" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased"> 
        <div class="h-screen flex items-center justify-center mx-4 ">
            <div class="w-full md:w-10/12 lg:w-3/4 xl:w-1/3  animation-all duration-1000 scale-95" >
                <div class="w-full overflow-hidden text-neutral-600 dark:divide-neutral-100 dark:bg-neutral-900/50 dark:text-neutral-300 px-4 py-2">
                    <div class="flex flex-col">
                        <div class="relative h-[160px] w-full overflow-hidden rounded-md mb-4">
                            {{-- <img src="https://media1.tenor.com/m/uNb4xaRRK9UAAAAd/bangboo-snif.gif" alt="header_bangboo_sniff" class="absolute inset-0 object-cover w-full h-full"> --}}
                            <img src="{{asset('/src/gif/bangboo.gif')}}" alt="header_bangboo_sniff" class="absolute inset-0 object-cover w-full h-full">
                            <div class="absolute inset-0 flex items-center flex-col justify-center z-10">
                                <small>Development</small>
                                <h1 class="font-bold text-xl text-white -mt-2 ">Touru Works</h1>
                                <small>Give me a powa here <a href="https://ko-fi.com/touru9klub" class="underline hover:text-yellow-400 transition-all duration-600">Ko-fi</a> or <a href="https://trakteer.id/touruworks" class="underline hover:text-yellow-400 transition-all duration-600">Trakteer</a></small>
                            </div>
                        </div>
                      
                    </div>
                   
                    {{-- Item 1 --}}
                    <div x-data="{ isExpanded: false }" class="divide-y  divide-white/10 dark:divide-white/10  rounded-lg bg-card/60 shadow-md shadow-white/5 group transition-all duration-600"
                    :class="isExpanded ? '0'  : ''">
                        <button id="controlsAccordionItemOne" type="button" class="flex w-full items-center justify-between gap-4 bg-neutral-50 p-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none dark:bg-card dark:hover:bg-card/75 dark:focus-visible:bg-neutral-900/75 transition-all duration-500 group-hover:text-primary bg-[url('{{asset('/src/png/dot_pattern.png')}}')] bg-right-top bg-no-repeat bg-blend-exclusion" aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold rounded-t-lg text-yellow-500'  : 'text-onSurface dark:text-onSurfaceDark font-medium rounded-lg'" :aria-expanded="isExpanded ? 'true' : 'false'">
                           @lang('home.title-1')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </button>
                        <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne" x-collapse x-transition>
                            <div class="p-4 text-sm sm:text-base text-pretty">
                                @lang('home.content-1')
                            </div>
                        </div>
                    </div>
                    {{-- item 2 --}}
                    <div x-data="{ isExpanded: false }" class="divide-y  divide-white/10 dark:divide-white/10  rounded-lg bg-card/60 shadow-md shadow-white/5 group transition-all duration-600 mt-4">
                        <button id="controlsAccordionItemTwo" type="button" class="flex w-full items-center justify-between gap-4 bg-neutral-50 p-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none dark:bg-card dark:hover:bg-card/75 dark:focus-visible:bg-neutral-900/75 transition-all duration-500 group-hover:text-primary bg-[url('{{asset('/src/png/dot_pattern.png')}}')] bg-right-top bg-no-repeat bg-blend-exclusion" aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold rounded-t-lg text-yellow-500'  : 'text-onSurface dark:text-onSurfaceDark font-medium rounded-lg'" :aria-expanded="isExpanded ? 'true' : 'false'">
                            <div class="inline-flex items-center space-x-2">
                                <p>Dummy Livechat Youtube</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </button>
                        <div x-cloak x-show="isExpanded" id="accordionItemTwo" role="region" aria-labelledby="controlsAccordionItemTwo" x-collapse x-transition>
                            <div class="p-4 text-sm sm:text-base text-pretty">
                                @lang('home.content-2')
                                <p class="text-subtext font-light text-xs text-right mt-4">
                                    Update Chat: 28 August 2024
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- item 3 --}}
                    <div x-data="{ isExpanded: false }" class="divide-y  divide-white/10 dark:divide-white/10  rounded-lg bg-card/60 shadow-md shadow-white/5 group transition-all duration-600 mt-4"">
                        <button id="controlsAccordionItemThreee" type="button" class="flex w-full items-center justify-between gap-4 bg-neutral-50 p-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none dark:bg-card dark:hover:bg-card/75 dark:focus-visible:bg-neutral-900/75 transition-all duration-500 group-hover:text-primary bg-[url('{{asset('/src/png/dot_pattern.png')}}')] bg-right-top bg-no-repeat bg-blend-exclusion" aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold rounded-t-lg text-yellow-500'  : 'text-onSurface dark:text-onSurfaceDark font-medium rounded-lg'" :aria-expanded="isExpanded ? 'true' : 'false'">
                            <div class="inline-flex items-center space-x-2">
                                <p>Auto Load Livechat Youtube</p>
                            </div>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </button>
                        <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region" aria-labelledby="controlsAccordionItemThree" x-collapse x-transition>
                            <div class="p-4 text-sm sm:text-base text-pretty max-h-96 overflow-y-auto">
                                @lang('home.content-3-1') 
                                <ol class=" overflow-hidden space-y-8 mt-4">
                                    <li
                                    class="relative flex-1">
                                    <div class="flex items-start font-medium w-full  ">
                                        <span
                                        class="w-6 h-6 aspect-square bg-gray-50 border-2 relative z-10 border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm  lg:w-10 lg:h-10">1</span>
                                        <div class="flex flex-col">
                                            <h4 class="text-base font-semibold text-primary mb-2">
                                                @lang('home.subtitle-3-1')</h4>
                                            <p class="text-sm text-gray-600 max-w-sm mb-4"> @lang('home.subtext-3-1')
                                                <br></p>
                                            <img class="rounded-md" src="{{asset('/src/webp/url_chat.webp')}}" alt="url_chat">
                                        
                                        </div>
                                    </div>
                                    </li>
                                    <li class="relative flex-1 ">
                                        <div class="flex items-start font-medium w-full">
                                        <span
                                        class="w-6 h-6 aspect-square bg-gray-50 border-2 relative z-10 border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm  lg:w-10 lg:h-10">2</span>
                                            <div class="flex flex-col">
                                                <h4 class="text-base font-semibold text-primary mb-2">
                                                    @lang('home.subtitle-3-2')</h4>
                                                <p class="text-sm text-gray-600 max-w-lg">
                                                    
                                                    @lang('home.subtext-3-2')
                                                </p> 
                                                <div class="relative z-20 flex items-center mb-2">
                                                <input id="url_input" class="placeholder:text-gray/50 p-2 text-gray border rounded mr-4 w-52 xl:w-72 focus:outline-none bg-gray-200" placeholder=" @lang('home.subtext-3-2-1')" >
                                                <button id="generate_url" class="flex items-center justify-center h-10 w-10 text-xs bg-white border rounded-md cursor-pointer border-neutral-200/60 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none text-neutral-500 hover:text-neutral-600 group"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1664 1664"><path fill="currentColor" d="M1152 704q0-185-131.5-316.5T704 256T387.5 387.5T256 704t131.5 316.5T704 1152t316.5-131.5T1152 704m512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124q-143 0-273.5-55.5t-225-150t-150-225T0 704t55.5-273.5t150-225t225-150T704 0t273.5 55.5t225 150t150 225T1408 704q0 220-124 399l343 343q37 37 37 90"/></svg>
                                                </button>
                                                </div> 
                                                
                                                <p id="check_url" class=" text-sm text-gray-500 dark:text-gray-400">Make sure that your URL is valid</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="relative flex-1 ">
                                        <a class="flex items-start font-medium w-full  ">
                                        <span
                                        class="w-6 h-6 aspect-square bg-gray-50 border-2 relative z-10 border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm  lg:w-10 lg:h-10">3</span>
                                            <div class="block">
                                            <h4 class="text-base font-semibold  text-primary mb-2">
                                                @lang('home.subtitle-3-3')</h4>
                                            <p class="text-sm text-gray-600 max-w-xs">
                                                @lang('home.subtext-3-3')
                                                <div x-data="{
                                                    copyText: '',
                                                    copyNotification: false,
                                                    copyToClipboard() {
                                                        // Mendapatkan referensi elemen textarea
                                                        const textarea = document.querySelector('#result-textarea');
                                                        // Menyalin teks dari textarea ke clipboard
                                                        if (textarea) {
                                                            navigator.clipboard.writeText(textarea.value);
                                                            this.copyNotification = true;
                                                            let that = this;
                                                            setTimeout(function(){
                                                                that.copyNotification = false;
                                                            }, 3000);
                                                        }
                                                    }
                                                }" class="relative z-20 flex items-center mb-2">
                                                
                                                <!-- Area Notifikasi Salin -->
                                                <div x-show="copyNotification" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-2" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-2" class="absolute right-14" style="display: none;">
                                                    <div class="px-3 h-7 -ml-4 items-center flex text-xs bg-green-500 border-r border-green-500 -translate-x-full text-white rounded">
                                                        <span>Copied!</span>
                                                        <div class="absolute right-0 inline-block h-full -mt-px overflow-hidden translate-x-3 -translate-y-2 top-1/2">
                                                            <div class="w-3 h-3 origin-top-left transform rotate-45 bg-green-500 border border-transparent"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Button Salin -->
                                           
                                                
                                                <!-- Textarea untuk hasil -->
                                                <input id="result-textarea" class="placeholder:text-gray/50 p-2 text-gray border rounded mr-4  w-52 lg:w-72 focus:outline-none bg-gray-200" placeholder="https://dev.touruworks.com/load/...." readonly="" disabled="">
                                                <button @click="copyToClipboard();" class="flex items-center justify-center h-10 w-10 text-xs bg-white border rounded-md cursor-pointer border-neutral-200/60 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none text-neutral-500 hover:text-neutral-600 group">
                                                    <svg x-show="copyNotification" class="w-4 h-4 text-green-500 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display: none;">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                                    </svg>
                                                    <svg x-show="!copyNotification" class="w-4 h-4 stroke-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <g fill="none" stroke="none">
                                                            <path d="M7.75 7.757V6.75a3 3 0 0 1 3-3h6.5a3 3 0 0 1 3 3v6.5a3 3 0 0 1-3 3h-.992" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M3.75 10.75a3 3 0 0 1 3-3h6.5a3 3 0 0 1 3 3v6.5a3 3 0 0 1-3 3h-6.5a3 3 0 0 1-3-3v-6.5z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </button>
                                                </div>
                                            <span class="text-sm text-gray-600 max-w-xs"> Finish ✨<br>@lang('home.subtext-3-3-1')</span>
                                            
                                            </p>
                                            </div>
                                        </a>
                                    </li>
                                    </ol>
                               <div class="mt-2">
                                @lang('home.subtext-3-3-2')
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="flex flex-row justify-between px-4 pb-4 text-sm">
                    <p class="text-subtext">@lang('home.footer-1')</p>
                     @lang('home.footer-2') 
                </footer>
            </div>
        </div>

        <script>
            document.getElementById('generate_url').addEventListener('click', function() {
                // Get the URL from the input field
                const url = document.getElementById('url_input').value;
                const resultDiv = document.getElementById('check_url');
                const resultUrl = document.getElementById('result-textarea');
                // Regular expression to extract the username from the URL
                const regex = /https:\/\/www\.youtube\.com\/@(\w+)/;
                const match = url.match(regex);
                
                if (match && match[1]) {
                    // Display the extracted username
                    resultDiv.classList.remove('text-red-400');
                    resultDiv.classList.add('text-green-400');
                    resultDiv.textContent = `*Youtube link detected, make sure your name is @${match[1]} :)`;
                    resultUrl.value = `https://dev.touruworks.com/load/@${match[1]}`;
                } else {
                    // Display an error message if URL is not 
                    resultDiv.classList.remove('text-green-400');
                    resultDiv.classList.add('text-red-400');
                    resultDiv.textContent = '*Invalid URL or username not found, please check again your url';
                }
            });
        </script>
    </body>
</html>
