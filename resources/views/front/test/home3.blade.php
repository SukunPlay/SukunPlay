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
        <section class="pt-4 pb-lg-5 pb-md-5 pb-sm-2" style="background-color: #FFFFFF">
            <div class="container justify-content-center hides-for-small pt-lg-4 pt-md-4 pt-sm-0 mb-0">
                <div class="justify-content-center d-flex pb-lg-5 pb-md-5 pb-sm-5 mb-4 mb-sm-4 mb-lg-0">
                    <h6 class="mb-0" style="font-family: MVAWAHEED; text-align: right; font-size: 25px">އެންމެ ފަހުގެ
                        ވީޑިއޯ</h6>
                </div>

            </div>

            <div class="container hides-for-large pr-2 pl-2">
                <div class="col-12 mb-2"
                     style="height: 68px;background-color: #d6ebff;padding-right:1rem;padding-left:1rem">
                </div>
            </div>

            <div class="container justify-content-center hides-for-large pt-3">
                <div class="justify-content-center d-flex pb-lg-5 pb-md-5 pb-sm-5 mb-4 mb-sm-4 mb-lg-0">
                    <h6 class="mb-0" style="font-family: MVAWAHEED; text-align: right; font-size: 25px">އެންމެ ފަހުގެ
                        ވީޑިއޯ</h6>
                </div>

            </div>


            <div class="container hides-for-large pr-4 pl-4 mb-0">
                <div class="row">
                    <div class="col-12" style="margin-bottom: 10px;padding-right:0.5rem;padding-left:0.5rem">
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

                    <div class="col-2 mb-2" style="">
                        <div src="" style="height: 100%; width: 200px; background-color:#D6EBFF ">

                        </div>

                    </div>

                    <div class="col-10 mb-2 pl-15">
                        <div class="card" style="border-radius: 0!important; box-shadow: none; background-color: #f1f1f1">
                            <div class="card-body p-0">
                                <div class="row no-gutters">
                                    <div class="videos col-7 col-md-12 col-lg-7">
                                        <a class="video">
                                            <span></span>
                                            <img
                                                src="{{\App\Facebook\Thumbnail::where('video_id','=',$return['sample']->fb_id)->first()->link}}"
                                                alt="My Awesome Video"/>
                                        </a>
                                    </div>
                                    <div class="col-5 p-4 col-md-12 col-lg-5">
                                        <hr style="border-width: 1px;display: block; border-color: black">
                                        <p class="pt-2"
                                           style="font-family: AAMUFKF; text-align: center;font-size: 1.7vw; color: #285943"
                                           id=""><b>{{$return['sample']->title}}</b></p>


                                        <div class="row pl-4 pt-0">
                                            <div class="col-2">
                                                <div class="align-content-center">
                                                    <div class="row">
                                                        <i class="far fa-eye"></i>
                                                        &nbsp;
                                                        <p style="font-size: 10px;">0</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="align-content-center">
                                                    <div class="row">
                                                        <i class="far fa-thumbs-up"></i>
                                                        &nbsp;
                                                        <p style="font-size: 10px;">0</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 pr-0 ">
                                                <p style="font-family: MVAWAHEED; font-size: 15px;text-align: right ;">
                                                    2020&#x202b;03&nbsp;މާރޗް&nbsp;</p>
                                            </div>
                                        </div>


                                        <hr style="border-width: 1px;display: block; border-color: black" class="mt-0">

                                        <div class="row pt-2">
                                            <div class="col-7" style="text-align: right; font-size: 1.5vh">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(0.75 0.75)"><rect width="23.324" height="23.324" rx="11.662" transform="translate(0 0)" fill="none" stroke="#222221" stroke-miterlimit="10" stroke-width="1.5"/><g transform="translate(6.142 5.164)"><rect width="2.414" height="7.797" transform="translate(0.232 3.898)" fill="#222221"/><path d="M327.3,193.734a1.439,1.439,0,1,0-1.427-1.439A1.434,1.434,0,0,0,327.3,193.734Z" transform="translate(-325.874 -190.857)" fill="#222221"/><path d="M335.024,200.772c0-1.1.5-1.749,1.47-1.749.888,0,1.315.627,1.315,1.749v4.093h2.4v-4.937c0-2.088-1.184-3.1-2.837-3.1a2.718,2.718,0,0,0-2.35,1.288v-1.05h-2.315v7.8h2.315Z" transform="translate(-328.52 -193.17)" fill="#222221"/></g></g></svg>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(0.75 0.75)"><path d="M438.352,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,438.352,151.829Z" transform="translate(-426.69 -128.505)" fill="none" stroke="#222221" stroke-miterlimit="10" stroke-width="1.5"/><g transform="translate(5.268 5.268)"><path d="M441.68,138.253c1.707,0,1.91.007,2.584.037a3.542,3.542,0,0,1,1.187.221,2.114,2.114,0,0,1,1.213,1.213,3.542,3.542,0,0,1,.221,1.187c.031.675.037.877.037,2.584s-.007,1.91-.037,2.584a3.543,3.543,0,0,1-.221,1.188,2.113,2.113,0,0,1-1.213,1.213,3.531,3.531,0,0,1-1.187.22c-.675.031-.876.037-2.584.037s-1.91-.007-2.584-.037a3.536,3.536,0,0,1-1.188-.22,2.118,2.118,0,0,1-1.213-1.213,3.533,3.533,0,0,1-.22-1.188c-.031-.674-.037-.876-.037-2.584s.007-1.91.037-2.584a3.532,3.532,0,0,1,.22-1.187,2.118,2.118,0,0,1,1.213-1.213,3.547,3.547,0,0,1,1.188-.221c.674-.031.876-.037,2.584-.037m0-1.152c-1.737,0-1.954.008-2.636.039a4.7,4.7,0,0,0-1.552.3,3.27,3.27,0,0,0-1.87,1.87,4.682,4.682,0,0,0-.3,1.552c-.031.682-.039.9-.039,2.636s.007,1.954.039,2.636a4.682,4.682,0,0,0,.3,1.552,3.27,3.27,0,0,0,1.87,1.87,4.714,4.714,0,0,0,1.552.3c.682.031.9.038,2.636.038s1.954-.007,2.636-.038a4.714,4.714,0,0,0,1.552-.3,3.273,3.273,0,0,0,1.87-1.87,4.7,4.7,0,0,0,.3-1.552c.031-.682.039-.9.039-2.636s-.007-1.954-.039-2.636a4.7,4.7,0,0,0-.3-1.552,3.273,3.273,0,0,0-1.87-1.87,4.7,4.7,0,0,0-1.552-.3c-.682-.031-.9-.039-2.636-.039" transform="translate(-435.286 -137.101)" fill="#222221"/><path d="M443.645,142.178a3.283,3.283,0,1,0,3.283,3.283,3.284,3.284,0,0,0-3.283-3.283m0,5.415a2.131,2.131,0,1,1,2.131-2.131,2.131,2.131,0,0,1-2.131,2.131" transform="translate(-437.251 -139.067)" fill="#222221"/><path d="M451.572,141.481a.767.767,0,1,1-.767-.767.767.767,0,0,1,.767.767" transform="translate(-440.998 -138.5)" fill="#222221"/></g></g></svg>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(0.75 0.75)"><path d="M327.173,259.679h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,327.173,259.679Z" transform="translate(-315.511 -236.355)" fill="none" stroke="#222221" stroke-miterlimit="10" stroke-width="1.5"/><g transform="translate(5.265 5.264)"><path d="M336.894,251.02a6.282,6.282,0,0,0-12.552-.115c0,.091-.005.182-.005.273a6.186,6.186,0,0,0,.9,3.22l-1.132,3.343,3.478-1.105a6.289,6.289,0,0,0,9.315-5.457C336.9,251.126,336.9,251.073,336.894,251.02Zm-6.278,5.4a5.259,5.259,0,0,1-2.9-.867l-2.029.647.659-1.946a5.186,5.186,0,0,1-1.006-3.073,4.827,4.827,0,0,1,.026-.509,5.283,5.283,0,0,1,10.517.1c.012.135.018.27.018.409A5.266,5.266,0,0,1,330.616,256.418Z" transform="translate(-324.103 -244.945)" fill="#222221" fill-rule="evenodd"/><path d="M335.674,254.577c-.156-.077-.911-.447-1.052-.5s-.245-.077-.347.077-.4.5-.488.6-.18.115-.335.039a4.173,4.173,0,0,1-1.238-.759,4.546,4.546,0,0,1-.855-1.056c-.088-.153-.009-.235.067-.311s.153-.18.232-.268c.021-.026.038-.05.056-.074a1.691,1.691,0,0,0,.1-.182.277.277,0,0,0-.012-.268c-.039-.077-.347-.829-.477-1.135s-.256-.253-.347-.253-.191-.015-.294-.015a.57.57,0,0,0-.411.191,1.71,1.71,0,0,0-.538,1.277,1.935,1.935,0,0,0,.079.52,3.463,3.463,0,0,0,.55,1.058,6.324,6.324,0,0,0,2.629,2.308c1.567.609,1.567.406,1.849.379a1.537,1.537,0,0,0,1.037-.726,1.259,1.259,0,0,0,.091-.727C335.93,254.692,335.827,254.653,335.674,254.577Z" transform="translate(-326.282 -247.085)" fill="#222221" fill-rule="evenodd"/></g></g></svg>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(0.75 0.75)"><rect width="23.324" height="23.324" rx="11.662" transform="translate(0 0)" fill="none" stroke="#222221" stroke-miterlimit="10" stroke-width="1.5"/><path d="M386.153,150.131h2.839v-7.109h1.981l.211-2.38h-2.192v-1.356c0-.561.113-.783.656-.783h1.536v-2.47h-1.966c-2.112,0-3.065.93-3.065,2.711v1.9h-1.477v2.41h1.477Z" transform="translate(-376.268 -131.42)" fill="#222221"/></g></svg>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(0.75 0.75)"><path d="M271.778,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,271.778,151.829Z" transform="translate(-260.116 -128.505)" fill="none" stroke="#222221" stroke-miterlimit="10" stroke-width="1.5"/><path d="M269.007,148.25a7.252,7.252,0,0,0,11.156-6.439,5.168,5.168,0,0,0,1.272-1.32,5.086,5.086,0,0,1-1.464.4,2.553,2.553,0,0,0,1.121-1.411,5.115,5.115,0,0,1-1.618.619,2.552,2.552,0,0,0-4.345,2.326,7.235,7.235,0,0,1-5.255-2.664,2.553,2.553,0,0,0,.789,3.4,2.542,2.542,0,0,1-1.155-.319,2.553,2.553,0,0,0,2.045,2.533,2.552,2.552,0,0,1-1.151.043,2.551,2.551,0,0,0,2.381,1.771A5.127,5.127,0,0,1,269.007,148.25Z" transform="translate(-263.558 -132.683)" fill="#222221"/></g></svg>
                                            </div>


                                            <div class="col-5" style="text-align: right">
                                                <p style="font-family: MVAWAHEED; font-size: 1.3vh;">ޝެއަރ
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
                                                       style="font-size:1vh ;border-radius: 5px; border-color: #009d33; border-style:solid; background-color: #FFFFFF; width:9vw ">

                                            </div>

                                            <div style="text-align: right" class="col-6">
                                                <p style="font-family: MVAWAHEED; font-size: 1.3vh;">ލިންކު ކޮޕީ
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
            <div class="container justify-content-center pt-3 pt-lg-5 pt-sm-3 pt-md-5 pb-3">
                <div class="justify-content-center d-flex">
                    <h6 class="mb-0" style="font-family: MVAWAHEED; text-align: right; font-size: 25px">ހުރިހާ ވީޑިއޯ</h6>
                </div>

            </div>
            <div class="container pt-lg-5 pt-md-5 pt-sm-3 pb-5 pr-4 pl-4">
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
                                                <p class="pt-5"
                                                   style="font-family: AAMUFKF; text-align: center;font-size: 2vw; color: #285943"
                                                   id="video_title"><b></b></p>


                                                <div class="row pl-4 pt-5">
                                                    <div class="col-2">
                                                        <div class="align-content-center">
                                                            <div class="row">
                                                                <i class="far fa-eye"></i>
                                                                &nbsp;
                                                                <p style="font-size: 10px;">0</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="align-content-center">
                                                            <div class="row">
                                                                <i class="far fa-thumbs-up"></i>
                                                                &nbsp;
                                                                <p style="font-size: 10px;">0</p>
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
        <footer class="footer pt-5 pb-4 mt-auto bg-dark footer-dark">
            <div class="container hides-for-small">
                <div class="row ">
                    <div class="col-6">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(-422.131 -1924.987)"><rect width="23.324" height="23.324" rx="11.662" transform="translate(422.881 1925.737)" fill="rgba(255,255,255,0)" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/><g transform="translate(429.024 1930.901)"><rect width="2.414" height="7.797" transform="translate(0.232 3.898)" fill="#fff"/><path d="M327.3,193.734a1.439,1.439,0,1,0-1.427-1.439A1.434,1.434,0,0,0,327.3,193.734Z" transform="translate(-325.874 -190.857)" fill="#fff"/></g><path d="M335.024,200.772c0-1.1.5-1.749,1.47-1.749.888,0,1.315.627,1.315,1.749v4.093h2.4v-4.937c0-2.088-1.184-3.1-2.837-3.1a2.718,2.718,0,0,0-2.35,1.288v-1.05h-2.315v7.8h2.315Z" transform="translate(100.503 1737.731)" fill="#fff"/></g></svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(-449.095 -1924.987)"><path d="M438.352,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,438.352,151.829Z" transform="translate(23.155 1797.232)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/><path d="M441.68,138.253c1.707,0,1.91.007,2.584.037a3.542,3.542,0,0,1,1.187.221,2.114,2.114,0,0,1,1.213,1.213,3.542,3.542,0,0,1,.221,1.187c.031.675.037.877.037,2.584s-.007,1.91-.037,2.584a3.543,3.543,0,0,1-.221,1.188,2.113,2.113,0,0,1-1.213,1.213,3.531,3.531,0,0,1-1.187.22c-.675.031-.876.037-2.584.037s-1.91-.007-2.584-.037a3.536,3.536,0,0,1-1.188-.22,2.118,2.118,0,0,1-1.213-1.213,3.533,3.533,0,0,1-.22-1.188c-.031-.674-.037-.876-.037-2.584s.007-1.91.037-2.584a3.532,3.532,0,0,1,.22-1.187,2.118,2.118,0,0,1,1.213-1.213,3.547,3.547,0,0,1,1.188-.221c.674-.031.876-.037,2.584-.037m0-1.152c-1.737,0-1.954.008-2.636.039a4.7,4.7,0,0,0-1.552.3,3.27,3.27,0,0,0-1.87,1.87,4.682,4.682,0,0,0-.3,1.552c-.031.682-.039.9-.039,2.636s.007,1.954.039,2.636a4.682,4.682,0,0,0,.3,1.552,3.27,3.27,0,0,0,1.87,1.87,4.714,4.714,0,0,0,1.552.3c.682.031.9.038,2.636.038s1.954-.007,2.636-.038a4.714,4.714,0,0,0,1.552-.3,3.273,3.273,0,0,0,1.87-1.87,4.7,4.7,0,0,0,.3-1.552c.031-.682.039-.9.039-2.636s-.007-1.954-.039-2.636a4.7,4.7,0,0,0-.3-1.552,3.273,3.273,0,0,0-1.87-1.87,4.7,4.7,0,0,0-1.552-.3c-.682-.031-.9-.039-2.636-.039" transform="translate(19.827 1793.903)" fill="#fff"/><path d="M443.645,142.178a3.283,3.283,0,1,0,3.283,3.283,3.284,3.284,0,0,0-3.283-3.283m0,5.415a2.131,2.131,0,1,1,2.131-2.131,2.131,2.131,0,0,1-2.131,2.131" transform="translate(17.862 1791.938)" fill="#fff"/><path d="M451.572,141.481a.767.767,0,1,1-.767-.767.767.767,0,0,1,.767.767" transform="translate(14.115 1792.505)" fill="#fff"/></g></svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(-477.023 -1924.987)"><rect width="23.324" height="23.324" rx="11.662" transform="translate(477.773 1925.737)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/><path d="M386.153,150.131h2.839v-7.109h1.981l.211-2.38h-2.192v-1.356c0-.561.113-.783.656-.783h1.536v-2.47h-1.966c-2.112,0-3.065.93-3.065,2.711v1.9h-1.477v2.41h1.477Z" transform="translate(101.505 1794.317)" fill="#fff"/></g></svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(-503.987 -1924.987)"><path d="M271.778,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,271.778,151.829Z" transform="translate(244.621 1797.232)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/><path d="M269.007,148.25a7.252,7.252,0,0,0,11.156-6.439,5.168,5.168,0,0,0,1.272-1.32,5.086,5.086,0,0,1-1.464.4,2.553,2.553,0,0,0,1.121-1.411,5.115,5.115,0,0,1-1.618.619,2.552,2.552,0,0,0-4.345,2.326,7.235,7.235,0,0,1-5.255-2.664,2.553,2.553,0,0,0,.789,3.4,2.542,2.542,0,0,1-1.155-.319,2.553,2.553,0,0,0,2.045,2.533,2.552,2.552,0,0,1-1.151.043,2.551,2.551,0,0,0,2.381,1.771A5.127,5.127,0,0,1,269.007,148.25Z" transform="translate(241.178 1793.054)" fill="#fff"/></g></svg>
                    </div>

                    <div class="col-6" style="text-align: right">
                        <p style="font-family: MVAWAHEED">ހ. އޯލްވޭސް ހެޕީ ހައުސް، ފުރަތަމަ ފަންގިފިލާ، އަބަދަށް އުފާ
                            ހިނގުން، 20038، މާލެ، ދިވެހިރާއްޖެ</p>
                        <p style="font-family: MVAWAHEED;"> &#x202b;އީމެއިލް :&nbsp;<a
                                href="mailto:editor@sukunplay.com">editor@sukunplay.com</a> &nbsp;</p>
                        <p style="font-family: MVAWAHEED;">&#x202b;މޯބައިލް :&nbsp;<a href="tel:9700200">9700200</a>
                            &nbsp;</p>

                    </div>

                </div>
            </div>

            <div class="container hides-for-large">
                <div class="row ">
                    <div class="col-12 pb-2" style="text-align: center">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(-422.131 -1924.987)"><rect width="23.324" height="23.324" rx="11.662" transform="translate(422.881 1925.737)" fill="rgba(255,255,255,0)" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/><g transform="translate(429.024 1930.901)"><rect width="2.414" height="7.797" transform="translate(0.232 3.898)" fill="#fff"/><path d="M327.3,193.734a1.439,1.439,0,1,0-1.427-1.439A1.434,1.434,0,0,0,327.3,193.734Z" transform="translate(-325.874 -190.857)" fill="#fff"/></g><path d="M335.024,200.772c0-1.1.5-1.749,1.47-1.749.888,0,1.315.627,1.315,1.749v4.093h2.4v-4.937c0-2.088-1.184-3.1-2.837-3.1a2.718,2.718,0,0,0-2.35,1.288v-1.05h-2.315v7.8h2.315Z" transform="translate(100.503 1737.731)" fill="#fff"/></g></svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(-449.095 -1924.987)"><path d="M438.352,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,438.352,151.829Z" transform="translate(23.155 1797.232)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/><path d="M441.68,138.253c1.707,0,1.91.007,2.584.037a3.542,3.542,0,0,1,1.187.221,2.114,2.114,0,0,1,1.213,1.213,3.542,3.542,0,0,1,.221,1.187c.031.675.037.877.037,2.584s-.007,1.91-.037,2.584a3.543,3.543,0,0,1-.221,1.188,2.113,2.113,0,0,1-1.213,1.213,3.531,3.531,0,0,1-1.187.22c-.675.031-.876.037-2.584.037s-1.91-.007-2.584-.037a3.536,3.536,0,0,1-1.188-.22,2.118,2.118,0,0,1-1.213-1.213,3.533,3.533,0,0,1-.22-1.188c-.031-.674-.037-.876-.037-2.584s.007-1.91.037-2.584a3.532,3.532,0,0,1,.22-1.187,2.118,2.118,0,0,1,1.213-1.213,3.547,3.547,0,0,1,1.188-.221c.674-.031.876-.037,2.584-.037m0-1.152c-1.737,0-1.954.008-2.636.039a4.7,4.7,0,0,0-1.552.3,3.27,3.27,0,0,0-1.87,1.87,4.682,4.682,0,0,0-.3,1.552c-.031.682-.039.9-.039,2.636s.007,1.954.039,2.636a4.682,4.682,0,0,0,.3,1.552,3.27,3.27,0,0,0,1.87,1.87,4.714,4.714,0,0,0,1.552.3c.682.031.9.038,2.636.038s1.954-.007,2.636-.038a4.714,4.714,0,0,0,1.552-.3,3.273,3.273,0,0,0,1.87-1.87,4.7,4.7,0,0,0,.3-1.552c.031-.682.039-.9.039-2.636s-.007-1.954-.039-2.636a4.7,4.7,0,0,0-.3-1.552,3.273,3.273,0,0,0-1.87-1.87,4.7,4.7,0,0,0-1.552-.3c-.682-.031-.9-.039-2.636-.039" transform="translate(19.827 1793.903)" fill="#fff"/><path d="M443.645,142.178a3.283,3.283,0,1,0,3.283,3.283,3.284,3.284,0,0,0-3.283-3.283m0,5.415a2.131,2.131,0,1,1,2.131-2.131,2.131,2.131,0,0,1-2.131,2.131" transform="translate(17.862 1791.938)" fill="#fff"/><path d="M451.572,141.481a.767.767,0,1,1-.767-.767.767.767,0,0,1,.767.767" transform="translate(14.115 1792.505)" fill="#fff"/></g></svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(-477.023 -1924.987)"><rect width="23.324" height="23.324" rx="11.662" transform="translate(477.773 1925.737)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/><path d="M386.153,150.131h2.839v-7.109h1.981l.211-2.38h-2.192v-1.356c0-.561.113-.783.656-.783h1.536v-2.47h-1.966c-2.112,0-3.065.93-3.065,2.711v1.9h-1.477v2.41h1.477Z" transform="translate(101.505 1794.317)" fill="#fff"/></g></svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824" viewBox="0 0 24.824 24.824"><g transform="translate(-503.987 -1924.987)"><path d="M271.778,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,271.778,151.829Z" transform="translate(244.621 1797.232)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/><path d="M269.007,148.25a7.252,7.252,0,0,0,11.156-6.439,5.168,5.168,0,0,0,1.272-1.32,5.086,5.086,0,0,1-1.464.4,2.553,2.553,0,0,0,1.121-1.411,5.115,5.115,0,0,1-1.618.619,2.552,2.552,0,0,0-4.345,2.326,7.235,7.235,0,0,1-5.255-2.664,2.553,2.553,0,0,0,.789,3.4,2.542,2.542,0,0,1-1.155-.319,2.553,2.553,0,0,0,2.045,2.533,2.552,2.552,0,0,1-1.151.043,2.551,2.551,0,0,0,2.381,1.771A5.127,5.127,0,0,1,269.007,148.25Z" transform="translate(241.178 1793.054)" fill="#fff"/></g></svg>

                    </div>

                    <div class="col-12" style="text-align: center">
                        <p style="font-family: MVAWAHEED">ހ. އޯލްވޭސް ހެޕީ ހައުސް، ފުރަތަމަ ފަންގިފިލާ، އަބަދަށް އުފާ
                            ހިނގުން، 20038، މާލެ، ދިވެހިރާއްޖެ</p>
                        <p style="font-family: MVAWAHEED;"> &#x202b;އީމެއިލް :&nbsp;<a
                                href="mailto:editor@sukunplay.com">editor@sukunplay.com</a> &nbsp;</p>
                        <p style="font-family: MVAWAHEED;">&#x202b;މޯބައިލް :&nbsp;<a href="tel:9700200">9700200</a>
                            &nbsp;</p>
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
