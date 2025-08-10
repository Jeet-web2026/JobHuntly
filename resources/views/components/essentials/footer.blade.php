<footer class="bg-[#202430] py-5 w-full">
    <div class="max-w-[1300px] min-w-[1000px] mx-auto p-5">
        <div class="flex justify-between gap-8 lg:flex-row md:flex-row flex-col items-start">
            <div class="w-2/4 pe-5">
                <a href="{{  url('/') }}" class="flex items-center">
                    <h2 class="text-5xl font-bold" style="color: #ffffff !important;">J</h2>
                    <img src="{{ asset('assets/images/logo_2.png') }}" alt="{{  config('app.name') }}-logo" class="h-10">
                </a>
                <p class="text-base font-medium mt-5" style="color: #ffffff !important;">Great platform for the job seeker that passionate about startups. Find your dream job easier.</p>
            </div>
            <div class="w-1/4">
                <h4 class="text-xl capitalize font-semibold mb-4" style="color: #ffffff !important;">about</h4>
                <ul>
                    <a href="">
                        <li class="capitalize text-base mb-2" style="color: #ffffff !important;">companies</li>
                    </a>
                    <a href="">
                        <li class="capitalize text-base mb-2" style="color: #ffffff !important;">pricing</li>
                    </a>
                    <a href="">
                        <li class="capitalize text-base mb-2" style="color: #ffffff !important;">terms</li>
                    </a>
                    <a href="">
                        <li class="capitalize text-base mb-2" style="color: #ffffff !important;">advice</li>
                    </a>
                    <a href="">
                        <li class="capitalize text-base" style="color: #ffffff !important;">privacy policy</li>
                    </a>
                </ul>
            </div>
            <div class="w-1/4">
                <h4 class="text-xl capitalize font-semibold mb-4" style="color: #ffffff !important;">recourses</h4>
                <ul>
                    <a href="">
                        <li class="capitalize text-base mb-2" style="color: #ffffff !important;">help docs</li>
                    </a>
                    <a href="">
                        <li class="capitalize text-base mb-2" style="color: #ffffff !important;">guide</li>
                    </a>
                    <a href="">
                        <li class="capitalize text-base mb-2" style="color: #ffffff !important;">updates</li>
                    </a>
                    <a href="">
                        <li class="capitalize text-base mb-2" style="color: #ffffff !important;">contact us</li>
                    </a>
                </ul>
            </div>
            <div class="w-2/4">
                <h4 class="text-xl capitalize font-semibold mb-4" style="color: #ffffff !important;">get jobs notifications</h4>
                <p class="capitalize" style="color: #ffffff !important;">the latest job news, articles, sent your inbox weekly.</p>
                <form class="flex mt-5 lg:flex-row md:flex-row flex-col items-start">
                    <input type="text" placeholder="Enter your email" class="w-full rounded-none outline-none px-4 py-2 border border-gray-300" style="color: #ffffff !important;">
                    <button type="submit" class="px-4 py-2 cursor-pointer hover:bg-[#1f1c5b] border border-transparent  hover:border-gray-500 transition-all duration-300 text-base ms-1 bg-[#4640DE] capitalize" style="color: #ffffff !important;">subscribe</button>
                </form>
            </div>
        </div>
        <div class="border-t-1 mt-8 border-gray-600 py-5 flex justify-between items-center lg:flex-row md:flex-row flex-col items-start">
            <div class="text-base capitalize" style="color: #ffffff !important;">
                <i class="ri-copyright-line" style="color: #ffffff !important;"></i>
                2025 - {{ date('Y') }} designed and developed by <a href="{{ url('/') }}" class="" style="color: #ffffff !important;">JobHuntly</a>
            </div>
            <div class="flex items-center space-x-5">
                <a href="" class="border border-gray-600 px-1 rounded-full"><i class="ri-facebook-circle-fill text-2xl" style="color: #ffffff !important;"></i></a>
                <a href="" class="border border-gray-600 px-1 rounded-full"><i class="ri-linkedin-box-fill text-2xl" style="color: #ffffff !important;"></i></a>
                <a href="" class="border border-gray-600 px-1 rounded-full"><i class="ri-instagram-fill text-2xl" style="color: #ffffff !important;"></i></a>
                <a href="" class="border border-gray-600 px-1 rounded-full"><i class="ri-twitter-fill text-2xl" style="color: #ffffff !important;"></i></a>
                <a href="" class="border border-gray-600 px-1 rounded-full"><i class="ri-dribbble-fill text-2xl" style="color: #ffffff !important;"></i></a>
            </div>
        </div>
    </div>
</footer>