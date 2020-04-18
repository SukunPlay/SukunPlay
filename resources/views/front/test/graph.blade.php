<html>

<head>

    <script src="{{asset('graph/highcharts.js')}}"></script>
    <script src="{{asset('graph/networkgraph.js')}}"></script>

    <style>
        #container {
            min-width: 320px;
            max-width: 800px;
            margin: 0 auto;
            height: 500px;
        }
    </style>


</head>

<body>
<div id="container"></div>

</body>

<footer>
    <script>
        var celticColor = "#7becb2",
            italicColor = "#ecb27b",
            indoIranianColor = "#ec7bb6";

        Highcharts.chart('container', {

            chart: {
                type: 'networkgraph',
                marginTop: 80
            },

            title: {
                text: 'Covid19 Maldives Contact Tracing'
            },

            subtitle: {
                text: 'Based on information made public by HPA'
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
                    allowOverlap: true
                },
                data: [
                    ['MAV021', 'MAV022'],
                    ['MAV021', 'MAV023'],
                    ['MAV023', 'MAV024'],
                    ['MAV023', 'MAV025'],
                    ['MAV023', 'MAV026'],
                    ['MAV027', 'MAV029'],
                    ['MAV027', 'MAV030'],


                ],
                nodes: [
                    {
                        id: 'MAV021',
                        color: "pink"
                    },
                    {
                        id: 'MAV027',
                        color: "pink"
                    },

                ]
            }]
        });

    </script>

</footer>


</html>
