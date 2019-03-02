<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eli Health Record System</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">



    <!-- Main Header-->
    <header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container clearfix">
                <!--Top Left-->
                <div class="top-left pull-left">
                    <ul class="links-nav clearfix">
                        <li><a href="#"><span class="fa fa-phone"></span> Call Us : 801-413-9793</a></li>
                        <li><a href="#"><span class="fa fa-envelope-o"></span> Email Us : ehs@hsnow.org</a></li>
                    </ul>
                </div>

                <!--Top Right-->
                <div class="top-right pull-right">
                    <div class="social-links clearfix">
                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div><!-- Header Top End -->

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset(Setting::get('site_logo', 'images/logo.png')) }}" alt="EMR LOGO" title="HealthEra"></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                            <ul>
                                <li><strong>Our Location</strong></li>
                                <li>Parker paint junction,</li>
                                <li> Paynesville City, Monrovia, Liberia</li>

                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-time-management"></span></div>
                            <ul>
                                <li><strong>working hours</strong></li>
                                <li>Mon - Fri : 9:00 Am - 7:00 Pm</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="link-btn">
                                <a href="#" class="theme-btn btn-style-one">get a quote</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!--Header-Lower-->
        <div class="header-lower">

            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="{{ active(['home'], 'current') }}"><a href="{{ route('home') }}">Home</a>

                                </li>
                                <li class="dropdown"><a href="">About Us</a>

                                </li>
                                <li class="dropdown"><a href="#">Patient Management</a>
                                    <ul>
                                        <li><a href="{{ route('patients.patient.create') }}">Patient Registration</a></li>
                                        <li><a href="{{ route('coming') }}">Patient History</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Doctor Reports</a>
                                    <ul>
                                        <li><a href="{{ route('coming') }}">Discharge Note</a></li>
                                        <li><a href="{{ route('coming') }}">Consent Form </a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Nursing Unit</a>
                                    <ul>
                                        <li><a href="{{ route('coming') }}">Visit Record</a></li>
                                        <li><a href="{{ route('coming') }}">Care Report</a></li>

                                    </ul>
                                </li>

                                <li class="{{ active(['contact'], 'current') }}"><a href="{{ url('contact') }}">Contact Us</a></li>
                                @guest
                                    {{--<li class="dropdown"><a href="#">Account</a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="{{ route('register') }}">Sign Up</a></li>--}}
                                            <li><a href="{{ route('login') }}">Staff login</a></li>

                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    @else
                                    <li class="dropdown"><a href="#">Account</a>
                                        <ul>
                                            <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                            <li>

                                                <a class="" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                            </li>

                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                </div>
            </div>
        </div>


        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="{{ asset(Setting::get('site_logo', 'images/logo.png')) }}" alt="EMR" title="Transpo"></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="index.html">Home</a>

                                </li>
                                <li class="dropdown"><a href="about.html">About Us</a>

                                </li>
                                <li class="dropdown"><a href="#">Patient Management</a>
                                    <ul>
                                        <li><a href="admin/pregister.html">Patient Registration</a></li>
                                        <li><a href="admin/phistory.html">Patient History</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Doctor Reports</a>
                                    <ul>
                                        <li><a href="admin/dnote.html">Discharge Note</a></li>
                                        <li><a href="admin/consent.html">Consent Form </a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Nursing Unit</a>
                                    <ul>
                                        <li><a href="admin/ncases">Visit Record</a></li>
                                        <li><a href="admin/nrecord">Care Report</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                @guest
                                <li class="dropdown"><a href="#">Account</a>
                                    <ul>
                                        <li><a href="{{ url('login') }}">Staff Login</a></li>

                                    </ul>
                                </li>
                                    @else
                                    <li><a href="{{ route('admin.home') }}">Account</a></li>
                                @endguest
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div><!--End Sticky Header-->

    </header>
    <!--End Main Header -->



    @yield('content')















    <!--Main Footer-->
    <footer class="main-footer">
        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <!--Logo-->
                                    <div class="footer-logo"><a href="index.html"></a></div>

                                    <div class="widget-content">
                                        <div class="text">Get ahead of the pact.</div>

                                        <div class="social-links">
                                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2>Quick Links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Doctors Department</a></li>
                                            <li><a href="#">Nurses Department</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Big Column-->


                </div>
            </div>

        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12"><div class="copyright-text">&copy; 2019 All Rights Reserved</div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                        <!--Bottom Nav-->
                        <nav class="footer-nav clearfix">
                            <ul class="pull-right clearfix">
                                <li><a href="#">terms &amp; condition</a></li>
                                <li><a href="#">privacy policy</a></li>
                                <li><a href="contact.html">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>

    </footer>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>



<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/revolution.min.js') }}"></script>
<!-- count to -->
<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/validate.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<!-- gmap helper -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<!-- thm custom script -->
<script src="{{ asset('js/custom.js') }}"></script>

<!-- thm custom script -->
<script src="{{ asset('js/jquery.appear.js') }}"></script>
</body>
</html>
