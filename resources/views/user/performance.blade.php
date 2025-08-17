<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Performance">
    <x-slot:maincontent>
        <main class="h-screen w-full bg-gray-150">
            <div class="flex lg:flex-row md:flex-row flex-col w-full h-full">
                <div class="lg:w-1/6 h-full bg-white shadow-sm w-full py-8 relative">
                    <x-DashboardNav />
                </div>
                <div class="lg:w-5/6 h-full w-full p-5 overflow-auto relative">
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
                    <div class="w-full bg-white shadow-sm rounded-md p-5">
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
                        @if(empty($userData->details))
                        <p class="text-r font-medium text-xl mb-2">*Please fill all details below</p>
                        @endif
                        <div class="flex flex-row gap-6">
                            <div class="shadow-sm bg-gray-100 w-1/2 rounded-md overflow-hidden h-70">
                                <h3 class="text-h text-center font-medium text-lg capitalize text-md bg-black py-2">personal information</h3>
                                <ul class="p-3">
                                    <li class="text-b text-lg font-medium pb-2 border-b border-gray-200">Email: <span class="opacity-75 text-b">{{ $userData->details->email ?? 'example@gmail.com' }}</span></li>
                                    <li class="text-b text-lg font-medium py-2 border-b border-gray-200">Mobile: <span class="opacity-75 text-b">{{ $userData->details->contact_no ?? '+91 91637154778' }}</span></li>
                                    <li class="text-b text-lg font-medium py-2 border-b border-gray-200">Gender: <span class="opacity-75 text-b">{{ $userData->details->gender ?? 'Male/Female' }}</span></li>
                                    <li class="text-b text-lg font-medium py-2 border-b border-gray-200">City: <span class="opacity-75 text-b">{{ $userData->details->current_city ?? 'Kolkata' }}</span></li>
                                    <li class="text-b text-lg font-medium pt-2">DOB: <span class="opacity-75 text-b">{{ $userData->details->birth_date ?? '21-10-2002' }}</span></li>
                                </ul>
                            </div>
                            <div class="w-1/2 h-70">
                                <div class="shadow-sm bg-gray-100 rounded-md overflow-hidden mb-2 h-full">
                                    <h3 class="text-h text-center font-medium text-lg capitalize text-md bg-black py-2">career preferences</h3>
                                    <div class="p-3">
                                        <div class="my-2">
                                            <p class="capitalize text-b font-medium text-lg opacity-75">preffered job type</p>
                                            <p class="text-b capitalize font-medium text-lg">example</p>
                                        </div>
                                        <div class="my-2">
                                            <p class="capitalize text-b font-medium text-lg opacity-75">availability to work</p>
                                            <p class="text-b capitalize font-medium text-lg">example</p>
                                        </div>
                                        <div class="mt-2">
                                            <p class="capitalize text-b font-medium text-lg opacity-75">preffered location</p>
                                            <p class="text-b capitalize font-medium text-lg">kolkata, delhi, mumbai, bangalore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow-sm bg-gray-100 w-full rounded-md overflow-hidden my-4">
                            <h3 class="text-h text-center font-medium text-lg capitalize text-md bg-black py-2">key skills</h3>
                            <div class="p-3 grid grid-cols-10 gap-3">
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">html</span>
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">css</span>
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">javascript</span>
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">jquery</span>
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">jquery UI</span>
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">bootstrap</span>
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">tailwind</span>
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">react</span>
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">PHP</span>
                                <span class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-sm font-medium text-gray-400 inset-ring inset-ring-gray-400/20 capitalize text-b flex justify-center items-center">Laravel</span>
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="shadow-sm bg-gray-100 w-1/2 rounded-md overflow-hidden h-70">
                                <h3 class="text-h text-center font-medium text-lg capitalize text-md bg-black py-2">employment</h3>
                                <div class="p-3 overflow-auto h-60">
                                    <div class="border-b pb-2 border-gray-300">
                                        <p class="capitalize text-lg text-b font-medium">jr. laravel developer</p>
                                        <span class="text-b capitalize text-sm opacity-75">july 2025 - present</span>
                                        <p class="text-b opacity-75 text-sm truncate w-[480px] mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit, voluptas culpa esse non provident?</p>
                                    </div>
                                    <div class="border-b pb-2 border-gray-300">
                                        <p class="capitalize text-lg text-b font-medium">web developer</p>
                                        <span class="text-b capitalize text-sm opacity-75">july 2025 - present</span>
                                        <p class="text-b opacity-75 text-sm truncate w-[480px] mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit, voluptas culpa esse non provident?</p>
                                    </div>
                                    <div class="border-b pb-2 border-gray-300">
                                        <p class="capitalize text-lg text-b font-medium">frontend developer</p>
                                        <span class="text-b capitalize text-sm opacity-75">july 2025 - present</span>
                                        <p class="text-b opacity-75 text-sm truncate w-[480px] mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit, voluptas culpa esse non provident?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2 h-70">
                                <div class="shadow-sm bg-gray-100 rounded-md overflow-hidden mb-2 h-full">
                                    <h3 class="text-h text-center font-medium text-lg capitalize text-md bg-black py-2">projects</h3>
                                    <div class="p-3">
                                        <div class="my-2 border-b border-gray-300 pb-2">
                                            <a href="">
                                                <p class="capitalize text-b font-medium text-lg">takeNcare<i class="ri-arrow-right-up-line ms-1 text-b"></i></p>
                                            </a>
                                            <p class="text-b capitalize font-medium text-base opacity-75 truncate w-[400px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto ad commodi officia fuga dolore repudiandae!</p>
                                        </div>
                                        <div class="my-2 border-b border-gray-300 pb-2">
                                            <a href="">
                                                <p class="capitalize text-b font-medium text-lg">example<i class="ri-arrow-right-up-line ms-1 text-b"></i></p>
                                            </a>
                                            <p class="text-b capitalize font-medium text-base opacity-75 truncate w-[400px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto ad commodi officia fuga dolore repudiandae!</p>
                                        </div>
                                        <div class="my-2 border-b border-gray-300 pb-2">
                                            <a href="">
                                                <p class="capitalize text-b font-medium text-lg">example<i class="ri-arrow-right-up-line ms-1 text-b"></i></p>
                                            </a>
                                            <p class="text-b capitalize font-medium text-base opacity-75 truncate w-[400px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto ad commodi officia fuga dolore repudiandae!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>