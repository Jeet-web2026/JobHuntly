<x-BaseComponent jquery="true">
    <main class="w-full">
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
</x-BaseComponent>