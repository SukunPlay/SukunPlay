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
            <div class="flex justify-between pb-4 pt-4">
                <div class="flex rounded-full border-solid border hover:bg-sukungreen-200 focus:bg-sukungreen-200">
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
            <div
                class="flex justify-between bg-gray-100 mt-10 pt-2 pb-2 pr-8 pl-8 text-sukungreen-600 items-center sdirm shadow"
                style="">
                <div class="w-1/4 lg:text-2xl md:text-xl text-sm sdira" style="">
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
                    class="flex w-3/6 mr-8 border-t border-b border-sukungreen-300 sdirm items-center text-sukungreen-600 hover:text-sukungreen-300">
                    <div class="mr-5">
                        <p>ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                    </div>
                </div>

                <div class="w-1/6 flex mr-8 align-middle items-center justify-center p-1 ">

                    <div
                        class="flex border border-sukungreen-300 bg-sukungreen-200 hover:bg-sukungreen-100 cursor-pointer text-sukungreen-600 hover:shadow-md">
                        <div style="font-family: MVAWAHEED; direction: rtl;" class="mr-2 pl-4 pt-3 pb-2 ">
                            ހާއްސަ ވީޑިއޯ

                        </div>
                        <div style="" class="pt-2 pb-2 pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 54 54">
                                <g transform="translate(-19.76 -8.34)">
                                    <circle cx="27" cy="27" r="27" transform="translate(19.76 8.34)" fill="#fff"/>
                                    <circle cx="23.039" cy="23.039" r="23.039" transform="translate(23.721 12.301)"
                                            fill="#06a64f"/>
                                    <path d="M100.116,67.142,81.17,56.46V77.827Z" transform="translate(-40.585 -31.802)"
                                          fill="#fff"/>
                                </g>
                            </svg>

                        </div>
                    </div>

                </div>


                <div
                    class="flex w-2/6 border-t border-b border-sukungreen-300 justify-between items-center sdirm text-sukungreen-600">
                    <div class="bg-sukungreen-200 pt-2 pb-1 mr-3 pr-2 pl-2 rounded-sm cursor-not-allowed">
                        އެންމެ ފަހުގެ ވީޑިއޯ
                    </div>

                    <div class="pt-2 pb-1 mr-3 pr-2 pl-2 hover:bg-gray-200 rounded-sm cursor-pointer hover:shadow-md">
                        އެންމެ މަޝްހޫރު
                    </div>

                    <a class="pt-2 pb-1 ml-5 mr-3 pr-2 pl-2 hover:bg-gray-200 rounded-sm cursor-pointer hover:shadow-md"
                       href="#all">
                        ހުރިހާ ވީޑިއޯ
                    </a>


                </div>


            </div>

            <div class="flex mt-10 shadow-md">
                <div class="w-3/12 bg-cover bg-center"
                     style="height: 450px; background-image: url('{{asset('vertical.jpg')}}')"></div>

                <div class="flex"> {{--this is where the link should be--}}
                    <div class="bg-cover bg-center"
                         style="height: 450px ;width: 450px; background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')"></div>
                    <div class="bg-gray-100" style="height: 450px;width: 450px">

                        <div
                            class="border-t border-b ml-10 mr-10 mt-10 border-sukungreen-600 sdira text-4xl text-center justify-center text-sukungreen-600"
                            style="">
                            <p class="pt-5 pb-5" style="">އިގްތިސާދު ހީނަރުވެ ވަޒީފާ ގެއްލެމުންދާއިރު
                                ރައްޔިތުންނަށް ކުރާނީ ކޮން އަސަރެއް!</p>
                        </div>
                        <div class="flex justify-between ml-10 mr-10 mt-2 sdirm text-gray-500 text-sm">
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
                    </div>
                </div>

            </div>

            <div class="">
                <div class="flex -mx-2 justify-between flex-wrap" style="direction: rtl">
                    <div class=" px-2 pt-10">
                        <div class="bg-cover bg-sukungreen-200 bg-center h-56 w-56 shadow-md text-center sdira"
                             style="">
                            <div class="pt-10 border-yellow-300 border-b-2 mr-15 ml-15 text-xl">
                                ރޯދަ ސްޕެޝަލް
                            </div>
                            <div class="text-4xl">
                                އަޑުނީވޭ<br>
                                ވާހަކަތައް
                            </div>

                        </div>
                    </div>
                    <div class=" px-2 pt-10">
                        <div class="bg-cover bg-center h-56 w-56 relative shadow-md"
                             style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                            <div class="">
                                <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                                   style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                    ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                            </div>
                        </div>
                    </div>
                    <div class=" px-2 pt-10">
                        <div class="bg-cover bg-center h-56 w-56 relative shadow-md"
                             style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                            <div class="">
                                <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                                   style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                    ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                            </div>
                        </div>
                    </div>
                    <div class=" px-2 pt-10">
                        <div class="bg-cover bg-center h-56 w-56 relative shadow-md"
                             style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                            <div class="">
                                <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                                   style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                    ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                            </div>
                        </div>
                    </div>
                    <div class=" px-2 pt-10">
                        <div class="bg-cover bg-center h-56 w-56 relative shadow-md"
                             style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                            <div class="">
                                <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
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


            <div class="flex -mx-2 flex-wrap justify-between">
                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>

                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>

                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>

                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>

                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="h-56 bg-cover bg-center"
                         style="width: 467px; background-image:url('{{asset('horizontal.jpg')}}')">
                    </div>
                </div>

                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>

                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="h-56 bg-cover bg-center"
                         style="width: 467px; background-image:url('{{asset('horizontal.jpg')}}')">
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


                <div class=" px-2 pt-10">
                    <div class="bg-cover bg-center h-56 w-56 relative"
                         style="background-image: url('https://scontent.fmle1-1.fna.fbcdn.net/v/t15.5256-10/93796045_2874382489313357_4131329724922200064_n.jpg?_nc_cat=103&_nc_sid=f2c4d5&_nc_eui2=AeGpewli4yAOsQg0_12mevXMEVUghrcHzYkRVSCGtwfNidz_cFnilnZsNvHBHikQ4JpZBLxV5UscQAqf4sQJtwYp&_nc_oc=AQnOad56PWFCivFf1ncfqvJ8eYu7BJyKnGzbA2PhRlNXAzj04c33A8N7DSlblrRIoO8&_nc_ht=scontent.fmle1-1.fna&oh=882adb027fce310b84265d8a01fd2962&oe=5EC771B8')">
                        <div class="">
                            <p class=" absolute inset-x-0 bottom-0 text-center text-white p-2 sdirm shadow-lg"
                               style="opacity: 1; text-shadow: 1px 1px black">ދިވެހިރާއްޖޭގައި ފުރަތަމަ ފަހަރަށް
                                ކޮވިޑަށް މީހަކު ޕޮސިޓިވް ވެއްޖެ</p>
                        </div>
                    </div>
                </div>


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
</section>
</body>
</html>
