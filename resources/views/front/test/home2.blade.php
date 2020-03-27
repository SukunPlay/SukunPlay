@extends('front.app')

@section('body')
    <style type="text/css">
        .right-to-left-saidey {
            direction: rtl;
        }

        .hides-for-small {
            display: none;
        }

        @font-face {
            font-family: MVAWAHEED;
            src: url('{{ asset('fonts/MVAWAHEED.TTF') }}');
        }

        @font-face {
            font-family: AAMUFKF;
            src: url('{{ asset('fonts/AAMMUFKF.TTF') }}');
        }

        .videos img {
            width: 100%;
            height: auto;
        }

        a.video {
            float: left;
            position: relative;
        }

        a.video span {
            width: 100%;
            height: 100%;
            position: absolute;
            background: url({{asset('logo2.png')}}) no-repeat;
            background-position: 50% 50%;
            background-size: 20%;
        }

        /* Smartphones (portrait and landscape) ----------- */
        @media only screen
        and (min-device-width: 320px)
        and (max-device-width: 480px) {
            /* Styles */
        }

        /* Smartphones (landscape) ----------- */
        @media only screen
        and (min-width: 321px) {
            /* Styles */
        }

        /* Smartphones (portrait) ----------- */
        @media only screen
        and (max-width: 375px) {

            /* Styles */
        }

        /* iPads (portrait and landscape) ----------- */
        @media only screen
        and (min-device-width: 768px)
        and (max-device-width: 1024px) {
            /* Styles */
        }

        /* iPads (landscape) ----------- */
        @media only screen
        and (min-device-width: 768px)
        and (max-device-width: 1024px)
        and (orientation: landscape) {
            /* Styles */
        }

        /* iPads (portrait) ----------- */
        @media only screen
        and (min-device-width: 768px)
        and (max-device-width: 1024px)
        and (orientation: portrait) {
            /* Styles */
        }

        /* Desktops and laptops ----------- */
        @media only screen
        and (min-width: 1224px) {
            /* Styles */
            .hides-for-small {
                display: inherit;
            }

            .hides-for-large {
                display: none;
            }

        }

        /* Large screens ----------- */
        @media only screen
        and (min-width: 1824px) {
            /* Styles */
            .hides-for-small {
                display: inherit;
            }

            .hides-for-large {
                display: none;
            }
        }

        /* iPhone 4 ----------- */
        @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5) {
            /* Styles */
        }
    </style>




    <main>
        <nav class="navbar navbar-marketing navbar-expand-lg navbar-light"
             style="background-color: #00A651; height: 68px">
            <div class="container justify-content-center">
                <img src="{{asset('logo.svg')}}" height="24.53px">
            </div>

        </nav>
        <section class="pt-4" style="background-color: #FFFFFF">
            <div class="container col-12 pr-15 pl-15">
                <div class="d-flex align-items-center justify-content-center pb-5">
                    <h6 class="mb-0" style="font-family: AAMUFKF; text-align: right; font-size: 25px">އެންމެ ފަހުގެ
                        ވީޑިއޯ</h6>
                </div>
            </div>


            <div class=" pl-15 pr-15 mb-2">
                <div class="" style="height: 100px; background-color: #D6EBFF">
                </div>
            </div>

            <div class="row pr-15 pl-15">

                <div class="col-6">
                    <div class="card mb-4 mt-5" style="border-radius: 0!important;">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6 align-self-stretch bg-img-cover d-none d-lg-flex"
                                     style='background-image: url({{\App\Facebook\Thumbnail::where('video_id','=',$return['sample']->fb_id)->first()->link}});'></div>
                                <div class="col-lg-6 p-5">
                                    <a class="badge badge-marketing badge-primary-soft badge-pill text-primary mb-3"
                                       href="#!">Web</a><a class="text-dark" href="#!"><h1>News companies post headline
                                            about creating new websites with powerful UI kits</h1></a>
                                    <p>When creating and developing startups, using a UI kit to bootstrap your companies
                                        website can be an extremely efficient way to save time, money, and runway.</p>
                                    <a class="text-arrow-icon small" href="#!">Read more<i
                                            data-feather="arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card mb-4 mt-5" style="border-radius: 0!important;">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6 align-self-stretch bg-img-cover d-none d-lg-flex"
                                     style='background-image: url({{\App\Facebook\Thumbnail::where('video_id','=',$return['sample']->fb_id)->first()->link}});'></div>
                                <div class="col-lg-6 p-5">
                                    <a class="badge badge-marketing badge-primary-soft badge-pill text-primary mb-3"
                                       href="#!">Web</a><a class="text-dark" href="#!"><h1>News companies post headline
                                            about creating new websites with powerful UI kits</h1></a>
                                    <p>When creating and developing startups, using a UI kit to bootstrap your companies
                                        website can be an extremely efficient way to save time, money, and runway.</p>
                                    <a class="text-arrow-icon small" href="#!">Read more<i
                                            data-feather="arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            {{--                        <img--}}
            {{--                            src="{{\App\Facebook\Thumbnail::where('video_id','=',$return['sample']->fb_id)->first()->link}}"--}}
            {{--                            style="height: 97%; width: 100%">--}}


        </section>
        <section class="bg-light ">
            <div class="container p-4 p-lg-15 col-12">
                <div class="row" id="post_data">


                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-xl">

                            <!-- Modal content-->
                            <div class="modal-content" style="background-color:transparent; border:none">

                                <div class="card my-5 " style="border-radius: 0px;border:none">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-12 col-lg-8 col-xl-8"
                                             style="margine-left:-1px;">
                                            <video controls autoplay loop muted width="100%" height="100%"
                                                   class="sukun vid"
                                                   style="margin-bottom:-6px;">
                                                <source src="">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                            <button type="button" class="btn btn-default align-content-end"
                                                    data-dismiss="modal"><i class="far fa-window-close fa-3x"
                                                                            style="position: fixed; top: 1em; right: 1em; color: white"></i>
                                            </button>
                                            <div class="card-body">
                                                <p class="text-dark"
                                                   style="font-family: AAMUFKF; text-align: right;font-size: 40px"
                                                   id="video_title"><b></b></p>
                                                <p class="card-text"
                                                   style="font-family: MVAWAHEED; text-align: right;font-size: 20px"
                                                   id="video_desc">

                                                </p>
                                                <p class="card-text" style="text-align: right"><small
                                                        class="text-muted" id="video_created_at"
                                                        style="text-align: right"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>
            </div>


        </section>
    </main>

    <div id="layoutDefault_footer">
        <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand">Sukun Play</div>
                        <div class="mb-3">tag line</div>
                        <div class="icon-list-social mb-5">
                            <a class="icon-list-social-link" href="javascript:void(0);"><i
                                    class="fab fa-instagram"></i></a><a class="icon-list-social-link"
                                                                        href="javascript:void(0);"><i
                                    class="fab fa-facebook"></i></a><a class="icon-list-social-link"
                                                                       href="javascript:void(0);"><i
                                    class="fab fa-github"></i></a><a class="icon-list-social-link"
                                                                     href="javascript:void(0);"><i
                                    class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                </div>
                <hr class="my-5"/>
                <div class="row align-items-center">
                    <div class="col-md-6 small">Copyright &copy; Sukun 2020 | Developed by Deploy</div>
                    <div class="col-md-6 text-md-right small">
                        <a href="javascript:void(0);">Privacy Policy</a>
                        &middot;
                        <a href="javascript:void(0);">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script>


        $(document).ready(function () {

            var _token = $('input[name="_token"]').val();

            load_data('', _token);

            function load_data(id = "", _token) {
                $.ajax({
                    url: "/loadmore/aload_more",
                    method: "POST",
                    data: {id: id, _token: _token},
                    success: function (data) {
                        $('#load_more').remove();
                        $('#post_data').append(data);
                    }
                })
            }

            $(document).on('click', '#load_more_button', function () {
                var id = $(this).data('id');
                $('#load_more_button').html('<b style="font-family: MVAWAHEED; font-size: 30px"> . . . ލޯޑު ވަނީ</b>');
                load_data(id, _token);
            });

        });


        $('#myModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var url = button.data('url');

            var xid = button.data('xid');

            // load info

            $.ajax({
                url: "/video/info/" + xid, success: function (result) {


                    $('#video_title').html(result.title);
                    $('#video_desc').html(result.desc);
                    $('#video_created_at').html("last updated " + result.diffz)

                }
            });


            var video = document.getElementsByClassName('sukun');
            video[0].src = url;
            video[0].play();

        }).on('hide.bs.modal', function (e) {

            var video = document.getElementsByClassName('sukun');
            video[0].src = '';
            video[0].play();
        });


        $(document).ready(function () {
            autoPlayYouTubeModal();
        });

        function autoPlayYouTubeModal() {
            var trigger = $('.trigger');
            trigger.click(function (e) {
                e.preventDefault();
                var theModal = $(this).data("target");
                var videoSRC = $(this).attr("src");
                var videoSRCauto = videoSRC + "?autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal).on('hidden.bs.modal', function (e) {
                    $(theModal + ' iframe').attr('src', '');
                });
            });
        };

    </script>

@endsection
