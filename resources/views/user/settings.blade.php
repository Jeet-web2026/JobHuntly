<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Settings">
    <x-slot:maincontent>
        <main class="h-screen w-full bg-gray-150">
            <div class="flex lg:flex-row md:flex-row flex-col w-full h-full">
                <div class="lg:w-1/6 h-full bg-white shadow-sm w-full py-8 relative">
                    <x-DashboardNav />
                </div>
                <div class="lg:w-5/6 h-full w-full">

                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>