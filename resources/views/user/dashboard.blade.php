<x-MainComponent maintitle="{{ Auth::user('web')->name }} | dashboard">
    <x-slot:maincontent>
        <main class="h-screen w-full bg-gray-150">
            <div class="flex lg:flex-row md:flex-row flex-col w-full h-full">
                <div class="lg:w-1/6 h-full bg-white shadow-sm w-full py-8 relative">
                    <div role="user-description">
                        <div class="flex justify-center items-center">
                            <img src="{{ Auth::user('web')->google_profile }}" alt="{{ Auth::user('web')->name }}" class="rounded-full h-14">
                        </div>
                        <h3 class="text-center capitalize mt-2 font-semibold text-b text-lg">{{ Auth::user('web')->name }}</h3>
                    </div>
                    <div class="flex justify-center items-center">
                        <button command="show-modal" commandfor="dialog" class="absolute bottom-3 text-base font-medium items-center cursor-pointer" style="color: #000 !important;"><i class="ri-shut-down-line me-2" style="color: #000 !important;"></i>Logout</button>
                        <x-DialogBox link="{{ route('auth.logout') }}">
                            Are you sure want to logout?
                        </x-DialogBox>
                    </div>
                </div>
                <div class="lg:w-5/6 h-full w-full">

                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>