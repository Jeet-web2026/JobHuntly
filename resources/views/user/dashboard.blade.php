<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Dashboard" maindashboardjs="true">
    <x-slot:maincontent>
        <main class="h-screen w-full bg-gray-150">
            <div class="flex lg:flex-row md:flex-row flex-col w-full h-full">
                <div class="lg:w-1/6 h-full bg-white shadow-sm w-full py-8 relative">
                    <x-DashboardNav />
                </div>
                <div class="lg:w-5/6 h-full w-full p-5 overflow-auto">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="w-full h-64 shadow-sm rounded-lg overflow-hidden relative">
                            <h2 class="text-center uppercase rotate-90 -left-63 w-full top-25 bg-black text-h z-10 py-2 font-semibold absolute">profile performance</h2>
                            <div id="donutchart" class="h-full w-full"></div>
                        </div>
                        <div class="w-full h-64 shadow-sm rounded-lg overflow-hidden relative">
                            <h2 class="text-center uppercase rotate-90 -left-63 w-full top-25 bg-black text-h z-10 py-2 font-semibold absolute">job applications</h2>
                            <div id="donutcharttwo" class="h-full w-full"></div>
                        </div>
                        <div class="h-full bg-white shadow-sm rounded-lg overflow-hidden relative">
                            <h2 class="uppercase font-semibold text-h text-center w-full bg-black py-2">last job applications</h2>
                            <div class="p-4 h-71 overflow-y-auto">
                                <ul>
                                    <li class="flex justify-between items-center mb-2 border-b pb-2 border-gray-200">
                                        <div class="flex justify-start">
                                            <h2 class="uppercase text-2xl flex justify-center items-center font-semibold text-h bg-black w-11 h-11 rounded-sm">c</h2>
                                            <div class="ms-2">
                                                <h4 class="text-b font-medium capitalize text-base">frontend developer</h4>
                                                <p class="text-b opacity-75 capitalize text-sm ">company name | Kolkata | india</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="" class="capitalize text-h border border-gray-300 hover:bg-gray-300 px-2 rounded-sm text-base py-1 font-medium transition-all duration-300"><i class="ri-eye-line text-b"></i></a>
                                        </div>
                                    </li>
                                    <li class="flex justify-between items-center mb-2 border-b pb-2 border-gray-200">
                                        <div class="flex justify-start">
                                            <h2 class="uppercase text-2xl flex justify-center items-center font-semibold text-h bg-black w-11 h-11 rounded-sm">c</h2>
                                            <div class="ms-2">
                                                <h4 class="text-b font-medium capitalize text-base">frontend developer</h4>
                                                <p class="text-b opacity-75 capitalize text-sm ">company name | Kolkata | india</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="" class="capitalize text-h border border-gray-300 hover:bg-gray-300 px-2 rounded-sm text-base py-1 font-medium transition-all duration-300"><i class="ri-eye-line text-b"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="h-full bg-white shadow-sm rounded-lg overflow-hidden relative">
                            <h2 class="uppercase font-semibold text-h text-center w-full bg-black py-2">latest news & blogs</h2>
                            <div class="p-4 h-71 overflow-y-auto">
                                <ul class="h-full">
                                    <marquee behavior="scroll" direction="up" class="h-full">
                                        <li class="flex justify-between items-center mb-2 border-b pb-2 border-gray-200">
                                            <div class="flex justify-start">
                                                <div>
                                                    <h3 class="text-b text-xl capitalize font-medium mb-1">fusion techlab</h3>
                                                    <h4 class="text-b font-medium capitalize text-base truncate w-[450px]">frontend development and technologies</h4>
                                                    <p class="text-b opacity-75 capitalize text-sm truncate w-[400px]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt voluptatem quas explicabo sequi minima quasi in corrupti vitae blanditiis, unde laborum reiciendis rerum, facere quae facilis libero necessitatibus commodi aut, dolor sapiente consequatur vel? Blanditiis voluptates aliquid eos numquam nostrum reiciendis nam quod, dolores ipsum consequuntur eligendi eveniet? Sapiente, illum.</p>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="" class="capitalize text-h border border-gray-300 hover:bg-gray-300 px-2 rounded-sm text-base py-1 font-medium transition-all duration-300"><i class="ri-eye-line text-b"></i></a>
                                            </div>
                                        </li>
                                        <li class="flex justify-between items-center mb-2 border-b pb-2 border-gray-200">
                                            <div class="flex justify-start">
                                                <div>
                                                    <h3 class="text-b text-xl capitalize font-medium mb-1">fusion techlab</h3>
                                                    <h4 class="text-b font-medium capitalize text-base truncate w-[450px]">frontend development and technologies</h4>
                                                    <p class="text-b opacity-75 capitalize text-sm truncate w-[400px]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt voluptatem quas explicabo sequi minima quasi in corrupti vitae blanditiis, unde laborum reiciendis rerum, facere quae facilis libero necessitatibus commodi aut, dolor sapiente consequatur vel? Blanditiis voluptates aliquid eos numquam nostrum reiciendis nam quod, dolores ipsum consequuntur eligendi eveniet? Sapiente, illum.</p>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="" class="capitalize text-h border border-gray-300 hover:bg-gray-300 px-2 rounded-sm text-base py-1 font-medium transition-all duration-300"><i class="ri-eye-line text-b"></i></a>
                                            </div>
                                        </li>
                                        <li class="flex justify-between items-center mb-2 border-b pb-2 border-gray-200">
                                            <div class="flex justify-start">
                                                <div>
                                                    <h3 class="text-b text-xl capitalize font-medium mb-1">fusion techlab</h3>
                                                    <h4 class="text-b font-medium capitalize text-base truncate w-[450px]">frontend development and technologies</h4>
                                                    <p class="text-b opacity-75 capitalize text-sm truncate w-[400px]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt voluptatem quas explicabo sequi minima quasi in corrupti vitae blanditiis, unde laborum reiciendis rerum, facere quae facilis libero necessitatibus commodi aut, dolor sapiente consequatur vel? Blanditiis voluptates aliquid eos numquam nostrum reiciendis nam quod, dolores ipsum consequuntur eligendi eveniet? Sapiente, illum.</p>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="" class="capitalize text-h border border-gray-300 hover:bg-gray-300 px-2 rounded-sm text-base py-1 font-medium transition-all duration-300"><i class="ri-eye-line text-b"></i></a>
                                            </div>
                                        </li>
                                        <li class="flex justify-between items-center mb-2 border-b pb-2 border-gray-200">
                                            <div class="flex justify-start">
                                                <div>
                                                    <h3 class="text-b text-xl capitalize font-medium mb-1">fusion techlab</h3>
                                                    <h4 class="text-b font-medium capitalize text-base truncate w-[450px]">frontend development and technologies</h4>
                                                    <p class="text-b opacity-75 capitalize text-sm truncate w-[400px]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt voluptatem quas explicabo sequi minima quasi in corrupti vitae blanditiis, unde laborum reiciendis rerum, facere quae facilis libero necessitatibus commodi aut, dolor sapiente consequatur vel? Blanditiis voluptates aliquid eos numquam nostrum reiciendis nam quod, dolores ipsum consequuntur eligendi eveniet? Sapiente, illum.</p>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="" class="capitalize text-h border border-gray-300 hover:bg-gray-300 px-2 rounded-sm text-base py-1 font-medium transition-all duration-300"><i class="ri-eye-line text-b"></i></a>
                                            </div>
                                        </li>
                                    </marquee>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </x-slot:maincontent>
    @section('chartjs')
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Profile Optimisation'],
                ['Skills match', 11],
                ['Location match', 2],
                ['Salary match', 3],
                ['Timing match', 4],
            ]);

            var options = {
                pieHole: 0.2,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }

        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawCharttwo);

        function drawCharttwo() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Job Application'],
                ['Today', 6],
                ['This Week', 2],
                ['Last Week', 2],
            ]);

            var options = {
                pieHole: 0.2,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutcharttwo'));
            chart.draw(data, options);
        }
    </script>
    @endsection
</x-MainComponent>