<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{$return['sample']->title}}" />
    <meta name="author" content="SukunPlay" />
    <meta name="image" property="image" content="{{asset('desc.jpg')}}">
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Sukun Play">
    <meta itemprop="description" content="{{$return['sample']->title}}">
    <meta itemprop="image" content="{{asset('desc.jpg')}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://www.sukunplay.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sukun Play">
    <meta property="og:description" content="{{$return['sample']->title}}">
    <meta property="og:image" content="{{asset('desc.jpg')}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sukun Play">
    <meta name="twitter:description" content="{{$return['sample']->title}}">
    <meta name="twitter:image" content="{{asset('desc.jpg')}}">


    <title>Sukun Play</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="{{asset('fawesome/all.min.css')}}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.jpg')}}" />
    {{ csrf_field() }}

    <script type="text/javascript" src="{{asset('fawesome/all.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
</head>
<body>

@yield('body')
</body>
</html>
