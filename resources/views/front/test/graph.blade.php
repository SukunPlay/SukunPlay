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
                    switch (this.color) {
                        {!! $return['case'] !!}
                    }
                    return "<b>" + "</b>: " + info;
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
                    ['Seoul ICN', 'Daegu'],
                    ['Seoul ICN', 'Busan'],
                    ['Busan', 'Seoul GMP'],
                    ['Busan', 'Yangyang'],


                    ['Daegu', 'Seoul GMP'],
                    ['Daegu', 'Jeju'],

                    ['Seoul GMP', 'Gwangju'],
                    ['Seoul GMP', 'Yeosu'],
                    ['Seoul GMP', 'Sacheon'],
                    ['Seoul GMP', 'Ulsan'],
                    ['Seoul GMP', 'Pohang'],

                    ['Jeju', 'Gwangju'],
                    ['Jeju', 'Gunsan'],
                    ['Jeju', 'Wonju'],
                    ['Jeju', 'Yangyang'],
                    ['Jeju', 'Daegu'],
                    ['Jeju', 'Yeosu'],
                    ['Jeju', 'Sacheon'],
                    ['Jeju', 'Ulsan'],
                    ['Jeju', 'Busan'],
                    ['Jeju', 'Cheongju'],
                ],
                nodes: [
                    {
                        id: 'Seoul ICN',
                        marker: {
                            radius: 30,
                        },
                        color: mv21
                    },
                    {
                        id: 'Daegu',
                        marker: {
                            radius: 10,
                        },
                        color: mv22
                    },
                    {
                        id: 'Busan',
                        marker: {
                            radius: 30
                        },
                        color: mv23
                    },
                    {
                        id: 'Seoul GMP',
                        marker: {
                            radius: 20,
                        },
                        color: mv23
                    },
                    {
                        id: 'Jeju',
                        marker: {
                            radius: 30,
                        },
                        color: mv23
                    }, {
                        id: 'Gwangju',
                        marker: {
                            radius: 10,
                        },
                        color: mv23
                    }, {
                        id: 'Yeosu',
                        marker: {
                            radius: 10,
                        },
                        color: mv23
                    }, {
                        id: 'Sacheon',
                        marker: {
                            radius: 10,
                        },
                        color: mv23
                    }, {
                        id: 'Ulsan',
                        marker: {
                            radius: 10,
                        },
                        color: mv23
                    }, {
                        id: 'Pohang',
                        marker: {
                            radius: 20,
                        },
                        color: mv23
                    }, {
                        id: 'Gunsan',
                        marker: {
                            radius: 10,
                        },
                        color: mv23
                    }, {
                        id: 'Wonju',
                        marker: {
                            radius: 10,
                        },
                        color: mv23
                    }, {
                        id: 'Yangyang',
                        marker: {
                            radius: 10,
                        },
                        color: mv23
                    }, {
                        id: 'Cheongju',
                        marker: {
                            radius: 20,
                        },
                        color: mv23
                    },]
            }]
        });

    </script>

</footer>


</html>
