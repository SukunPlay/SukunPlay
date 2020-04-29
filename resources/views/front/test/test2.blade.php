<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SukunPlay</title>
    <link rel="icon" type="image/x-icon" href="{{asset('playbutton.svg')}}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        @font-face {
            font-family: MVAWAHEED;
            src: url('{{ asset('fonts/MVAWAHEED.TTF') }}');
        }

        @font-face {
            font-family: AAMUFKF;
            src: url('{{ asset('fonts/AAMMUFKF.TTF') }}');
        }

        .sdirm {
            direction: rtl;
            font-family: MVAWAHEED;
        }

        .sdira {
            direction: rtl;
            font-family: AAMUFKF;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    <script src="{{asset('js/app.js')}}"></script>

</head>
<div class="text-center">
    screen size:
    <p class="block sm:hidden md:hidden lg:hidden xl:hidden ">phone</p>
    <p class="hidden sm:block md:hidden lg:hidden xl:hidden ">small</p>
    <p class="hidden sm:hidden md:block lg:hidden xl:hidden ">medium</p>
    <p class="hidden sm:hidden md:hidden lg:block xl:hidden ">large</p>
    <p class="hidden sm:hidden md:hidden lg:hidden xl:block ">extra large</p>
</div>
<body class="">

<div class="block sm:block md:block lg:block xl:block">
    <section class="bg-sukun-official">
        <div class="container mx-auto px-10">
            <div class="flex sm:justify-center md:justify-between pb-4 pt-4">
                <div class="md:flex sm:hidden md:block rounded-full border-solid border hover:bg-sukungreen-200 focus:bg-sukungreen-200">
                    <div class="p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.555" height="21.555"
                             viewBox="0 0 21.555 21.555">
                            <g transform="translate(12.63 7.999)">
                                <path d="M300.421,190a.421.421,0,1,0,.421.421A.421.421,0,0,0,300.421,190Z"
                                      transform="translate(-300 -190)"
                                      fill="#FFFFFF"/>
                            </g>
                            <path
                                d="M21.061,18.68l-5.619-5.619a8.344,8.344,0,0,0,1.4-4.641,8.42,8.42,0,1,0-8.42,8.42,8.345,8.345,0,0,0,4.641-1.4L14.614,17h0l4.065,4.065a1.684,1.684,0,1,0,2.381-2.381Zm-8.2-4.125h0a7.585,7.585,0,1,1,1.692-1.692A7.614,7.614,0,0,1,12.863,14.555Zm.883.382a8.448,8.448,0,0,0,1.19-1.19l1.194,1.194a10.219,10.219,0,0,1-1.19,1.19Zm6.72,5.529a.841.841,0,0,1-1.19,0l-3.738-3.738a11.062,11.062,0,0,0,1.19-1.19l3.738,3.738a.841.841,0,0,1,0,1.19Z"
                                fill="#FFFFFF"/>
                            <g transform="translate(1.684 1.684)">
                                <path
                                    d="M46.736,40a6.736,6.736,0,1,0,6.736,6.736A6.743,6.743,0,0,0,46.736,40Zm0,12.63a5.894,5.894,0,1,1,5.894-5.894A5.9,5.9,0,0,1,46.736,52.63Z"
                                    transform="translate(-40 -40)" fill="#FFFFFF"/>
                            </g>
                            <g transform="translate(7.999 3.368)">
                                <path
                                    d="M195.139,83.245A5.06,5.06,0,0,0,190.421,80a.421.421,0,1,0,0,.842,4.239,4.239,0,0,1,3.932,2.7.421.421,0,1,0,.786-.3Z"
                                    transform="translate(-190 -80)" fill="#FFFFFF"/>
                            </g>
                        </svg>
                    </div>
                    <input placeholder="ހޯދާ" type="text"
                           class="rounded-full rounded-l-none bg-sukun-official text-white hover:bg-sukungreen-200 focus:outline-none focus:bg-sukungreen-200 placeholder-white"
                           style="direction: rtl; padding-right: 15px">
                </div>
                <img src="{{asset('logo.svg')}}" class="">
            </div>
        </div>
    </section>


    <section class="bg-white">

        <div class="container mx-auto px-10">

            <div class="flex block justify-center md:hidden">
                <div
                    class="flex mt-5 justify-center rounded-full border-solid border border-sukungreen-200 focus:shadow-lg"
                    style="">
                    <div class="p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.555" height="21.555"
                             viewBox="0 0 21.555 21.555">
                            <g transform="translate(12.63 7.999)">
                                <path d="M300.421,190a.421.421,0,1,0,.421.421A.421.421,0,0,0,300.421,190Z"
                                      transform="translate(-300 -190)"
                                      fill="#8CD790"/>
                            </g>
                            <path
                                d="M21.061,18.68l-5.619-5.619a8.344,8.344,0,0,0,1.4-4.641,8.42,8.42,0,1,0-8.42,8.42,8.345,8.345,0,0,0,4.641-1.4L14.614,17h0l4.065,4.065a1.684,1.684,0,1,0,2.381-2.381Zm-8.2-4.125h0a7.585,7.585,0,1,1,1.692-1.692A7.614,7.614,0,0,1,12.863,14.555Zm.883.382a8.448,8.448,0,0,0,1.19-1.19l1.194,1.194a10.219,10.219,0,0,1-1.19,1.19Zm6.72,5.529a.841.841,0,0,1-1.19,0l-3.738-3.738a11.062,11.062,0,0,0,1.19-1.19l3.738,3.738a.841.841,0,0,1,0,1.19Z"
                                fill="#8CD790"/>
                            <g transform="translate(1.684 1.684)">
                                <path
                                    d="M46.736,40a6.736,6.736,0,1,0,6.736,6.736A6.743,6.743,0,0,0,46.736,40Zm0,12.63a5.894,5.894,0,1,1,5.894-5.894A5.9,5.9,0,0,1,46.736,52.63Z"
                                    transform="translate(-40 -40)" fill="#8CD790"/>
                            </g>
                            <g transform="translate(7.999 3.368)">
                                <path
                                    d="M195.139,83.245A5.06,5.06,0,0,0,190.421,80a.421.421,0,1,0,0,.842,4.239,4.239,0,0,1,3.932,2.7.421.421,0,1,0,.786-.3Z"
                                    transform="translate(-190 -80)" fill="#8CD790"/>
                            </g>
                        </svg>
                    </div>
                    <input placeholder="ހޯދާ" type="text"
                           class="rounded-full rounded-l-none text-sukungreen-200 focus:outline-none placeholder-sukungreen-200 focus:shadow-md "
                           style="direction: rtl; padding-right: 15px">
                </div>

            </div>


            <div
                class="flex justify-between bg-gray-100 mt-10 pt-2 pb-2 pr-8 pl-8 text-sukungreen-600 items-center sdirm shadow sm:text-xs md:text-sm lg:text-base"
                style="">
                <div class="w-1/4 lg:text-2xl md:text-xl md:text-sm text-sm sdira" style="">
                    މިއަދުގެ ނަމާދު ވަގުތު
                </div>
                <div class="flex">
                    ފަތިސް
                    <div class="bg-white align-middle mr-2 rounded-sm" style="font-family: '.SF NS'">
                        <p class="pr-2 pl-2">19:34</p>
                    </div>
                </div>
                <div class="flex">
                    މެންދުރު
                    <div class="bg-white align-middle mr-2 rounded-sm" style="font-family: '.SF NS'">
                        <p class="pr-2 pl-2">19:34</p>
                    </div>
                </div>
                <div class="flex">
                    އަސުރު
                    <div class="bg-white align-middle mr-2 rounded-sm" style="font-family: '.SF NS'">
                        <p class="pr-2 pl-2">19:34</p>
                    </div>
                </div>
                <div class="flex">
                    މަޢްރިބު
                    <div class="bg-white align-middle mr-2 rounded-sm" style="font-family: '.SF NS'">
                        <p class="pr-2 pl-2">19:34</p>
                    </div>
                </div>
                <div class="flex">
                    އިޝާ
                    <div class="bg-white align-middle mr-2 rounded-sm" style="font-family: '.SF NS'">
                        <p class="pr-2 pl-2">19:34</p>
                    </div>
                </div>


            </div>

            <div class="flex pt-10">

                <div
                    class="flex w-4/6 lg:mr-8 md:mr-4 mr-4 border-t border-b border-sukungreen-300 sdirm items-center text-sukungreen-600 hover:text-sukungreen-300">

{{--                </div>--}}

{{--                <div class="w-1/6 flex lg:mr-8 md:mr-2 mr-2 align-middle items-center justify-center lg:p-1 md:p-0 p-0 ">--}}

                    <div
                        class="w-1/4 flex border border-sukungreen-300 bg-sukungreen-200 hover:bg-sukungreen-100 cursor-pointer text-sukungreen-600 hover:shadow-md">

                        <div style="" class="md:pt-2 pb-2 pr-1 pt-1 md:pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 54 54">
                                <g transform="translate(-19.76 -8.34)">
                                    <circle cx="27" cy="27" r="27" transform="translate(19.76 8.34)" fill="#fff"/>
                                    <circle cx="23.039" cy="23.039" r="23.039" transform="translate(23.721 12.301)"
                                            fill="#06a64f"/>
                                    <path d="M100.116,67.142,81.17,56.46V77.827Z" transform="translate(-40.585 -31.802)"
                                          fill="#fff"/>
                                </g>
                            </svg>

                        </div>

                        <div
                            class="md:mr-2 mr-1 md:pl-4 ml-1 md:pt-3 pt-2 md:pb-2 lg:text-sm xl:text-base md:text-xs sm:text-xs">
                            ހާއްސަ ވީޑިއޯ

                        </div>
                    </div>

                    <div class="lg:mr-5 md:mr-2 mr-2 lg:text-sm xl:text-base md:text-xs sm:text-xs">
                        <p style=""> ދިވެހިރފުރަތަމަ
                            ފަހަރަށް ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                    </div>

                </div>


                <div
                    class="flex w-2/6 border-t border-b border-sukungreen-300 justify-between items-center sdirm text-sukungreen-600 lg:text-sm xl:text-base md:text-xs sm:text-xs">
                    <div
                        class="bg-sukungreen-200 lg:pt-2 md:pt-1 pb-1 lg:mr-3 md:mr-1 lg:pr-2 md:pr-1 lg:pl-2 md:pl-1 p-1 rounded-sm cursor-not-allowed"
                        style="">
                        އެންމެ ފަހުގެ ވީޑިއޯ
                    </div>

                    <div
                        class="lg:pt-2 md:pt-1 pb-1 lg:mr-3 md:mr-1 lg:pr-2 md:pr-1 lg:pl-2 md:pl-1 p-1 hover:bg-gray-200 rounded-sm cursor-pointer hover:shadow-md">
                        އެންމެ މަޤުބޫލް
                    </div>

                    <a class="plg:pt-2 md:pt-1 pb-1 lg:mr-3 md:mr-1 lg:pr-2 md:pr-1 lg:pl-2 md:pl-1 p-1 hover:bg-gray-200 rounded-sm cursor-pointer hover:shadow-md"
                       href="#all">
                        ހުރިހާ ވީޑިއޯ
                    </a>


                </div>


            </div>

            <div class="flex mt-10 shadow-md">
                <div class="w-3/12 bg-cover bg-center xl:h-450 lg:h-360 md:h-260 h-220"
                     style=";
                         background-image: url('{{asset('vertical.jpg')}}')"></div>

                <div class="flex"> {{--this is where the link should be--}}
                    <div class="bg-cover bg-center xl:h-450 xl:w-450 lg:h-360 lg:w-360 md:w-260 md:h-260 w-220 h-220"
                         style=";
                         background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')"></div>


                    <div class="bg-gray-100 xl:h-450 xl:w-450 lg:h-360 lg:w-360 md:h-260 md:w-260 w-220 h-220" style="">

                        <div
                            class="border-t border-b ml-2 mr-2 md:ml-5 md:mr-5 lg:ml-10 lg:mr-10 lg:mt-10 mt-5 border-sukungreen-600 sdira text-md xl:text-4xl lg:text-2xl text-center justify-center text-sukungreen-600"
                            style="">
                            <p class="pt-3 pb-3 md:pt-5 md:pb-5" style="">އިގްތިސާދު ހީނަރުވެ ވަޒީފާ ގެއްލެމުންދާއިރު
                                ރައްޔިތުންނަށް ކުރާނީ ކޮން އަސަރެއް!</p>
                        </div>
                        <div
                            class="flex justify-between lg:ml-10 lg:mr-10 md:ml-5 ml-2 mr-2 md:mr-5 mt-2 sdirm text-gray-500 xl:text-sm lg:text-xs text-xs">
                            <div>
                                4 ދުވަސް ކުރިން
                            </div>

                            <div class="flex">
                                <div class="flex pr-2 text-center justify-center">
                                    <div>
                                        1000
                                    </div>
                                    <div class="pr-2" style="padding-top: 2px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12.871" height="12.355"
                                             viewBox="0 0 12.871 12.355">
                                            <g id="like" transform="translate(0.25 0.25)">
                                                <g id="Group_79" data-name="Group 79" transform="translate(0 0)">
                                                    <g id="Group_78" data-name="Group 78">
                                                        <path id="Path_30" data-name="Path 30"
                                                              d="M12.37,17.754a1.145,1.145,0,0,0-.336-.811,1.28,1.28,0,0,0,.33-.984,1.332,1.332,0,0,0-1.344-1.169H7.837a7.411,7.411,0,0,0,.41-2.062A2.107,2.107,0,0,0,6.7,10.667a1.619,1.619,0,0,0-.934.314.258.258,0,0,0-.1.2V12.93L4.185,16.146l-.061.031v-.1a.258.258,0,0,0-.258-.258H1.289A1.29,1.29,0,0,0,0,17.11v4.123a1.29,1.29,0,0,0,1.289,1.289H2.835a1.292,1.292,0,0,0,1.213-.852,3.36,3.36,0,0,0,1.364.337h4.731a1.186,1.186,0,0,0,1.168-.9,1.164,1.164,0,0,0-.093-.775,1.155,1.155,0,0,0,.516-1.546A1.155,1.155,0,0,0,12.37,17.754Zm-1.087.636a.258.258,0,0,0-.147.444.639.639,0,0,1-.367,1.1.258.258,0,0,0-.147.444.637.637,0,0,1,.187.615.667.667,0,0,1-.664.5H5.412a2.443,2.443,0,0,1-1.364-.44.258.258,0,0,0-.44.182.774.774,0,0,1-.773.773H1.289a.774.774,0,0,1-.773-.773V17.11a.774.774,0,0,1,.773-.773H3.608v.258a.259.259,0,0,0,.123.22.263.263,0,0,0,.251.011l.515-.258a.257.257,0,0,0,.119-.122l1.546-3.35a.263.263,0,0,0,.024-.108V11.322a1.087,1.087,0,0,1,.515-.14,1.7,1.7,0,0,1,1.031,1.546,8.026,8.026,0,0,1-.5,2.228.257.257,0,0,0,.241.349h3.547a.814.814,0,0,1,.831.7.77.77,0,0,1-.367.729.258.258,0,0,0,.018.449.638.638,0,0,1-.219,1.206Z"
                                                              transform="translate(0 -10.667)" fill="#718096"
                                                              stroke="#718096" stroke-width="0.5"/>
                                                    </g>
                                                </g>
                                                <g id="Group_81" data-name="Group 81" transform="translate(3.608 5.67)">
                                                    <g id="Group_80" data-name="Group 80">
                                                        <path id="Path_31" data-name="Path 31"
                                                              d="M149.591,245.333a.258.258,0,0,0-.258.258v4.639a.258.258,0,0,0,.515,0v-4.639A.258.258,0,0,0,149.591,245.333Z"
                                                              transform="translate(-149.333 -245.333)" fill="#718096"
                                                              stroke="#718096" stroke-width="0.5"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>

                                    </div>
                                </div>
                                <div class="flex pr-2 text-center justify-center">
                                    <p class="align-top" style="">2000</p>
                                    <div class="pr-2" style="padding-top: 3px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.724" height="11.297"
                                             viewBox="0 0 17.724 11.297">
                                            <g id="eye" transform="translate(0 -92.835)">
                                                <g id="Group_75" data-name="Group 75" transform="translate(0 92.835)">
                                                    <g id="Group_74" data-name="Group 74" transform="translate(0 0)">
                                                        <path id="Path_28" data-name="Path 28"
                                                              d="M17.612,98.139c-.158-.217-3.931-5.3-8.75-5.3s-8.592,5.087-8.75,5.3a.585.585,0,0,0,0,.69c.158.217,3.931,5.3,8.75,5.3s8.591-5.087,8.75-5.3A.584.584,0,0,0,17.612,98.139Zm-8.75,4.825c-3.549,0-6.624-3.376-7.534-4.48C2.237,97.378,5.305,94,8.862,94s6.623,3.376,7.534,4.48C15.487,99.589,12.419,102.963,8.862,102.963Z"
                                                              transform="translate(0 -92.835)" fill="#718096"/>
                                                    </g>
                                                </g>
                                                <g id="Group_77" data-name="Group 77"
                                                   transform="translate(5.356 94.978)">
                                                    <g id="Group_76" data-name="Group 76" transform="translate(0 0)">
                                                        <path id="Path_29" data-name="Path 29"
                                                              d="M158.228,154.725a3.506,3.506,0,1,0,3.506,3.506A3.51,3.51,0,0,0,158.228,154.725Zm0,5.843a2.337,2.337,0,1,1,2.337-2.337A2.34,2.34,0,0,1,158.228,160.568Z"
                                                              transform="translate(-154.722 -154.725)" fill="#718096"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>


                                </div>
                            </div>

                        </div>


                        <div
                            class="flex lg:ml-10 md:ml-5 lg:mr-10 md:mr-5 mr-2 pt-5 sdirm text-sukungreen-600 lg:text-base text-xs">
                            <div class="lg:pl-2 md:pl-1 pt-1">
                                ޝެއަރ ކުރެއްވުމަށް
                            </div>
                            <div class="pr-1">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                                         viewBox="0 0 24.824 24.824">
                                        <g transform="translate(0.75 0.75)">
                                            <rect width="23.324" height="23.324" rx="11.662"
                                                  transform="translate(0 0)" fill="none" stroke="#222221"
                                                  stroke-miterlimit="10" stroke-width="1.5"/>
                                            <g transform="translate(6.142 5.164)">
                                                <rect width="2.414" height="7.797"
                                                      transform="translate(0.232 3.898)" fill="#222221"/>
                                                <path
                                                    d="M327.3,193.734a1.439,1.439,0,1,0-1.427-1.439A1.434,1.434,0,0,0,327.3,193.734Z"
                                                    transform="translate(-325.874 -190.857)"
                                                    fill="#222221"/>
                                                <path
                                                    d="M335.024,200.772c0-1.1.5-1.749,1.47-1.749.888,0,1.315.627,1.315,1.749v4.093h2.4v-4.937c0-2.088-1.184-3.1-2.837-3.1a2.718,2.718,0,0,0-2.35,1.288v-1.05h-2.315v7.8h2.315Z"
                                                    transform="translate(-328.52 -193.17)" fill="#222221"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>

                            <div class="pr-1">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                                         viewBox="0 0 24.824 24.824">
                                        <g transform="translate(0.75 0.75)">
                                            <path
                                                d="M438.352,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,438.352,151.829Z"
                                                transform="translate(-426.69 -128.505)" fill="none"
                                                stroke="#222221" stroke-miterlimit="10" stroke-width="1.5"/>
                                            <g transform="translate(5.268 5.268)">
                                                <path
                                                    d="M441.68,138.253c1.707,0,1.91.007,2.584.037a3.542,3.542,0,0,1,1.187.221,2.114,2.114,0,0,1,1.213,1.213,3.542,3.542,0,0,1,.221,1.187c.031.675.037.877.037,2.584s-.007,1.91-.037,2.584a3.543,3.543,0,0,1-.221,1.188,2.113,2.113,0,0,1-1.213,1.213,3.531,3.531,0,0,1-1.187.22c-.675.031-.876.037-2.584.037s-1.91-.007-2.584-.037a3.536,3.536,0,0,1-1.188-.22,2.118,2.118,0,0,1-1.213-1.213,3.533,3.533,0,0,1-.22-1.188c-.031-.674-.037-.876-.037-2.584s.007-1.91.037-2.584a3.532,3.532,0,0,1,.22-1.187,2.118,2.118,0,0,1,1.213-1.213,3.547,3.547,0,0,1,1.188-.221c.674-.031.876-.037,2.584-.037m0-1.152c-1.737,0-1.954.008-2.636.039a4.7,4.7,0,0,0-1.552.3,3.27,3.27,0,0,0-1.87,1.87,4.682,4.682,0,0,0-.3,1.552c-.031.682-.039.9-.039,2.636s.007,1.954.039,2.636a4.682,4.682,0,0,0,.3,1.552,3.27,3.27,0,0,0,1.87,1.87,4.714,4.714,0,0,0,1.552.3c.682.031.9.038,2.636.038s1.954-.007,2.636-.038a4.714,4.714,0,0,0,1.552-.3,3.273,3.273,0,0,0,1.87-1.87,4.7,4.7,0,0,0,.3-1.552c.031-.682.039-.9.039-2.636s-.007-1.954-.039-2.636a4.7,4.7,0,0,0-.3-1.552,3.273,3.273,0,0,0-1.87-1.87,4.7,4.7,0,0,0-1.552-.3c-.682-.031-.9-.039-2.636-.039"
                                                    transform="translate(-435.286 -137.101)"
                                                    fill="#222221"/>
                                                <path
                                                    d="M443.645,142.178a3.283,3.283,0,1,0,3.283,3.283,3.284,3.284,0,0,0-3.283-3.283m0,5.415a2.131,2.131,0,1,1,2.131-2.131,2.131,2.131,0,0,1-2.131,2.131"
                                                    transform="translate(-437.251 -139.067)"
                                                    fill="#222221"/>
                                                <path
                                                    d="M451.572,141.481a.767.767,0,1,1-.767-.767.767.767,0,0,1,.767.767"
                                                    transform="translate(-440.998 -138.5)" fill="#222221"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="pr-1">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                                         viewBox="0 0 24.824 24.824">
                                        <g transform="translate(0.75 0.75)">
                                            <path
                                                d="M327.173,259.679h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,327.173,259.679Z"
                                                transform="translate(-315.511 -236.355)" fill="none"
                                                stroke="#222221" stroke-miterlimit="10" stroke-width="1.5"/>
                                            <g transform="translate(5.265 5.264)">
                                                <path
                                                    d="M336.894,251.02a6.282,6.282,0,0,0-12.552-.115c0,.091-.005.182-.005.273a6.186,6.186,0,0,0,.9,3.22l-1.132,3.343,3.478-1.105a6.289,6.289,0,0,0,9.315-5.457C336.9,251.126,336.9,251.073,336.894,251.02Zm-6.278,5.4a5.259,5.259,0,0,1-2.9-.867l-2.029.647.659-1.946a5.186,5.186,0,0,1-1.006-3.073,4.827,4.827,0,0,1,.026-.509,5.283,5.283,0,0,1,10.517.1c.012.135.018.27.018.409A5.266,5.266,0,0,1,330.616,256.418Z"
                                                    transform="translate(-324.103 -244.945)" fill="#222221"
                                                    fill-rule="evenodd"/>
                                                <path
                                                    d="M335.674,254.577c-.156-.077-.911-.447-1.052-.5s-.245-.077-.347.077-.4.5-.488.6-.18.115-.335.039a4.173,4.173,0,0,1-1.238-.759,4.546,4.546,0,0,1-.855-1.056c-.088-.153-.009-.235.067-.311s.153-.18.232-.268c.021-.026.038-.05.056-.074a1.691,1.691,0,0,0,.1-.182.277.277,0,0,0-.012-.268c-.039-.077-.347-.829-.477-1.135s-.256-.253-.347-.253-.191-.015-.294-.015a.57.57,0,0,0-.411.191,1.71,1.71,0,0,0-.538,1.277,1.935,1.935,0,0,0,.079.52,3.463,3.463,0,0,0,.55,1.058,6.324,6.324,0,0,0,2.629,2.308c1.567.609,1.567.406,1.849.379a1.537,1.537,0,0,0,1.037-.726,1.259,1.259,0,0,0,.091-.727C335.93,254.692,335.827,254.653,335.674,254.577Z"
                                                    transform="translate(-326.282 -247.085)" fill="#222221"
                                                    fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="pr-1">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                                         viewBox="0 0 24.824 24.824">
                                        <g transform="translate(0.75 0.75)">
                                            <rect width="23.324" height="23.324" rx="11.662"
                                                  transform="translate(0 0)" fill="none" stroke="#222221"
                                                  stroke-miterlimit="10" stroke-width="1.5"/>
                                            <path
                                                d="M386.153,150.131h2.839v-7.109h1.981l.211-2.38h-2.192v-1.356c0-.561.113-.783.656-.783h1.536v-2.47h-1.966c-2.112,0-3.065.93-3.065,2.711v1.9h-1.477v2.41h1.477Z"
                                                transform="translate(-376.268 -131.42)" fill="#222221"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="pr-1">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                                         viewBox="0 0 24.824 24.824">
                                        <g transform="translate(0.75 0.75)">
                                            <path
                                                d="M271.778,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,271.778,151.829Z"
                                                transform="translate(-260.116 -128.505)" fill="none"
                                                stroke="#222221" stroke-miterlimit="10" stroke-width="1.5"/>
                                            <path
                                                d="M269.007,148.25a7.252,7.252,0,0,0,11.156-6.439,5.168,5.168,0,0,0,1.272-1.32,5.086,5.086,0,0,1-1.464.4,2.553,2.553,0,0,0,1.121-1.411,5.115,5.115,0,0,1-1.618.619,2.552,2.552,0,0,0-4.345,2.326,7.235,7.235,0,0,1-5.255-2.664,2.553,2.553,0,0,0,.789,3.4,2.542,2.542,0,0,1-1.155-.319,2.553,2.553,0,0,0,2.045,2.533,2.552,2.552,0,0,1-1.151.043,2.551,2.551,0,0,0,2.381,1.771A5.127,5.127,0,0,1,269.007,148.25Z"
                                                transform="translate(-263.558 -132.683)" fill="#222221"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div
                            class="flex lg:ml-10 md:ml-5 lg:mr-10 md:mr-5 mr-2 ml-2 lg:pt-5 pt-2 sdirm text-sukungreen-600 ls:text-base text-xs">
                            <div class="pl-2 pt-1">
                                ލިންކު ކޮޕީކޮށްލައްވާ
                            </div>
                            <div class="focus:outline-none focus:shadow-lg select-all">
                                <input
                                    class="border select-all focus:shadow-md focus:outline-none rounded-none bg-gray-100 px-2 focus:bg-white"
                                    value="The link here">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="">
                <div class="flex -mx-2 justify-between flex-wrap" style="direction: rtl">
                    <div class=" px-2 pt-10">
                        <div
                            class="bg-cover bg-sukungreen-200 bg-center w-99 h-99 md:w-120 md:h-120 xl:h-56 xl:w-56 lg:w-40 lg:h-40 shadow-md text-center sdira"
                            style="">
                            <div
                                class="lg:pt-10 md:pt-8 pt-4 border-yellow-300 border-b-2 xl:mr-15 xl:ml-15 lg:mr-10 lg:ml-10 mr-5 ml-5 xl:text-xl lg:text-sm text-xs">
                                ރޯދަ ސްޕެޝަލް
                            </div>
                            <div class="xl:text-4xl lg:text-2xl">
                                އަޑުނީވޭ<br>
                                ވާހަކަތައް
                            </div>

                        </div>
                    </div>
                    <div class=" px-2 pt-10">
                        <div
                            class="bg-cover bg-center md:w-120 md:h-120 w-99 h-99 xl:h-56 xl:w-56 lg:w-40 lg:h-40 relative shadow-md"
                            style="
                             background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                            <div class="">
                                <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg lg:text-base text-xs"
                                   style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                    ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                            </div>
                        </div>
                    </div>
                    <div class=" px-2 pt-10">
                        <div
                            class="bg-cover bg-center xl:h-56 md:w-120 w-99 h-99 md:h-120 xl:w-56 lg:w-40 lg:h-40 relative shadow-md"
                            style="
                             background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                            <div class="">
                                <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg lg:text-base text-xs"
                                   style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                    ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                            </div>
                        </div>
                    </div>
                    <div class=" px-2 pt-10">
                        <div
                            class="bg-cover bg-cente xl:h-56 md:w-120 w-99 h-99 md:h-120 xl:w-56 lg:w-40 lg:h-40 relative shadow-md"
                            style="
                             background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                            <div class="">
                                <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg lg:text-base text-xs"
                                   style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                    ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                            </div>
                        </div>
                    </div>
                    <div class=" px-2 pt-10">
                        <div
                            class="bg-cover bg-center md:w-120 w-99 h-99 md:h-120 xl:h-56 xl:w-56 lg:w-40 lg:h-40 relative shadow-md"
                            style="
                             background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                            <div class="">
                                <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg lg:text-base text-xs"
                                   style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                    ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="bg-gray-100 mt-10 pb-10">
        <div class="container mx-auto px-10" id="all">

            <div class="sdirm pt-10">
                <h1 class="text-sukungreen-600 text-center" style="font-size: 25px">ހުރިހާ ވީޑިއޯ</h1>
            </div>


        </div>
    </section>


</div>


<section class="bg-sukunblack-200 pt-10">
    <div class="container mx-auto px-8 pb-8">
        <div class="flex justify-between sdirm text-white pr-4">
            <div>
                ހ. އޯލްވޭސް ހެޕީ ހައުސް، ފުރަތަމަ ފަންގިފިލާ، އަބަދަށް އުފާ ހިނގުން، 20038، މާލެ، ދިވެހިރާއްޖެ<br>
                ‫އީމެއިލް : editor@sukunplay.com<br>
                ‫މޯބައިލް : 9700200<br>
            </div>
            <div class="flex pt-4 pl-4">
                <div class="pr-1">
                    <a href="https://www.linkedin.com/company/31204848/admin/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                             viewBox="0 0 24.824 24.824">
                            <g transform="translate(-422.131 -1924.987)">
                                <rect width="23.324" height="23.324" rx="11.662"
                                      transform="translate(422.881 1925.737)"
                                      fill="rgba(255,255,255,0)" stroke="#fff" stroke-miterlimit="10"
                                      stroke-width="1.5"/>
                                <g transform="translate(429.024 1930.901)">
                                    <rect width="2.414" height="7.797" transform="translate(0.232 3.898)"
                                          fill="#fff"/>
                                    <path
                                        d="M327.3,193.734a1.439,1.439,0,1,0-1.427-1.439A1.434,1.434,0,0,0,327.3,193.734Z"
                                        transform="translate(-325.874 -190.857)" fill="#fff"/>
                                </g>
                                <path
                                    d="M335.024,200.772c0-1.1.5-1.749,1.47-1.749.888,0,1.315.627,1.315,1.749v4.093h2.4v-4.937c0-2.088-1.184-3.1-2.837-3.1a2.718,2.718,0,0,0-2.35,1.288v-1.05h-2.315v7.8h2.315Z"
                                    transform="translate(100.503 1737.731)" fill="#fff"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="pr-1">

                    <a href="https://www.instagram.com/sukunplay/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                             viewBox="0 0 24.824 24.824">
                            <g transform="translate(-449.095 -1924.987)">
                                <path
                                    d="M438.352,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,438.352,151.829Z"
                                    transform="translate(23.155 1797.232)" fill="none" stroke="#fff"
                                    stroke-miterlimit="10" stroke-width="1.5"/>
                                <path
                                    d="M441.68,138.253c1.707,0,1.91.007,2.584.037a3.542,3.542,0,0,1,1.187.221,2.114,2.114,0,0,1,1.213,1.213,3.542,3.542,0,0,1,.221,1.187c.031.675.037.877.037,2.584s-.007,1.91-.037,2.584a3.543,3.543,0,0,1-.221,1.188,2.113,2.113,0,0,1-1.213,1.213,3.531,3.531,0,0,1-1.187.22c-.675.031-.876.037-2.584.037s-1.91-.007-2.584-.037a3.536,3.536,0,0,1-1.188-.22,2.118,2.118,0,0,1-1.213-1.213,3.533,3.533,0,0,1-.22-1.188c-.031-.674-.037-.876-.037-2.584s.007-1.91.037-2.584a3.532,3.532,0,0,1,.22-1.187,2.118,2.118,0,0,1,1.213-1.213,3.547,3.547,0,0,1,1.188-.221c.674-.031.876-.037,2.584-.037m0-1.152c-1.737,0-1.954.008-2.636.039a4.7,4.7,0,0,0-1.552.3,3.27,3.27,0,0,0-1.87,1.87,4.682,4.682,0,0,0-.3,1.552c-.031.682-.039.9-.039,2.636s.007,1.954.039,2.636a4.682,4.682,0,0,0,.3,1.552,3.27,3.27,0,0,0,1.87,1.87,4.714,4.714,0,0,0,1.552.3c.682.031.9.038,2.636.038s1.954-.007,2.636-.038a4.714,4.714,0,0,0,1.552-.3,3.273,3.273,0,0,0,1.87-1.87,4.7,4.7,0,0,0,.3-1.552c.031-.682.039-.9.039-2.636s-.007-1.954-.039-2.636a4.7,4.7,0,0,0-.3-1.552,3.273,3.273,0,0,0-1.87-1.87,4.7,4.7,0,0,0-1.552-.3c-.682-.031-.9-.039-2.636-.039"
                                    transform="translate(19.827 1793.903)" fill="#fff"/>
                                <path
                                    d="M443.645,142.178a3.283,3.283,0,1,0,3.283,3.283,3.284,3.284,0,0,0-3.283-3.283m0,5.415a2.131,2.131,0,1,1,2.131-2.131,2.131,2.131,0,0,1-2.131,2.131"
                                    transform="translate(17.862 1791.938)" fill="#fff"/>
                                <path d="M451.572,141.481a.767.767,0,1,1-.767-.767.767.767,0,0,1,.767.767"
                                      transform="translate(14.115 1792.505)" fill="#fff"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="pr-1">

                    <a href="https://web.facebook.com/sukunplay/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                             viewBox="0 0 24.824 24.824">
                            <g transform="translate(-477.023 -1924.987)">
                                <rect width="23.324" height="23.324" rx="11.662"
                                      transform="translate(477.773 1925.737)"
                                      fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"/>
                                <path
                                    d="M386.153,150.131h2.839v-7.109h1.981l.211-2.38h-2.192v-1.356c0-.561.113-.783.656-.783h1.536v-2.47h-1.966c-2.112,0-3.065.93-3.065,2.711v1.9h-1.477v2.41h1.477Z"
                                    transform="translate(101.505 1794.317)" fill="#fff"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="pr-1">

                    <a href="https://twitter.com/sukunplay">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                             viewBox="0 0 24.824 24.824">
                            <g transform="translate(-503.987 -1924.987)">
                                <path
                                    d="M271.778,151.829h0a11.662,11.662,0,0,1-11.662-11.662h0a11.662,11.662,0,0,1,11.662-11.662h0a11.662,11.662,0,0,1,11.662,11.662h0A11.662,11.662,0,0,1,271.778,151.829Z"
                                    transform="translate(244.621 1797.232)" fill="none" stroke="#fff"
                                    stroke-miterlimit="10" stroke-width="1.5"/>
                                <path
                                    d="M269.007,148.25a7.252,7.252,0,0,0,11.156-6.439,5.168,5.168,0,0,0,1.272-1.32,5.086,5.086,0,0,1-1.464.4,2.553,2.553,0,0,0,1.121-1.411,5.115,5.115,0,0,1-1.618.619,2.552,2.552,0,0,0-4.345,2.326,7.235,7.235,0,0,1-5.255-2.664,2.553,2.553,0,0,0,.789,3.4,2.542,2.542,0,0,1-1.155-.319,2.553,2.553,0,0,0,2.045,2.533,2.552,2.552,0,0,1-1.151.043,2.551,2.551,0,0,0,2.381,1.771A5.127,5.127,0,0,1,269.007,148.25Z"
                                    transform="translate(241.178 1793.054)" fill="#fff"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="pr-1">

                    <a href="https://www.tiktok.com/@sukunplay">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.824" height="24.824"
                             viewBox="0 0 25.083 25.083">
                            <g id="Group_115" data-name="Group 115" transform="translate(-200.04 -722.04)">
                                <path id="Path_38" data-name="Path 38"
                                      d="M97.5,78.547v-.715H96.069v7.86a2.144,2.144,0,1,1-2.144-2.144h.715V82.119h-.715A3.573,3.573,0,1,0,97.5,85.692V81.4a3.55,3.55,0,0,0,2.144.721h.715V80.69h-.715A2.146,2.146,0,0,1,97.5,78.547Z"
                                      transform="translate(117.228 651.033)" fill="#fff"/>
                                <circle id="Ellipse_17" data-name="Ellipse 17" cx="11.791" cy="11.791" r="11.791"
                                        transform="translate(200.79 722.79)" fill="none" stroke="#fff"
                                        stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                        </svg>

                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
</body>
</html>
