<header class="fixed top-0 left-0 w-full bg-transparent py-5">
    <div class="max-w-[1300px] min-w-[1000px] mx-auto flex justify-between items-center px-5 py-2">
        <div class="w-1/2 flex items-center space-x-10">
            <a href="{{  url('/') }}" class="flex items-center">
                <h2 class="text-5xl font-bold">J</h2>
                <img src="{{ asset('assets/images/logo_.png') }}" alt="{{  config('app.name') }}-logo" class="h-10">
            </a>
            <nav role="navigation" class="flex items-center space-x-3">
                <a href="">
                    <h5 class="capitalize font-medium text-lg opacity-75 hover:opacity-100">find jobs</h5>
                </a>
                <a href="">
                    <h5 class="capitalize font-medium text-lg opacity-75 hover:opacity-100">browse companies</h5>
                </a>
                <a href="javascript:void(0)">
                    <h5 class="capitalize font-medium text-lg opacity-75 hover:opacity-100">pages<i class="ri-arrow-down-s-line ms-1"></i></h5>
                </a>
            </nav>
        </div>
        <div class="w-1/2 flex justify-end items-center space-x-8">
            <a href="" class="text-lg font-bold">
                <i class="ri-briefcase-line text-xl me-1"></i>
                Desk
            </a>
            <a href="" class="text-lg font-bold border-r-2 pe-5">
                Login
            </a>
            <a href="">
                <button class="bg-[#4640DE] capitalize px-4 py-2 text-lg hover:bg-[#1f1c5b] transition-all duration-300 cursor-pointer" style="color: #ffffff !important;">
                    signup
                </button>
            </a>
        </div>
    </div>
</header>