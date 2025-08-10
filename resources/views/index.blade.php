<x-BaseComponent jquery="true" slick="true">
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
    <section class="w-full" role="company-hiring-section">
        <div class="max-w-[1300px] min-w-[1000px] mx-auto p-5 relative overflow-hidden">
            <div class="flex justify-between items-center">
                <p class="capitalize text-lg font-medium">companies we helped grow</p>
                <a href="" class="capitalize text-base font-medium group">see all companies<i class="ri-arrow-right-line ms-2 group-hover:ms-3 duration-300 transition-all"></i></a>
            </div>
            <div class="mt-5 companies-hire">
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex"><i class="ri-github-fill me-3 text-3xl"></i>github</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex"><i class="ri-google-line text-4xl me-3"></i>google</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex"><i class="ri-microsoft-line text-4xl me-3"></i>microsoft</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex"><i class="ri-meta-line text-4xl me-3"></i>meta</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex"><i class="ri-amazon-fill text-4xl me-3"></i>amazon</p>
                </div>
                <div class="p-5 text-center">
                    <p class="capitalize text-2xl items-center justify-start flex"><i class="ri-apple-line text-4xl me-3"></i>apple</p>
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
                    <h3 class="text-2xl font-semibold capitalize text-b mt-5 mb-4">human resourse</h3>
                    <a href="" class="text-xl text-b opacity-75 group">190 jobs available<i class="ri-arrow-right-line ms-1 group-hover:ms-2 text-b duration-300 transition-all"></i></a>
                </div>
            </div>
        </div>
    </section>
    {{--explore by category--}}

    {{-- jobs posting --}}
    <section></section>
    {{-- jobs posting --}}
</x-BaseComponent>