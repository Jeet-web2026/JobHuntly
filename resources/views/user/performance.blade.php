<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Performance">
    <x-slot:maincontent>
        <main class="h-screen w-full bg-gray-150">
            <div class="flex lg:flex-row md:flex-row flex-col w-full h-full">
                <div class="lg:w-1/6 h-full bg-white shadow-sm w-full py-8 relative">
                    <x-DashboardNav />
                </div>
                <div class="lg:w-5/6 h-full w-full p-5 overflow-auto">
                    <nav class="flex flew-row items-center gap-5 mb-2">
                        <div class="w-1/2">
                            <a href="{{ route('user.searchapearance') }}">
                                <button class="h-full w-full {{ request()->is('search-appearance') ? 'text-h bg-black shadow-sm' : 'text-b bg-gray-300' }} capitalize py-2 font-medium text-lg rounded-md cursor-pointer">
                                    search appearances
                                </button>
                            </a>
                        </div>
                        <div class="w-1/2">
                            <a href="{{ route('user.recruteractions') }}">
                                <button class="h-full w-full {{ request()->is('recruter-actions') ? 'text-h bg-black shadow-sm' : 'text-b bg-gray-300' }} capitalize py-2 font-medium text-lg rounded-md cursor-pointer">
                                    actions
                                </button>
                            </a>
                        </div>
                    </nav>
                    <div class="h-[90%] w-full bg-white shadow-sm rounded-md p-5">
                        <div class="h-24">
                            <div class="flex justify-between">
                                <div class="flex justify-start items-center">
                                    @if(!empty($userData->details->profile))
                                    <img src="" alt="{{ $userData->details->full_name }}">
                                    @else
                                    <h3 class="bg-black rounded-md text-h h-20 w-20 flex justify-center items-center text-4xl font-semibold">{{ substr($userData->name, 0, 1) }}</h3>
                                    @endif
                                    <div class="ms-2.5">
                                        <p class="capitalize text-b font-semibold text-2xl">{{ $userData->details->full_name ?? 'Full name' }}</p>
                                        <span class="text-b font-medium opacity-75 text-lg">{{ $userData->details->full_qualification ?? 'last qualification' }}</span>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('user.editprofile') }}">
                                        <button class="text-h bg-black px-4 py-2 capitalize text-base rounded-md cursor-pointer">edit profile<i class="ri-edit-box-line ms-2 text-h"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="shadow-sm bg-gray-100 w-1/2 rounded-md overflow-hidden">
                                <h3 class="text-h text-center font-medium capitalize text-md bg-black py-2">personal information</h3>
                            </div>
                            <div class="shadow-sm bg-gray-100 w-1/2 rounded-md overflow-hidden">
                                <h3 class="text-h text-center font-medium capitalize text-md bg-black py-2">professional information</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>