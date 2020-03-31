<!DOCTYPE html>
<html lang="en">

<head>


        <meta charset="UTF-8">
        <title>Sukun Play - Videos</title>

        <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://unpkg.com/bootstrap@4.0.0/dist/css/bootstrap.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'><link rel="stylesheet" href="{{asset('vidoes/style.css')}}">




    @yield('head')
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">


    @yield('content')


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->



@include('particles.foot')

<!-- Core plugin JavaScript-->
<script src='https://unpkg.com/jquery@3.3.1/dist/jquery.js'></script>
<script src='https://unpkg.com/popper.js@1.12.9/dist/umd/popper.js'></script>
<script src='https://unpkg.com/bootstrap@4.0.0/dist/js/bootstrap.js'></script><script  src="{{asset('vidoes/script.js')}}"></script>

@yield('js')
</body>

</html>
