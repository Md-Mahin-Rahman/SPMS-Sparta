 <!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PLO Achievement View </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{asset('css/components.min.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/echarts.min.js')}}"></script>
{{--    <script src="{{url( 'vendor/jquery.min.js' )}}"></script>--}}
{{--    <script src="{{url( 'public/css/components.min.css' )}}"></script>--}}

{{--    <script src="{{url( 'vendor/Chart.min.js' )}}"></script>--}}
{{--    <script src="{{url( 'public/js/jquery.min.js' )}}"></script>--}}
{{--    <script src="{{url( 'public/js/bootstrap.bundle.min.js' )}}"></script>--}}
{{--    <script src="{{url( 'public/js/echarts.min.js' )}}"></script>--}}

{{--    <script src="{{url( 'vendor/create-charts.js' )}}"></script>--}}

{{--    @extends('layouts.app')--}}

{{--    @section('content')--}}
</head>
<body>
<div class="col-md-12">
    @yield('content')

    @yield('javascript')
    <h1 class="text-center">how to create dynamic barchart in laravel - websolutionstuff.com</h1>
    <div class="col-md-8 col-md-offset-2">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="bars_basic"></div>
{{--                        {!! $fruit_count->container() !!}{!! $fruit_count->script() !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--@endsection--}}

</body>
</html>
{{--@endsection--}}

<script type="text/javascript">
    // import * as echarts from "echarts";

    var bars_basic_element = document.getElementById('bars_basic');
    if (bars_basic_element) {
        var bars_basic = echarts.init(bars_basic_element);
        bars_basic.setOption({
            color: ['#3490dc'],
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [
                {
                    type: 'category',
                    // data: ['PLO1'],

                    data: ['PLO1','PLO2','PLO3','PLO4','PLO5','PLO6','PLO7','PLO8','PLO9','PLO10','PLO11','PLO12','PLO13'],
                    axisTick: {
                        alignWithLabel: true
                    }
                    // ,'Vegetable' ,'EEE'
                }
            ],
            yAxis: [
                {
                    type: 'value',

                }
            ],
            series: [
                {
                    name: 'PLOAchievement',
                    type: 'bar',
                    barWidth: '20%',
                    data: [
                        {{$plo1Percent}},
                        {{$plo2Percent}},
                        {{$plo3Percent}},
                        {{$plo4Percent}},
                        {{$plo5Percent}},
                        {{$plo6Percent}},
                        {{$plo7Percent}},
                        {{$plo8Percent}},
                        {{$plo9Percent}},
                        {{$plo10Percent}},
                        {{$plo11Percent}},
                        {{$plo12Percent}},
                        {{$plo13Percent}}

{{--                        {{$veg_count}}--}}
{{--                        {{$grains_count}}--}}
                    ]
                }
            ]
        });
    }
</script>
