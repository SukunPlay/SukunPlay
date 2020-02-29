<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">

        <!-- Styles -->
        <style>

            :root {
                --input-padding-x: 1.5rem;
                --input-padding-y: .75rem;
            }

            body {
                background: #007bff;
                background: linear-gradient(to right, #0062E6, #33AEFF);
            }

            .card-signin {
                border: 0;
                border-radius: 1rem;
                box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
                overflow: hidden;
            }

            .card-signin .card-title {
                margin-bottom: 2rem;
                font-weight: 300;
                font-size: 1.5rem;
            }

            .card-signin .card-img-left {
                width: 60%;
                /* Link to your background image using in the property below! */
                /* background: scroll center url('https://video.xx.fbcdn.net/v/t42.9040-2/85253716_2946183178749344_2585852319744655360_n.mp4?_nc_cat=101&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6InN2ZV9zZCJ9&_nc_eui2=AeFsiFiW3lvV37Ao1f85usz3Mtc8sKYYRaf9Ngf2pQLiRIzefJyUQ9UN0qoCbgoxteaGapkOi-S4Ho1EYY2AyfMHrZOCzanx7RGzy1k3LfSgVg&_nc_oc=AQnjX6GAd9QqtwAjTpVvzr_r-ecoycPywVOnAj4kO6xPeUcqEK_jRgXgn9iHLQwoSSw&_nc_ht=video.fmle2-1.fna&oh=166882c7225d5d58f8ae93227f9565b8&oe=5E515652');*/
                background-size: cover;
            }

            .card-signin .card-body {
                padding: 2rem;
            }

            .form-signin {
                width: 100%;
            }

            .form-signin .btn {
                font-size: 80%;
                border-radius: 5rem;
                letter-spacing: .1rem;
                font-weight: bold;
                padding: 1rem;
                transition: all 0.2s;
            }

            .form-label-group {
                position: relative;
                margin-bottom: 1rem;
            }

            .form-label-group input {
                height: auto;
                border-radius: 2rem;
            }

            .form-label-group>input,
            .form-label-group>label {
                padding: var(--input-padding-y) var(--input-padding-x);
            }

            .form-label-group>label {
                position: absolute;
                top: 0;
                left: 0;
                display: block;
                width: 100%;
                margin-bottom: 0;
                /* Override default `<label>` margin */
                line-height: 1.5;
                color: #495057;
                border: 1px solid transparent;
                border-radius: .25rem;
                transition: all .1s ease-in-out;
            }

            .form-label-group input::-webkit-input-placeholder {
                color: transparent;
            }

            .form-label-group input:-ms-input-placeholder {
                color: transparent;
            }

            .form-label-group input::-ms-input-placeholder {
                color: transparent;
            }

            .form-label-group input::-moz-placeholder {
                color: transparent;
            }

            .form-label-group input::placeholder {
                color: transparent;
            }

            .form-label-group input:not(:placeholder-shown) {
                padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
                padding-bottom: calc(var(--input-padding-y) / 3);
            }

            .form-label-group input:not(:placeholder-shown)~label {
                padding-top: calc(var(--input-padding-y) / 3);
                padding-bottom: calc(var(--input-padding-y) / 3);
                font-size: 12px;
                color: #777;
            }

            .btn-google {
                color: white;
                background-color: #ea4335;
            }

            .btn-facebook {
                color: white;
                background-color: #3b5998;
            }



        </style>
    </head>
    <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

    <body>


    <fb:login-button
        scope="public_profile,email"
        onlogin="checkLoginState();">
    </fb:login-button>

    <script>

        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }
    </script>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row my-5">
                  <div class="card-img-left d-none d-md-flex">


                    <!-- Background image for card set in CSS! -->
                    <!--       <img src="https://source.unsplash.com/WEQbe2jBg40/414x512" class="xcard-img-left d-none d-md-flex" > -->

{{--                    <div class="card-img-left d-none d-md-flex">--}}

                    <video controls autoplay loop muted width="100%" height="100%" >
                        <source  src="{{$return['item']->link}}">
                    </video>


{{--                    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fweb.facebook.com%2Fsukunplay%2Fvideos%2F186831332635851%2F&width=500&show_text=false&appId=1564301706925810&height=500" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>--}}
                   </div>
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title text-center">Register</h5>--}}
{{--                        <form class="form-signin">--}}
{{--                            <div class="form-label-group">--}}
{{--                                <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>--}}
{{--                                <label for="inputUserame">Username</label>--}}
{{--                            </div>--}}




{{--                              <div class="form-label-group">--}}
{{--                                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>--}}
{{--                                <label for="inputConfirmPassword">Confirm password</label>--}}
{{--                              </div>--}}

{{--                              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>--}}
{{--                              <a class="d-block text-center mt-2 small" href="#">Sign In</a>--}}
{{--                              <hr class="my-4">--}}
{{--                              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>--}}
{{--                              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button> --}}
{{--                        </form>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    </body>


    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '2568340536820063',
                cookie     : true,
                xfbml      : true,
                version    : 'v2.2'
            });

            FB.AppEvents.logPageView();

        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
</html>
