<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
                height: auto;
                width: 150%;
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
                width: 250%;
                /* Link to your background image using in the property below! */
                /* background: scroll center url('https://video.xx.fbcdn.net/v/t42.9040-2/85253716_2946183178749344_2585852319744655360_n.mp4?_nc_cat=101&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6InN2ZV9zZCJ9&_nc_eui2=AeFsiFiW3lvV37Ao1f85usz3Mtc8sKYYRaf9Ngf2pQLiRIzefJyUQ9UN0qoCbgoxteaGapkOi-S4Ho1EYY2AyfMHrZOCzanx7RGzy1k3LfSgVg&_nc_oc=AQnjX6GAd9QqtwAjTpVvzr_r-ecoycPywVOnAj4kO6xPeUcqEK_jRgXgn9iHLQwoSSw&_nc_ht=video.fmle2-1.fna&oh=166882c7225d5d58f8ae93227f9565b8&oe=5E515652');*/
                background-size: cover;
            }

            .card-signin .card-body {
                width: 200%;
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

            .holder {
                width: 560px;
                height: 315px;
                position: relative;
            }

            .frame {
                width: 100%;
                height: 100%;
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 560%;
                height: 315px;
                cursor: pointer;
                background-color: none;
            }


        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .vid{
                border-radius: 3px 3px 0px 0px;
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .vid{
                border-radius: 3px 3px 0px 0px;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            .vid{
                border-radius: 3px 0px 0px 3px;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .vid{
                border-radius: 3px 0px 0px 3px;
            }
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            .vid{
                border-radius: 3px 0px 0px 3px;
            }
        }




        </style>
    </head>

    <body>


    <div class="container">
        <div class="row" >

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 " data-toggle="modal" data-target="#myModal" data-whatever="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311" >
                <video controls autoplay loop muted width="100%" height="100%" >
                    <source  src="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">
                </video>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 " data-toggle="modal" data-target="#myModal" data-whatever="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311" >
                <video controls autoplay loop muted width="100%" height="100%" >
                    <source  src="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">
                </video>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 " data-toggle="modal" data-target="#myModal" data-whatever="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311" >
                <video controls autoplay loop muted width="100%" height="100%" >
                    <source  src="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">
                </video>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 " data-toggle="modal" data-target="#myModal" data-whatever="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311" >
                <video controls autoplay loop muted width="100%" height="100%" >
                    <source  src="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">
                </video>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 " data-toggle="modal" data-target="#myModal" data-whatever="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311" >
                <video controls autoplay loop muted width="100%" height="100%" >
                    <source  src="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">
                </video>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 " data-toggle="modal" data-target="#myModal" data-whatever="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311" >
                <video controls autoplay loop muted width="100%" height="100%" >
                    <source  src="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">
                </video>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 " data-toggle="modal" data-target="#myModal" data-whatever="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311" >
                <video controls autoplay loop muted width="100%" height="100%" >
                    <source  src="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">
                </video>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 " data-toggle="modal" data-target="#myModal" data-whatever="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311" >
                <video controls autoplay loop muted width="100%" height="100%" >
                    <source  src="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">
                </video>
            </div>



        </div>

        

     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color:transparent; border:none;">

        <div class="card  my-5 " style="border:none;">
            <div class="row no-gutters">
              <div class="col-md-6" style="margine-left:-1px">
                <video controls autoplay loop muted width="100%" height="100%" class="sukun vid" style="margin-bottom:-6px;" >
                    <source src="" >
                        Your browser does not support the video tag.
                </video>
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">SUKUN</h5>
                  <p class="card-text">
                      SUKUN
                   </p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          

        </div>

      </div>
      
    </div>
  </div>
    </body>

<script>


$('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)

  var video = document.getElementsByClassName('sukun');
   video[0].src = recipient;
   video[0].play();

})

    $(document).ready(function() {
        autoPlayYouTubeModal();
    });

    function autoPlayYouTubeModal() {
        var trigger = $('.trigger');
        trigger.click(function(e) {
            e.preventDefault();
            var theModal = $(this).data("target");
            var videoSRC = $(this).attr("src");
            var videoSRCauto = videoSRC + "?autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal).on('hidden.bs.modal', function(e) {
                $(theModal + ' iframe').attr('src', '');
            });
        });
    };

</script>
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
