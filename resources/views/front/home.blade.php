@extends('front.app')

@section('body')
    <style type="text/css">
        .right-to-left-saidey {
            direction: rtl;
        }


        @font-face {
            font-family: MVAWAHEED;
            src: url('{{ asset('fonts/MVAWAHEED.TTF') }}');
        }

        @font-face {
            font-family: AAMUFKF;
            src: url('{{ asset('fonts/AAMMUFKF.TTF') }}');
        }

    </style>
<div id="layoutDefault">
    <div id="layoutDefault_content">
        <main>
            <nav class="navbar navbar-marketing navbar-expand-lg bg-white navbar-light">
                <div class="container justify-content-end">
                    <a class="navbar-brand text-dark" href="#">SukunPlay</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
{{--                    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                        <ul class="navbar-nav ml-auto mr-lg-5">--}}
{{--                            <li class="nav-item"><a class="nav-link" href="index.html">Home </a></li>--}}
{{--                            <li class="nav-item dropdown dropdown-xl no-caret">--}}
{{--                                <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings<i class="fas fa-chevron-right dropdown-arrow"></i></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up mr-lg-n15" aria-labelledby="navbarDropdownDemos">--}}
{{--                                    <div class="row no-gutters">--}}
{{--                                        <div class="col-lg-5 p-lg-3 bg-img-cover overlay overlay-primary overlay-70 d-none d-lg-block" style='background-image: url("https://source.unsplash.com/mqO0Rf-PUMs/500x350")'>--}}
{{--                                            <div class="d-flex h-100 w-100 align-items-center justify-content-center">--}}
{{--                                                <div class="text-white text-center z-1">--}}
{{--                                                    <div class="mb-3">Multipurpose landing pages for a variety of projects.</div>--}}
{{--                                                    <a class="btn btn-white btn-sm text-primary rounded-pill" href="index.html">View All</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-7 p-lg-5">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-lg-6">--}}
{{--                                                    <h6 class="dropdown-header text-primary">Applications</h6>--}}
{{--                                                    <a class="dropdown-item" href="landing-app-mobile.html">Mobile App</a><a class="dropdown-item" href="landing-app-desktop.html">Desktop App</a>--}}
{{--                                                    <div class="dropdown-divider border-0"></div>--}}
{{--                                                    <h6 class="dropdown-header text-primary">Business</h6>--}}
{{--                                                    <a class="dropdown-item" href="landing-multipurpose.html">Multipurpose</a><a class="dropdown-item" href="landing-agency.html">Agency</a><a class="dropdown-item" href="landing-press.html">Press</a><a class="dropdown-item" href="landing-directory.html">Directory</a><a class="dropdown-item" href="landing-rental.html">Rental</a><a class="dropdown-item" href="landing-real-estate.html">Real Estate</a><a class="dropdown-item" href="landing-classifieds.html">Classifieds</a>--}}
{{--                                                    <div class="dropdown-divider border-0"></div>--}}
{{--                                                    <h6 class="dropdown-header text-primary">Lead Generation</h6>--}}
{{--                                                    <a class="dropdown-item" href="landing-lead-capture.html">Lead Capture</a>--}}
{{--                                                    <div class="dropdown-divider border-0 d-lg-none"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-6">--}}
{{--                                                    <h6 class="dropdown-header text-primary">Personal</h6>--}}
{{--                                                    <a class="dropdown-item" href="landing-resume.html">Resume</a><a class="dropdown-item" href="landing-portfolio.html">Portfolio</a>--}}
{{--                                                    <div class="dropdown-divider border-0"></div>--}}
{{--                                                    <h6 class="dropdown-header text-primary">Header Styles</h6>--}}
{{--                                                    <a class="dropdown-item" href="header-basic.html">Basic</a><a class="dropdown-item" href="header-basic-signup.html">Basic (Signup)</a><a class="dropdown-item" href="header-graphic.html">Graphic</a><a class="dropdown-item" href="header-graphic-signup.html">Graphic (Signup)</a><a class="dropdown-item" href="header-inner-page.html">Inner Page</a><a class="dropdown-item" href="header-nav-only.html">Nav Only</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item dropdown dropdown-lg no-caret">--}}
{{--                                <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages<i class="fas fa-chevron-right dropdown-arrow"></i></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="navbarDropdownPages">--}}
{{--                                    <div class="row no-gutters">--}}
{{--                                        <div class="col-lg-6 p-lg-5">--}}
{{--                                            <h6 class="dropdown-header text-primary">Company</h6>--}}
{{--                                            <a class="dropdown-item" href="page-basic.html">Basic Page</a><a class="dropdown-item" href="page-company-about.html">About</a><a class="dropdown-item" href="page-company-pricing.html">Pricing</a><a class="dropdown-item" href="page-company-contact.html">Contact</a><a class="dropdown-item" href="page-company-terms.html">Terms</a>--}}
{{--                                            <div class="dropdown-divider border-0"></div>--}}
{{--                                            <h6 class="dropdown-header text-primary">Support</h6>--}}
{{--                                            <a class="dropdown-item" href="page-help-center.html">Help Center</a><a class="dropdown-item" href="page-help-knowledgebase.html">Knowledgebase</a><a class="dropdown-item" href="page-help-message-center.html">Message Center</a><a class="dropdown-item" href="page-help-support-ticket.html">Support Ticket</a>--}}
{{--                                            <div class="dropdown-divider border-0 d-lg-none"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6 p-lg-5">--}}
{{--                                            <h6 class="dropdown-header text-primary">Careers</h6>--}}
{{--                                            <a class="dropdown-item" href="page-careers-overview.html">Careers List</a><a class="dropdown-item" href="page-careers-listing.html">Position Details</a>--}}
{{--                                            <div class="dropdown-divider border-0"></div>--}}
{{--                                            <h6 class="dropdown-header text-primary">Blog</h6>--}}
{{--                                            <a class="dropdown-item" href="page-blog-overview.html">Overview</a><a class="dropdown-item" href="page-blog-post.html">Post</a><a class="dropdown-item" href="page-blog-archive.html">Archive</a>--}}
{{--                                            <div class="dropdown-divider border-0"></div>--}}
{{--                                            <h6 class="dropdown-header text-primary">Portfolio</h6>--}}
{{--                                            <a class="dropdown-item" href="page-portfolio-grid.html">Grid</a><a class="dropdown-item" href="page-portfolio-large-grid.html">Large Grid</a><a class="dropdown-item" href="page-portfolio-masonry.html">Masonry</a><a class="dropdown-item" href="page-portfolio-case-study.html">Case Study</a><a class="dropdown-item" href="page-portfolio-project.html">Project</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item dropdown no-caret">--}}
{{--                                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation<i class="fas fa-chevron-right dropdown-arrow"></i></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="navbarDropdownDocs">--}}
{{--                                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/quickstart" target="_blank"--}}
{{--                                    ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-book-open"></i></div>--}}
{{--                                        <div>--}}
{{--                                            <div class="small text-gray-500">Documentation</div>--}}
{{--                                            Usage instructions and reference--}}
{{--                                        </div></a--}}
{{--                                    >--}}
{{--                                    <div class="dropdown-divider m-0"></div>--}}
{{--                                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/components" target="_blank"--}}
{{--                                    ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-code"></i></div>--}}
{{--                                        <div>--}}
{{--                                            <div class="small text-gray-500">Components</div>--}}
{{--                                            Code snippets and reference--}}
{{--                                        </div></a--}}
{{--                                    >--}}
{{--                                    <div class="dropdown-divider m-0"></div>--}}
{{--                                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/changelog" target="_blank"--}}
{{--                                    ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-file"></i></div>--}}
{{--                                        <div>--}}
{{--                                            <div class="small text-gray-500">Changelog</div>--}}
{{--                                            Updates and changes--}}
{{--                                        </div></a--}}
{{--                                    >--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <a class="btn-teal btn rounded-pill px-4 ml-lg-4" href="https://shop.startbootstrap.com/sb-ui-kit-pro">Buy Now<i class="fas fa-arrow-right ml-1"></i></a>--}}
{{--                    </div>--}}

                </div>
            </nav>
            <section class="bg-light py-5">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-end">
                        <h6 class="mb-0" style="font-family: MVAWAHEED; text-align: right; font-size: 40px" >އެންމެ ފަހުގެ ޙަބަރު</h6>

                    </div>
                    <hr class="mb-4" />
                    <div class="card mb-4"
                        data-toggle="modal"
                    data-target="#myModal"
                    data-url="{{$return['sample']->link}}"
                    data-id="{{$return['sample']->fb_id}}">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6 align-self-stretch bg-img-cover  d-lg-flex" style='background-image: url("{{\App\Facebook\Thumbnail::where('video_id','=', $return['sample']->fb_id)->first()->link}}");height: 400px'></div>
                                <div class="col-lg-6 p-5 ">
                                    <a class="text-dark" href="#!" style="font-family: MVAWAHEED; text-align: right"><h1>{{$return['sample']->title}}</h1></a>
                                    <p class="text "style="font-family: AAMUFKF; text-align: right">{{$return['sample']->desc}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <h6 class="mb-0" style="font-family: MVAWAHEED; text-align: right;font-size: 40px" > ހުރިހާ ޙަބަރެއް</h6>

                    </div>
                    <hr class="mb-4" />

                    <div class="row" id="post_data">


                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-xl">

                                <!-- Modal content-->
                                <div class="modal-content" style="background-color:transparent; border:none">

                                    <div class="card  my-5 " style="border-radius: 20px;border:none">
                                        <div class="row no-gutters">
                                            <div class="col-12 col-md-12 col-lg-8 col-xl-8" style="margine-left:-1px;">
                                                <video controls autoplay loop muted width="100%" height="100%" class="sukun vid"
                                                       style="margin-bottom:-6px;border-top-left-radius: 20px;border-bottom-left-radius: 20px">
                                                    <source src="">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                                                    <button type="button" class="btn btn-default align-content-end" data-dismiss="modal">X</button>
                                                <div class="card-body">
                                                    <h5 class="card-title" id="video_title"></h5>
                                                    <p class="card-text" id="video_desc">

                                                    </p>
                                                    <p class="card-text"><small class="text-muted" id="video_created_at"></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>


{{--                        End--}}





{{--                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 " data-toggle="modal" data-target="#myModal"--}}
{{--                             data-url="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">--}}

{{--                            <div>--}}
{{--                                <video controls loop muted width="100%" height="100%">--}}
{{--                                    <source--}}
{{--                                        src="https://video.xx.fbcdn.net/v/t39.24130-2/88450143_501684670543807_6166085097344109706_n.mp4?_nc_cat=100&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_oc=AQk9IAt9SCAzeougqGzDjFC9-enLs_YhaJWfBinpT8mVnDwAlPy4YqKyzwE_9EQNSrE&_nc_ht=video.xx&oh=ca501e3e6d0592695fcbcbae45d7fcc8&oe=5E935311">--}}
{{--                                </video>--}}
{{--                                <div>--}}

{{--                                    <h5 style="font-weight: bold">Some titel</h5>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

                    </div>
                </div>


            </section>
        </main>
    </div>
    <div id="layoutDefault_footer">
        <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand">Sukun Play</div>
                        <div class="mb-3">tag line</div>
                        <div class="icon-list-social mb-5">
                            <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-instagram"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-facebook"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-github"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                </div>
                <hr class="my-5" />
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
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script>


    $(document).ready(function(){

        var _token = $('input[name="_token"]').val();

        load_data('', _token);

        function load_data(id="", _token)
        {
            $.ajax({
                url:"/loadmore/aload_more",
                method:"POST",
                data:{id:id, _token:_token},
                success:function(data)
                {
                    $('#load_more_button').remove();
                    $('#post_data').append(data);
                }
            })
        }

        $(document).on('click', '#load_more_button', function(){
            var id = $(this).data('id');
            $('#load_more_button').html('<b>Loading...</b>');
            load_data(id, _token);
        });

    });



    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var url = button.data('url');

        var xid = button.data('xid');

        // load info

        $.ajax({url: "/video/info/"+xid, success: function(result){



                $('#video_title').html(result.title);
                $('#video_desc').html(result.desc);
                $('#video_created_at').html("last updated "+ result.diffz)

            }});





        var video = document.getElementsByClassName('sukun');
        video[0].src = url;
        video[0].play();

    }).on('hide.bs.modal', function(e) {

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
