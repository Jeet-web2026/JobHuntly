<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Dashboard" maindashboardjs="true">
    <x-slot:maincontent>
        <main class="h-screen w-full bg-gray-150">
            <div class="flex lg:flex-row md:flex-row flex-col w-full h-full">
                <div class="lg:w-1/6 h-full bg-white shadow-sm w-full py-8 relative">
                    <x-DashboardNav />
                </div>
                <div class="lg:w-5/6 h-full w-full p-3">
                    <div class="shadow-sm h-64 w-64">
                        <div id="donutchart" class="h-full"></div>
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
                ['Task', 'Hours per Day'],
                ['Work', 11],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var options = {
                title: 'My Daily Activities',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
    @endsection
</x-MainComponent>