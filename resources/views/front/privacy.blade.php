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
        <div class="container">
        <h1>Privacy Policy</h1>

        <p>Last updated: March 30, 2020</p>

        <p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>

        <p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy is maintained by the <a href="https://www.freeprivacypolicy.com/free-privacy-policy-generator/">Free Privacy Policy Generator</a>.</p>

        <h1>Interpretation and Definitions</h1>
        <h2>Interpretation</h2>
        <p>The words of which the initial letter is capitalized have meanings defined under the following conditions.</p>
        <p>The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>

        <h2>Definitions</h2>
        <p>For the purposes of this Privacy Policy:</p>
        <ul>
            <li>
                <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
            </li>
            <li>
                <p><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to SukunPlay.</p>
            </li>
            <li><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</li>
            <li><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</li>
            <li><strong>Website</strong> refers to SukunPlay, accessible from www.sukunplay.com</li>        <li><strong>Service</strong> refers to the Website.</li>
            <li><strong>Country</strong> refers to: Maldives</li>
            <li>
                <p><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>
            </li>
            <li><strong>Third-party Social Media Service</strong> refers to any website or any social network website through which a User can log in or create an account to use the Service.</li>
            <li>
                <p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
            </li>
            <li><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</li>      <li><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>
        </ul>

        <h1>Collecting and Using Your Personal Data</h1>
        <h2>Types of Data Collected</h2>

        <h3>Personal Data</h3>
        <p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
        <ul>
            <li>Email address</li>  <li>First name and last name</li>  <li>Phone number</li>  <li>Address, State, Province, ZIP/Postal code, City</li>      <li>Usage Data</li>
        </ul>


        <h3>Usage Data</h3>
        <p>Usage Data is collected automatically when using the Service.</p>
        <p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
        <p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
        <p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>



        <h3>Tracking Technologies and Cookies</h3>
        <p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service.</p>
        <p>You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service.</p>
        <p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser. Learn more about cookies here: <a href="https://www.freeprivacypolicy.com/blog/cookies/">Cookies: What Do They Do?</a></p>
        <p>We use both session and persistent Cookies for the purposes set out below:</p>
        <ul>
            <li>
                <p><strong>Necessary / Essential Cookies</strong>
                <p>Type: Session Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
            </li>
            <li>
                <p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
            </li>
            <li>
                <p><strong>Functionality Cookies</strong></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
            </li>
            <li>
                <p><strong>Tracking and Performance Cookies</strong></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Third-Parties</p>
                <p>Purpose: These Cookies are used to track information about traffic to the Website and how users use the Website. The information gathered via these Cookies may directly or indirectly identify you as an individual visitor. This is because the information collected is typically linked to a pseudonymous identifier associated with the device you use to access the Website. We may also use these Cookies to test new advertisements, pages, features or new functionality of the Website to see how our users react to them.</p>
            </li>
            <li>
                <p><strong>Targeting and Advertising Cookies</strong></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Third-Parties</p>
                <p>Purpose: These Cookies track your browsing habits to enable Us to show advertising which is more likely to be of interest to You. These Cookies use information about your browsing history to group You with other users who have similar interests. Based on that information, and with Our permission, third party advertisers can place Cookies to enable them to show adverts which We think will be relevant to your interests while You are on third party websites.</p>
            </li>
        </ul>
        <p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy.</p>

        <h2>Use of Your Personal Data</h2>
        <p>The Company may use Personal Data for the following purposes:</p>
        <ul>
            <li><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</li>
            <li><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</li>
            <li><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</li>
            <li><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</li>
            <li><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</li>
            <li><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</li>
        </ul>

        <p>We may share your personal information in the following situations:</p>

        <ul>
            <li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to show advertisements to You to help support and maintain Our Service, to contact You, to advertise on third party websites to You after You visited our Service or for payment processing.</li>
            <li><strong>For Business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of our business to another company.</li>
            <li><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
            <li><strong>With Business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
            <li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see You name, profile, pictures and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.</li>
        </ul>

        <h2>Retention of Your Personal Data</h2>
        <p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
        <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>

        <h2>Transfer of Your Personal Data</h2>
        <p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
        <p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
        <p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>

        <h2>Disclosure of Your Personal Data</h2>
        <h3>Business Transactions</h3>
        <p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
        <h3>Law enforcement</h3>
        <p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
        <h3>Other legal requirements</h3>
        <p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
        <ul>
            <li>Comply with a legal obligation</li>
            <li>Protect and defend the rights or property of the Company</li>
            <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
            <li>Protect the personal safety of Users of the Service or the public</li>
            <li>Protect against legal liability</li>
        </ul>

        <h2>Security of Your Personal Data</h2>
        <p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>

        <h1>Detailed Information on the Processing of Your Personal Data</h1>
        <p>Service Providers have access to Your Personal Data only to perform their tasks on Our behalf and are obligated not to disclose or use it for any other purpose.</p>

        <h2>Analytics</h2>
        <p>We may use third-party Service providers to monitor and analyze the use of our Service.</p>
        <ul>
            <li>
                <p><strong>Matomo</strong></p>
                <p>Matomo is a web analytics service. You can visit their Privacy Policy page here: <a href="https://matomo.org/privacy-policy">https://matomo.org/privacy-policy</a></p>
            </li>
        </ul>

        <h2>Advertising</h2>
        <p>We may use Service providers to show advertisements to You to help support and maintain Our Service.</p>
        <ul>
            <li>
                <p><strong>Bing Ads</strong></p>
                <p>Bing Ads is an advertising service provided by Microsoft Inc.</p>
                <p>You can opt-out from Bing Ads by following the instructions on Bing Ads Opt-out page: <a href="https://advertise.bingads.microsoft.com/en-us/resources/policies/personalized-ads">https://advertise.bingads.microsoft.com/en-us/resources/policies/personalized-ads</a></p>
                <p>For more information about Bing Ads, please visit their Privacy Policy: <a href="https://privacy.microsoft.com/en-us/PrivacyStatement">https://privacy.microsoft.com/en-us/PrivacyStatement</a></p>
            </li>
        </ul>




        <h2>Usage, Performance and Miscellaneous</h2>
        <p>We may use third-party Service Providers to provide better improvement of our Service.</p>
        <ul>
            <li>
                <p><strong>Google Places</strong></p>
                <p>Google Places is a service that returns information about places using HTTP requests. It is operated by Google.</p>
                <p>Google Places service may collect information from You and from Your Device for security purposes.</p>
                <p>The information gathered by Google Places is held in accordance with the Privacy Policy of Google: <a href="https://www.google.com/intl/en/policies/privacy/">https://www.google.com/intl/en/policies/privacy/</a></p>
            </li>
        </ul>





        <h1>Children's Privacy</h1>
        <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
        <p>We also may limit how We collect, use, and store some of the information of Users between 13 and 18 years old. In some cases, this means We will be unable to provide certain functionality of the Service to these users.</p>
        <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>


        <h1>Links to Other Websites</h1>
        <p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
        <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>

        <h1>Changes to this Privacy Policy</h1>
        <p>We may update our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
        <p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.</p>
        <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

        <h1>Contact Us</h1>
        <p>If you have any questions about this Privacy Policy, You can contact us:</p>
        <ul>
            <li>By email: editor@sukunplay.com</li>
        </ul>
        </div>
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
