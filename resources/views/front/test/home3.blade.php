@extends('front.app')

@section('body')
    <style type="text/css">
        .right-to-left-saidey {
            direction: rtl;
        }

        .hides-for-small {
            display: none;
        }

        .hides-for-medium {
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
            background: url({{asset('playbutton.svg')}}) no-repeat;
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
        and (min-width: 768px) {
            /* Styles */
            .hides-for-small {
                display: inherit;
            }

            .hides-for-large {
                display: none;
            }

        }


        /*@media only screen*/
        /*and (min-width: 1200px) {*/
        /*    !* Styles *!*/
        /*    .hides-for-medium {*/
        /*        display: inherit;*/
        /*    }*/

        /*    .hides-for-large {*/
        /*        display: none;*/
        /*    }*/

        /*}*/

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


        .vertical-alignment-helper {
            display: table;
            height: 100%;
            width: 100%;
            pointer-events: none;
        }

        .vertical-align-center {
            /* To center vertically */
            display: table-cell;
            vertical-align: middle;
            pointer-events: none;
        }

        .modal-contentz {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width: inherit;
            max-width: inherit; /* For Bootstrap 4 - to avoid the modal window stretching full width */
            height: inherit;
            /* To center horizontally */
            margin: 0 auto;
            pointer-events: all;
        }
    </style>




    <main>
        <nav class="navbar navbar-marketing navbar-expand-lg navbar-light"
             style="background-color: #00A651; height: 68px">
            <div class="container justify-content-center">
                <img src="{{asset('logo.svg')}}" height="24.53px">
            </div>

        </nav>
        <section class="pt-4 pb-5" style="background-color: #FFFFFF">
            <div class="container justify-content-center pt-4">
                <div class="justify-content-center d-flex pb-5">
                    <h6 class="mb-0" style="font-family: AAMUFKF; text-align: right; font-size: 25px">އެންމެ ފަހުގެ
                        ވީޑިއޯ</h6>
                </div>

            </div>

            <div class="container hides-for-large pr-2 pl-2">
                <div class="col-12 mb-2"
                     style="height: 68px;background-color: #d6ebff;padding-right:1rem;padding-left:1rem">
                </div>
            </div>


            <div class="container hides-for-large pr-4 pl-4">
                <div class="row">
                    <div class="col-12" style="margin-bottom: 50px;padding-right:0.5rem;padding-left:0.5rem">
                        <div class="card"
                             style="border-radius: 0!important;"
                             data-toggle="modal"
                             data-target="#myModal"
                             data-url=""
                             data-xid="">

                            <div class="videos">
                                <a class="video">
                                    <span></span>
                                    <img
                                        src="{{\App\Facebook\Thumbnail::where('video_id','=',$return['sample']->fb_id)->first()->link}}"
                                        alt="My Awesome Video"/>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <div class="container hides-for-small p-0">
                <div class="row">

                    <div class="col-1 mb-2" style="">
                        <div src="" style="height: 100%; width: 150px; background-color:#D6EBFF ">

                        </div>

                    </div>

                    <div class="col-11 mb-2 pl-15">
                        <div class="card" style="border-radius: 0!important;">
                            <div class="card-body p-0">
                                <div class="row no-gutters">
                                    <div class="videos col-6">
                                        <a class="video">
                                            <span></span>
                                            <img
                                                src="{{\App\Facebook\Thumbnail::where('video_id','=',$return['sample']->fb_id)->first()->link}}"
                                                alt="My Awesome Video"/>
                                        </a>
                                    </div>
                                    <div class="col-6 p-4">
                                        <hr style="border-width: 1px;display: block; border-color: black">
                                        <p class="text-dark pt-3"
                                           style="font-family: AAMUFKF; text-align: right;font-size: 2vw"
                                           id=""><b>{{$return['sample']->title}}</b></p>


                                        <div class="row pl-4 pt-3">
                                            <div class="col-2">
                                                <div class="align-content-center">
                                                    <div class="row">
                                                        <i class="far fa-eye"></i>
                                                        &nbsp;
                                                        <p style="font-size: 10px;">2.5k</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="align-content-center">
                                                    <div class="row">
                                                        <i class="far fa-thumbs-up"></i>
                                                        &nbsp;
                                                        <p style="font-size: 10px;">2.5k</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 pr-0">
                                                <p style="font-family: MVAWAHEED; font-size: 15px; float: right; direction: rtl">
                                                    2020&#x202b;03&nbsp;މާރޗް&nbsp;</p>
                                            </div>
                                        </div>


                                        <hr style="border-width: 1px;display: block; border-color: black" class="mt-0">
                                        <div style="background-color: #d6ebff; height: 68px" class="mt-2">
                                        </div>
                                        <div class="row pt-4">
                                            <div class="col-7" style="text-align: right; font-size: 1.6vh">

                                                <i class="fab fa-linkedin"></i>

                                                <i class="fab fa-instagram"></i>

                                                <i class="fab fa-whatsapp"></i>

                                                <i class="fab fa-viber"></i>

                                                <i class="fab fa-facebook"></i>

                                                <i class="fab fa-twitter"></i>

                                            </div>


                                            <div class="col-5" style="text-align: right">
                                                <p style="font-family: MVAWAHEED; font-size: 1.32vh;">ޝެއަރ
                                                    ކުރެއްވުމަށް</p>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-2 pr-0" style="text-align: right">
                                                <button style="border:none; background-color: #ffffff"><i
                                                        class="far fa-copy" onclick="copyToClipboard()"></i>
                                                </button>

                                            </div>
                                            <div class="col-4 pl-0">
                                                <input type="text"
                                                       value="test copy lol"
                                                       disabled id="textToCopy"
                                                       style="font-size:1.32vh ;border-radius: 5px; border-color: #009d33; border-style:solid; background-color: #FFFFFF; width:10vw ">

                                            </div>

                                            <div style="text-align: right" class="col-6">
                                                <p style="font-family: MVAWAHEED; font-size: 1.32vh;">ލިންކު ކޮޕީ
                                                    ކޮށްލައްވާ</p>
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
        <section class="" style="background-color: #f2f2f2">
            <div class="container justify-content-center pt-5">
                <div class="justify-content-center d-flex">
                    <h6 class="mb-0" style="font-family: AAMUFKF; text-align: right; font-size: 25px">ހުރިހާ ވީޑިއޯ</h6>
                </div>

            </div>
            <div class="container pt-5 pb-5 pr-4 pl-4">
                <div class="row" id="post_data">


                    <div class="modal fade pt-5" id="myModal" role="dialog" style="">
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
                                                    data-dismiss="modal"><i
                                                    style="position: fixed; top: 1em; right: 1em; color: white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.622"
                                                         height="18.622" viewBox="0 0 18.622 18.622">
                                                        <g id="cancel" transform="translate(-8 -8)">
                                                            <path id="Path_35" data-name="Path 35"
                                                                  d="M17.311,8a9.311,9.311,0,1,0,9.311,9.311A9.321,9.321,0,0,0,17.311,8Zm0,17.07a7.759,7.759,0,1,1,7.759-7.759A7.768,7.768,0,0,1,17.311,25.07Z"
                                                                  transform="translate(0 0)" fill="#fff"/>
                                                            <path id="Path_36" data-name="Path 36"
                                                                  d="M29.98,24.227a.776.776,0,0,0-1.1,0L27.1,26.007l-1.779-1.779a.776.776,0,0,0-1.1,1.1L26.007,27.1l-1.779,1.779a.776.776,0,1,0,1.1,1.1L27.1,28.2l1.779,1.779a.776.776,0,0,0,1.1-1.1L28.2,27.1l1.779-1.779A.776.776,0,0,0,29.98,24.227Z"
                                                                  transform="translate(-9.793 -9.793)" fill="#fff"/>
                                                        </g>
                                                    </svg>
                                                </i>
                                            </button>
                                            <div class="card-body pt-0 pb-0">
                                                <hr style="border-width: 1px;display: block; border-color: black">
                                                <p class="text-dark pt-5"
                                                   style="font-family: AAMUFKF; text-align: right;font-size: 2vw"
                                                   id="video_title"><b></b></p>


                                                <div class="row pl-4 pt-5">
                                                    <div class="col-2">
                                                        <div class="align-content-center">
                                                            <div class="row">
                                                                <i class="far fa-eye"></i>
                                                                &nbsp;
                                                                <p style="font-size: 10px;">2.5k</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="align-content-center">
                                                            <div class="row">
                                                                <i class="far fa-thumbs-up"></i>
                                                                &nbsp;
                                                                <p style="font-size: 10px;">2.5k</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 pr-0">
                                                        <p style="font-family: MVAWAHEED; font-size: 15px; float: right; direction: rtl">
                                                            2020&#x202b;03&nbsp;މާރޗް&nbsp;</p>
                                                    </div>
                                                </div>


                                                <hr style="border-width: 1px;display: block; border-color: black"
                                                    class="mt-0">
                                                <div style="background-color: #d6ebff; height: 68px" class="mt-2">
                                                </div>
                                                <div class="row pt-4">
                                                    <div class="col-7" style="text-align: right; font-size: 1.6vh">

                                                        <i class="fab fa-linkedin"></i>

                                                        <i class="fab fa-instagram"></i>

                                                        <i class="fab fa-whatsapp"></i>

                                                        <i class="fab fa-viber"></i>

                                                        <i class="fab fa-facebook"></i>

                                                        <i class="fab fa-twitter"></i>

                                                    </div>


                                                    <div class="col-5" style="text-align: right">
                                                        <p style="font-family: MVAWAHEED; font-size: 1.32vh;">ޝެއަރ
                                                            ކުރެއްވުމަށް</p>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-2 pr-0" style="text-align: right">
                                                        <button style="border:none; background-color: #ffffff"><i
                                                                class="far fa-copy" onclick="copyToClipboard()"></i>
                                                        </button>

                                                    </div>
                                                    <div class="col-4 pl-0">
                                                        <input type="text"
                                                               value="test copy lol"
                                                               disabled id="textToCopy"
                                                               style="font-size:1.32vh ;border-radius: 5px; border-color: #009d33; border-style:solid; background-color: #FFFFFF; width:10vw ">

                                                    </div>

                                                    <div style="text-align: right" class="col-6">
                                                        <p style="font-family: MVAWAHEED; font-size: 1.32vh;">ލިންކު
                                                            ކޮޕީ
                                                            ކޮށްލައްވާ</p>
                                                    </div>


                                                </div>

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
        <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark" >
            <div class="container hides-for-small">
                <div class="row ">
                    <div class="col-6">
                        <i class="fab fa-linkedin"></i>

                        <i class="fab fa-instagram"></i>

                        <i class="fab fa-whatsapp"></i>

                        <i class="fab fa-viber"></i>

                        <i class="fab fa-facebook"></i>

                        <i class="fab fa-twitter"></i>
                    </div>

                    <div class="col-6" style="text-align: right">
                        <p style="font-family: MVAWAHEED">ހ. އޯލްވޭސް ހެޕީ ހައުސް، ފުރަތަމަ ފަންގިފިލާ، އަބަދަށް އުފާ ހިނގުން، 20038، މާލެ، ދިވެހިރާއްޖެ</p>
                        <p style="font-family: MVAWAHEED;"> &#x202b;އީމެއިލް :&nbsp;<a href="mailto:editor@sukunplay.com">editor@sukunplay.com</a> &nbsp;</p>
                        <p style="font-family: MVAWAHEED;">&#x202b;މޯބައިލް :&nbsp;<a href="tel:9700200">9700200</a> &nbsp;</p>

                    </div>

                </div>
            </div>

            <div class="container hides-for-large">
                <div class="row ">
                    <div class="col-12" style="text-align: center">
                        az
                    </div>

                    <div class="col-12" style="text-align: center">
                        bz
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
                $('#load_more_button').html('<b style="font-family: MVAWAHEED; font-size: 15px"> . . . ލޯޑު ވަނީ</b>');
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

        function copyToClipboard() {

            var copyText = document.getElementById("textToCopy");

            copyText.select();
            copyText.setSelectionRange(0, 99999);


            document.execCommand("copy");

            alert("Link Copied to Clipboard");
        }

    </script>

@endsection
