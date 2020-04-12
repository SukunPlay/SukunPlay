<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="{{$return['sample']->title}}"/>
    <meta name="author" content="SukunPlay"/>
    <meta name="image" property="image" content="{{$return['desc']}}">
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Sukun Play">
    <meta itemprop="description" content="{{$return['sample']->title}}">
    <meta itemprop="image" content="{{$return['desc']}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://www.sukunplay.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sukun Play">
    <meta property="og:description" content="{{$return['sample']->title}}">
    <meta property="og:image" content="{{$return['desc']}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sukun Play">
    <meta name="twitter:description" content="{{$return['sample']->title}}">
    <meta name="twitter:image" content="{{$return['desc']}}">


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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('fawesome/all.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jtk-4.2.1.pack.js"></script>
</head>
<body>

@yield('body')
</body>
</html>
