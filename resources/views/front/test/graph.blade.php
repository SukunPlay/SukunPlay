<html>

<head>

{{--@dd($return['case'])--}}
    <script src="{{asset('graph/highcharts.js')}}"></script>
    <script src="{{asset('graph/networkgraph.js')}}"></script>

    <style>
        #container {
            min-width: 320px;
            max-width: 100%;
            margin: 0 auto;
            height: 100%;
        }
    </style>


</head>

<body>
<div id="container"></div>

</body>

<footer>
    <script>
        var {!! $return['var'] !!}
        ;

        Highcharts.chart('container', {

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
