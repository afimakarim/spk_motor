@extends('templateSuperAdmin')
@section('main')

    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row"  >
            <div class="tile_count">
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Dealer</span>
                    <div class="count">{{ $count_dealer }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-motorcycle"></i> Motor Matic</span>
                    <div class="count">{{ $count_skuter }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-motorcycle"></i> Motor Bebek</span>
                    <div class="count">{{ $count_bebek }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-motorcycle"></i> Motor Sport</span>
                    <div class="count">{{ $count_sport }}</div>
                </div>
                <div class="col-md-6 col-sm-4  tile_stats_count">
                    <span class="count"><i class="fa fa-user"></i> Total Pengunjung</span>
                    <div class="count green">{{ $count_pengunjung }}</div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="total-revenue4" id="chart" style="height: 350px;"></div>
        </div>

    </div>

@stop



@section('footer')
@stop




@section('additional_script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>

        const url = '{{ config('app.url') }}';

        async function chart() {

            const data = await getData();

            //console.log(JSON.stringify(data));

            var options = {
                series: data,
                // series: [
                //     {
                //         name: "matic",
                //         data: [1, 2, 4, 9, 0, 4, 12, 4, 2, 1, 11, 23]
                //     },
                //     {
                //         name: "bebek",
                //         data: [1, 2, 4, 9, 0, 4, 12, 4, 2, 1, 11, 21]
                //     },
                //     {
                //         name: "sport",
                //         data: [1, 7, 6, 9, 0, 4, 12, 4, 2, 1, 11, 23]
                //     },
                // ],
                chart: {
                    height: 350,
                    type: 'area'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    categories: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        }

        chart();

        function getData(){
            return fetch(url+'/superAdmin/chart').then(res => res.json()).then(res => res)
        };
    </script>
@endsection