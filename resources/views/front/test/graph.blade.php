<html>

<head>

    {{--@dd($return['case'])--}}

    <title>Sukun Play</title>
    <link href="css/styles.css" rel="stylesheet"/>
    <link href="{{asset('fawesome/all.min.css')}}" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="{{asset('playbutton.svg')}}"/>
{{ csrf_field() }}


<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163224940-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-163224940-1');
    </script>
    <script src="{{asset('graph/highcharts.js')}}"></script>
    <script src="{{asset('graph/networkgraph.js')}}"></script>

    <style>
        #sv {
            min-width: 320px;
            max-width: 100%;
            margin: 0 auto;
            height: 90%;
            width: 100%;
            padding-top: 24px;
        }


    </style>


</head>

<body style="">

<main>
    <nav class="navbar navbar-marketing navbar-expand-lg navbar-light "
         style="background-color: #00A651; height: 68px">
        <div class="container justify-content-center">
            <img src="{{asset('logo.svg')}}" height="24.53px">
        </div>

    </nav>
</main>

{{--<div class="container">--}}

{{--    <div class="row">--}}

{{--        <div class="col-xl-3 col-md-6">--}}
{{--            <div class="card">--}}
{{--                <div class="card-title" style="align-content: center">--}}
{{--                    <h3>Infected</h3>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    gsd--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-xl-3 col-md-6">--}}
{{--b--}}
{{--        </div>--}}
{{--        <div class="col-xl-3 col-md-6">--}}
{{--c--}}
{{--        </div>--}}
{{--        <div class="col-xl-3 col-md-6">--}}
{{--d--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}

<div id="sv"></div>

</body>

<footer>
    <script>
        var {!! $return['var'] !!}
        ;

        Highcharts.chart('sv', {

            chart: {
                type: 'networkgraph',
                marginTop: 80
            },

            title: {
                text: 'Covid19 Maldives Contact Tracing'
            },

            subtitle: {
                text: 'Confirmed cases based on information made public by HPA'
            },

            tooltip: {
                formatter: function () {
                    var info = "";
                    switch (this.key) {
                        {!! $return['case'] !!}

                    }
                    return "<b>" + "</b>" + info;
                }
            },


            plotOptions: {
                networkgraph: {
                    keys: ['from', 'to'],
                    layoutAlgorithm: {
                        enableSimulation: true,
                        integration: 'verlet',
                        linkLength: 100
                    }
                }
            },

            series: [{
                marker: {
                    radius: 13,
                },
                dataLabels: {
                    enabled: true,
                    linkFormat: '',
                    allowOverlap: true, style: {
                        textOutline: false
                    }
                },
                data: [
                    {!! $return['edge'] !!}
                ],
                nodes: [
                    {!! $return['node'] !!}
                ]
            }]
        });

    </script>

</footer>


</html>
