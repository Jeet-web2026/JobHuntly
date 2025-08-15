<x-BaseComponent jquery="true" slick="true" sweetalert="true">
    {{--main section--}}
    <main class="w-full" role="main-section">
        <div class="max-w-[1300px] min-w-[1000px] mx-auto p-5 flex justify-center items-center min-h-screen relative overflow-hidden">
            <div class="w-1/2 relative">
                <h1 class="text-7xl font-bold capitalize">discover more than <span style="color: #26a4ff !important;">5000+ tech roles</span></h1>
                <p class="text-lg mt-4 font-medium">Great platform for the job seeker that searching for new career heights and passionate about startups.</p>
                <div class="mt-5 bg-white shadow-sm px-5 py-5 absolute left-0 w-180">
                    <form action="" method="POST" class="flex items-center justify-between">
                        <div class="flex items-center w-1/3">
                            <i class="ri-search-2-line me-4 text-2xl"></i>
                            <input type="text" placeholder="Job Title or Keyword" class="outline-none border-b">
                        </div>
                        <div class="flex items-center w-1/3">
                            <i class="ri-map-pin-line me-4 text-2xl"></i>
                            <input type="text" placeholder="City or town" class="outline-none border-b">
                        </div>
                        <button class="bg-[#4640DE] py-2 font-medium px-4 text-lg hover:bg-[#1f1c5b] transition-all duration-300 cursor-pointer" style="color: #ffffff !important;">
                            Search my job
                        </button>
                    </form>
                </div>
            </div>
            <div class="w-1/2 h-full flex justify-center items-center">
                <img src="{{ asset('assets/images/bg-back-pattern_.png') }}" alt="second-bg-pattern" class="absolute top-20 left-60 w-full h-full z-[-50]">
                <img src="{{ asset('assets/images/main-bg.png') }}" loading="lazy" alt="main-bg" class="h-150 absolute bottom-0">
            </div>
        </div>
    </main>
    {{--main section--}}

    {{--company trust section--}}
    <section class="w-full py-10" role="company-hiring-section">
        <div class="max-w-[1300px] min-w-[1000px] mx-auto p-5 relative overflow-hidden">
            <div class="flex justify-between items-center">
                <p class="capitalize text-lg font-medium">companies we helped grow</p>
                <a href="" class="capitalize text-base font-medium group">see all companies<i class="ri-arrow-right-line ms-2 group-hover:ms-3 duration-300 transition-all"></i></a>
            </div>
            <div class="mt-5 companies-hire">
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex font-semibold"><i class="ri-github-fill me-3 text-3xl"></i>github</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex font-semibold"><i class="ri-google-line text-4xl me-3"></i>google</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex font-semibold"><i class="ri-microsoft-line text-4xl me-3"></i>microsoft</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex font-semibold"><i class="ri-meta-line text-4xl me-3"></i>meta</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex font-semibold"><i class="ri-amazon-fill text-4xl me-3"></i>amazon</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex font-semibold"><i class="ri-apple-line text-4xl me-3"></i>apple</p>
                </div>
            </div>
        </div>
    </section>
    {{--company trust section--}}

    {{--explore by category--}}
    <section class="w-full" role="jobs-by-category">
        <div class="max-w-[1300px] min-w-[1000px] mx-auto p-5 relative overflow-hidden">
            <div class="flex justify-between items-center">
                <h2 class="text-5xl font-bold capitalize">explore by <span style="color: #26a4ff !important;">category</span></h2>
                <a href="" class="capitalize font-medium text-base group">
                    show all jobs<i class="ri-arrow-right-line ms-2 group-hover:ms-3 transition-all duration-300 ease-in-out"></i>
                </a>
            </div>
            <div class="grid grid-cols-4 overflow-auto mt-10 gap-8">
                <div class="border card-category p-8 border-gray-300 hover:bg-[#4640de] transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-color-filter-ai-line text-4xl font-medium"></i>
                    <h3 class="text-2xl font-semibold capitalize text-b mt-5 mb-4">design</h3>
                    <a href="" class="text-xl text-b opacity-75 group">125 jobs available<i class="ri-arrow-right-line ms-1 group-hover:ms-2 text-b duration-300 transition-all"></i></a>
                </div>
                <div class="border card-category p-8 border-gray-300 hover:bg-[#4640de] transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-color-filter-ai-line text-4xl font-medium"></i>
                    <h3 class="text-2xl font-semibold capitalize text-b mt-5 mb-4">frontend</h3>
                    <a href="" class="text-xl text-b opacity-75 group">783 jobs available<i class="ri-arrow-right-line ms-1 group-hover:ms-2 text-b duration-300 transition-all"></i></a>
                </div>
                <div class="border card-category p-8 border-gray-300 hover:bg-[#4640de] transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-color-filter-ai-line text-4xl font-medium"></i>
                    <h3 class="text-2xl font-semibold capitalize text-b mt-5 mb-4">backend</h3>
                    <a href="" class="text-xl text-b opacity-75 group">250 jobs available<i class="ri-arrow-right-line ms-1 group-hover:ms-2 text-b duration-300 transition-all"></i></a>
                </div>
                <div class="border card-category p-8 border-gray-300 hover:bg-[#4640de] transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-color-filter-ai-line text-4xl font-medium"></i>
                    <h3 class="text-2xl font-semibold capitalize text-b mt-5 mb-4">fullstack</h3>
                    <a href="" class="text-xl text-b opacity-75 group">350 jobs available<i class="ri-arrow-right-line ms-1 group-hover:ms-2 text-b duration-300 transition-all"></i></a>
                </div>
                <div class="border card-category p-8 border-gray-300 hover:bg-[#4640de] transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-color-filter-ai-line text-4xl font-medium"></i>
                    <h3 class="text-2xl font-semibold capitalize text-b mt-5 mb-4">ai</h3>
                    <a href="" class="text-xl text-b opacity-75 group">1360 jobs available<i class="ri-arrow-right-line ms-1 group-hover:ms-2 text-b duration-300 transition-all"></i></a>
                </div>
                <div class="border card-category p-8 border-gray-300 hover:bg-[#4640de] transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-color-filter-ai-line text-4xl font-medium"></i>
                    <h3 class="text-2xl font-semibold capitalize text-b mt-5 mb-4">automation</h3>
                    <a href="" class="text-xl text-b opacity-75 group">105 jobs available<i class="ri-arrow-right-line ms-1 group-hover:ms-2 text-b duration-300 transition-all"></i></a>
                </div>
                <div class="border card-category p-8 border-gray-300 hover:bg-[#4640de] transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-color-filter-ai-line text-4xl font-medium"></i>
                    <h3 class="text-2xl font-semibold capitalize text-b mt-5 mb-4">engineering</h3>
                    <a href="" class="text-xl text-b opacity-75 group">125 jobs available<i class="ri-arrow-right-line ms-1 group-hover:ms-2 text-b duration-300 transition-all"></i></a>
                </div>
                <div class="border card-category p-8 border-gray-300 hover:bg-[#4640de] transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-color-filter-ai-line text-4xl font-medium"></i>
                    <h3 class="text-2xl font-semibold capitalize text-b mt-5 mb-4">human resourses</h3>
                    <a href="" class="text-xl text-b opacity-75 group">190 jobs available<i class="ri-arrow-right-line ms-1 group-hover:ms-2 text-b duration-300 transition-all"></i></a>
                </div>
            </div>
        </div>
    </section>
    {{--explore by category--}}

    {{-- jobs posting --}}
    <section role="jobs-posting" class="w-full py-10">
        <div class="max-w-[1300px] min-w-[1000px] mx-auto p-5 relative overflow-hidden">
            <div class="bg-[#4640DE] h-full w-full flex lg:flex-row flex-col p-14 overflow-hidden px-20">
                <div class="w-1/3">
                    <h2 class="text-h text-5xl font-semibold">Start posting jobs today</h2>
                    <p class="text-h font-medium my-7">Start posting jobs for only $10</p>
                    <button class="bg-white px-5 py-3 text-lg font-bold">Signup for free</button>
                </div>
                <div class="w-2/3 relative">
                    <img src="{{ asset('assets/images/dasboard-back.png') }}" alt="dashboard-back-image" class="h-120 absolute right-0 w-140">
                </div>
            </div>
        </div>
    </section>
    {{-- jobs posting --}}

    {{--featured jobs--}}
    <section role="featured-jobs" class="w-full">
        <div class="max-w-[1300px] min-w-[1000px] mx-auto p-5 relative overflow-hidden">
            <div class="flex justify-between items-center">
                <h2 class="text-5xl font-bold capitalize">featured <span style="color: #26a4ff !important;">jobs</span></h2>
                <a href="" class="capitalize font-medium text-base group">
                    show all jobs<i class="ri-arrow-right-line ms-2 group-hover:ms-3 transition-all duration-300 ease-in-out"></i>
                </a>
            </div>
            <div class="grid lg:grid-cols-4 grid-cols-1 gap-8 mt-8">
                <a href="" class="border p-7 border-gray-300 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('assets/images/company-logo.svg') }}" alt="company-name" class="mix-blend-multiply h-10 rounded-full">
                        <button class="border px-3 py-1.5 capitalize" role="jobs-type">full time</button>
                    </div>
                    <h2 class="capitalize text-lg text-b font-medium mt-3">frontend development</h2>
                    <p class="capitalize text-base text-b opacity-50 items-center">renoult<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                    <p class="capitalize text-base text-b opacity-50 items-center my-4 truncate">renoult islooking for a frontend developer to help team</p>
                    <span class="inline-flex items-center rounded-xs mt-4.5 bg-gray-100 px-2.5 py-1 text-md font-medium text-gray-600 inset-ring inset-ring-gray-500/10">Technology</span>
                </a>
                <a href="" class="border p-7 border-gray-300 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('assets/images/company-logo.svg') }}" alt="company-name" class="mix-blend-multiply h-10 rounded-full">
                        <button class="border px-3 py-1.5 capitalize" role="jobs-type">full time</button>
                    </div>
                    <h2 class="capitalize text-lg text-b font-medium mt-3">frontend development</h2>
                    <p class="capitalize text-base text-b opacity-50 items-center">renoult<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                    <p class="capitalize text-base text-b opacity-50 items-center my-4 truncate">renoult islooking for a frontend developer to help team</p>
                    <span class="inline-flex items-center rounded-xs mt-4.5 bg-gray-100 px-2.5 py-1 text-md font-medium text-orange-600 text-l inset-ring inset-ring-orange-500/10">Technology</span>
                </a>
                <a href="" class="border p-7 border-gray-300 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('assets/images/company-logo.svg') }}" alt="company-name" class="mix-blend-multiply h-10 rounded-full">
                        <button class="border px-3 py-1.5 capitalize" role="jobs-type">full time</button>
                    </div>
                    <h2 class="capitalize text-lg text-b font-medium mt-3">frontend development</h2>
                    <p class="capitalize text-base text-b opacity-50 items-center">renoult<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                    <p class="capitalize text-base text-b opacity-50 items-center my-4 truncate">renoult islooking for a frontend developer to help team</p>
                    <span class="inline-flex items-center text-g rounded-xs mt-4.5 bg-gray-100 px-2.5 py-1 text-md font-medium text-green-600 inset-ring inset-ring-green-500/10">Technology</span>
                </a>
                <a href="" class="border p-7 border-gray-300 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('assets/images/company-logo.svg') }}" alt="company-name" class="mix-blend-multiply h-10 rounded-full">
                        <button class="border px-3 py-1.5 capitalize" role="jobs-type">full time</button>
                    </div>
                    <h2 class="capitalize text-lg text-b font-medium mt-3">frontend development</h2>
                    <p class="capitalize text-base text-b opacity-50 items-center">renoult<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                    <p class="capitalize text-base text-b opacity-50 items-center my-4 truncate">renoult islooking for a frontend developer to help team</p>
                    <span class="inline-flex items-center rounded-xs mt-4.5 bg-gray-100 px-2.5 py-1 text-md font-medium text-gray-600 inset-ring inset-ring-gray-500/10">Technology</span>
                </a>
                <a href="" class="border p-7 border-gray-300 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('assets/images/company-logo.svg') }}" alt="company-name" class="mix-blend-multiply h-10 rounded-full">
                        <button class="border px-3 py-1.5 capitalize" role="jobs-type">full time</button>
                    </div>
                    <h2 class="capitalize text-lg text-b font-medium mt-3">frontend development</h2>
                    <p class="capitalize text-base text-b opacity-50 items-center">renoult<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                    <p class="capitalize text-base text-b opacity-50 items-center my-4 truncate">renoult islooking for a frontend developer to help team</p>
                    <span class="inline-flex text-bl items-center rounded-xs mt-4.5 bg-gray-100 px-2.5 py-1 text-md font-medium text-blue-600 inset-ring inset-ring-blue-500/10">Technology</span>
                </a>
                <a href="" class="border p-7 border-gray-300 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('assets/images/company-logo.svg') }}" alt="company-name" class="mix-blend-multiply h-10 rounded-full">
                        <button class="border px-3 py-1.5 capitalize" role="jobs-type">full time</button>
                    </div>
                    <h2 class="capitalize text-lg text-b font-medium mt-3">frontend development</h2>
                    <p class="capitalize text-base text-b opacity-50 items-center">renoult<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                    <p class="capitalize text-base text-b opacity-50 items-center my-4 truncate">renoult islooking for a frontend developer to help team</p>
                    <span class="inline-flex items-center rounded-xs mt-4.5 bg-gray-100 px-2.5 py-1 text-md font-medium text-gray-600 inset-ring inset-ring-gray-500/10">Technology</span>
                </a>
                <a href="" class="border p-7 border-gray-300 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('assets/images/company-logo.svg') }}" alt="company-name" class="mix-blend-multiply h-10 rounded-full">
                        <button class="border px-3 py-1.5 capitalize" role="jobs-type">full time</button>
                    </div>
                    <h2 class="capitalize text-lg text-b font-medium mt-3">frontend development</h2>
                    <p class="capitalize text-base text-b opacity-50 items-center">renoult<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                    <p class="capitalize text-base text-b opacity-50 items-center my-4 truncate">renoult islooking for a frontend developer to help team</p>
                    <span class="inline-flex items-center rounded-xs mt-4.5 bg-gray-100 px-2.5 py-1 text-md font-medium text-gray-600 inset-ring inset-ring-gray-500/10">Technology</span>
                </a>
                <a href="" class="border p-7 border-gray-300 cursor-pointer">
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('assets/images/company-logo.svg') }}" alt="company-name" class="mix-blend-multiply h-10 rounded-full">
                        <button class="border px-3 py-1.5 capitalize" role="jobs-type">full time</button>
                    </div>
                    <h2 class="capitalize text-lg text-b font-medium mt-3">frontend development</h2>
                    <p class="capitalize text-base text-b opacity-50 items-center">renoult<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                    <p class="capitalize text-base text-b opacity-50 items-center my-4 truncate">renoult islooking for a frontend developer to help team</p>
                    <span class="inline-flex items-center rounded-xs mt-4.5 bg-gray-100 px-2.5 py-1 text-md font-medium text-gray-600 inset-ring inset-ring-gray-500/10">Technology</span>
                </a>
            </div>
        </div>
    </section>
    {{--featured jobs--}}

    {{--latest jobs--}}
    <section role="latest-jobs" class="w-full py-10">
        <div class="max-w-[1300px] min-w-[1000px] mx-auto p-5 relative overflow-hidden">
            <div class="flex justify-between items-center">
                <h2 class="text-5xl font-bold capitalize">latest <span style="color: #26a4ff !important;">jobs open</span></h2>
                <a href="" class="capitalize font-medium text-base group">
                    show all jobs<i class="ri-arrow-right-line ms-2 group-hover:ms-3 transition-all duration-300 ease-in-out"></i>
                </a>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 mt-8 gap-8">
                <a href="" class="bg-white p-5 flex flex-row items-start">
                    <div class="w-1/5 flex items-center justify-center">
                        <img src="{{ asset('assets/images/company-logo-2.svg') }}" alt="company-logo" class="h-20 rounded-full p-2 mix-blend-multiply">
                    </div>
                    <div class="w-4/5">
                        <h4 class="capitalize font-semibold text-b text-2xl mb-1">frontend developer</h4>
                        <p class="capitalize text-base text-b opacity-50 items-center">nomad<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                        <div class="flex flex-row items-center justify-start mt-4.5 gap-3">
                            <span class="inline-flex capitalize items-center rounded-xs bg-green-100 px-2.5 py-1 text-md font-medium text-g text-green-600 inset-ring inset-ring-green-500/10">full time</span>
                            <span class="text-3xl">|</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-orange-100 px-2.5 py-1 text-md font-medium text-l text-orange-600 inset-ring inset-ring-orange-500/10">engineering</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-blue-100 px-2.5 py-1 text-md font-medium text-bl text-blue-600 inset-ring inset-ring-blue-500/10">full stack</span>
                        </div>
                    </div>
                </a>
                <a href="" class="bg-white p-5 flex flex-row items-start">
                    <div class="w-1/5 flex items-center justify-center">
                        <img src="{{ asset('assets/images/company-logo-2.svg') }}" alt="company-logo" class="h-20 rounded-full p-2 mix-blend-multiply">
                    </div>
                    <div class="w-4/5">
                        <h4 class="capitalize font-semibold text-b text-2xl mb-1">frontend developer</h4>
                        <p class="capitalize text-base text-b opacity-50 items-center">nomad<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                        <div class="flex flex-row items-center justify-start mt-4.5 gap-3">
                            <span class="inline-flex capitalize items-center rounded-xs bg-green-100 px-2.5 py-1 text-md font-medium text-g text-green-600 inset-ring inset-ring-green-500/10">full time</span>
                            <span class="text-3xl">|</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-orange-100 px-2.5 py-1 text-md font-medium text-l text-orange-600 inset-ring inset-ring-orange-500/10">engineering</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-blue-100 px-2.5 py-1 text-md font-medium text-bl text-blue-600 inset-ring inset-ring-blue-500/10">full stack</span>
                        </div>
                    </div>
                </a>
                <a href="" class="bg-white p-5 flex flex-row items-start">
                    <div class="w-1/5 flex items-center justify-center">
                        <img src="{{ asset('assets/images/company-logo-2.svg') }}" alt="company-logo" class="h-20 rounded-full p-2 mix-blend-multiply">
                    </div>
                    <div class="w-4/5">
                        <h4 class="capitalize font-semibold text-b text-2xl mb-1">frontend developer</h4>
                        <p class="capitalize text-base text-b opacity-50 items-center">nomad<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                        <div class="flex flex-row items-center justify-start mt-4.5 gap-3">
                            <span class="inline-flex capitalize items-center rounded-xs bg-green-100 px-2.5 py-1 text-md font-medium text-g text-green-600 inset-ring inset-ring-green-500/10">full time</span>
                            <span class="text-3xl">|</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-orange-100 px-2.5 py-1 text-md font-medium text-l text-orange-600 inset-ring inset-ring-orange-500/10">engineering</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-blue-100 px-2.5 py-1 text-md font-medium text-bl text-blue-600 inset-ring inset-ring-blue-500/10">full stack</span>
                        </div>
                    </div>
                </a>
                <a href="" class="bg-white p-5 flex flex-row items-start">
                    <div class="w-1/5 flex items-center justify-center">
                        <img src="{{ asset('assets/images/company-logo-2.svg') }}" alt="company-logo" class="h-20 rounded-full p-2 mix-blend-multiply">
                    </div>
                    <div class="w-4/5">
                        <h4 class="capitalize font-semibold text-b text-2xl mb-1">frontend developer</h4>
                        <p class="capitalize text-base text-b opacity-50 items-center">nomad<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                        <div class="flex flex-row items-center justify-start mt-4.5 gap-3">
                            <span class="inline-flex capitalize items-center rounded-xs bg-green-100 px-2.5 py-1 text-md font-medium text-g text-green-600 inset-ring inset-ring-green-500/10">full time</span>
                            <span class="text-3xl">|</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-orange-100 px-2.5 py-1 text-md font-medium text-l text-orange-600 inset-ring inset-ring-orange-500/10">engineering</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-blue-100 px-2.5 py-1 text-md font-medium text-bl text-blue-600 inset-ring inset-ring-blue-500/10">full stack</span>
                        </div>
                    </div>
                </a>
                <a href="" class="bg-white p-5 flex flex-row items-start">
                    <div class="w-1/5 flex items-center justify-center">
                        <img src="{{ asset('assets/images/company-logo-2.svg') }}" alt="company-logo" class="h-20 rounded-full p-2 mix-blend-multiply">
                    </div>
                    <div class="w-4/5">
                        <h4 class="capitalize font-semibold text-b text-2xl mb-1">frontend developer</h4>
                        <p class="capitalize text-base text-b opacity-50 items-center">nomad<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                        <div class="flex flex-row items-center justify-start mt-4.5 gap-3">
                            <span class="inline-flex capitalize items-center rounded-xs bg-green-100 px-2.5 py-1 text-md font-medium text-g text-green-600 inset-ring inset-ring-green-500/10">full time</span>
                            <span class="text-3xl">|</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-orange-100 px-2.5 py-1 text-md font-medium text-l text-orange-600 inset-ring inset-ring-orange-500/10">engineering</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-blue-100 px-2.5 py-1 text-md font-medium text-bl text-blue-600 inset-ring inset-ring-blue-500/10">full stack</span>
                        </div>
                    </div>
                </a>
                <a href="" class="bg-white p-5 flex flex-row items-start">
                    <div class="w-1/5 flex items-center justify-center">
                        <img src="{{ asset('assets/images/company-logo-2.svg') }}" alt="company-logo" class="h-20 rounded-full p-2 mix-blend-multiply">
                    </div>
                    <div class="w-4/5">
                        <h4 class="capitalize font-semibold text-b text-2xl mb-1">frontend developer</h4>
                        <p class="capitalize text-base text-b opacity-50 items-center">nomad<i class="ri-focus-fill text-b mx-2 text-xs"></i>madrid, spain</p>
                        <div class="flex flex-row items-center justify-start mt-4.5 gap-3">
                            <span class="inline-flex capitalize items-center rounded-xs bg-green-100 px-2.5 py-1 text-md font-medium text-g text-green-600 inset-ring inset-ring-green-500/10">full time</span>
                            <span class="text-3xl">|</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-orange-100 px-2.5 py-1 text-md font-medium text-l text-orange-600 inset-ring inset-ring-orange-500/10">engineering</span>
                            <span class="inline-flex capitalize items-center rounded-xs bg-blue-100 px-2.5 py-1 text-md font-medium text-bl text-blue-600 inset-ring inset-ring-blue-500/10">full stack</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{--latest jobs--}}
</x-BaseComponent>