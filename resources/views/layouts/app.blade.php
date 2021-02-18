<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jvv site demo</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500">
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>
    <!-- <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div> -->

    <!--  ===== Header ====== -->
    <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!--RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!--RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!--RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logo-default-300x100.png')}}" alt="" width="150" height="50" /><img class="brand-logo-light" src="images/logo-default-300x100.png" alt="" width="150" height="50" /></a>
                            </div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About Us</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Services</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-service.html">Single Service</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                                        <ul class="rd-menu rd-navbar-megamenu">
                                            <li class="rd-megamenu-item">
                                                <h6 class="rd-megamenu-title">Pages 1</h6>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs-and-accordions.html">Tabs and accordions</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Progress bars</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Tables</a></li>
                                                </ul>
                                            </li>
                                            <li class="rd-megamenu-item">
                                                <h6 class="rd-megamenu-title">Pages 2</h6>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-system.html">Grid system</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">Under Construction</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="team.html">Team</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="portfolio.html">Portfolio</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                                    </li>
                                </ul>
                                <div class="rd-navbar-button-block"><a class="button button-default-outline" href="#subscride" data-custom-scroll-to="subscride">Subscribe</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    @yield('content')






    <!-- ===== Footer ===== -->
    <footer class="footer-classic bg-default text-center text-sm-left">
        <div class="section-sm">
            <div class="container">
                <div class="row row-30">
                    <div class="col-sm-6 col-lg-3">
                        <div class="brand-footer">
                            <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-300x100.png" alt="" width="150" height="50" /><img class="brand-logo-light" src="images/logo-default-300x100.png" alt="" width="150" height="50" /></a>
                        </div>
                        <ul class="contact-list">
                            <li> <span>Phone: </span><a href="tel:#">+ 1 (045) - 224 - 12 - 67</a></li>
                            <li><span>Mail: </span><a href="mailto:#">info@demolink.org</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h4 class="footer-title">Services</h4>
                        <ul class="list-sm footer-list">
                            <li><a href="single-service.html">Web Design & Branding</a></li>
                            <li><a href="single-service.html">Graphic Design</a></li>
                            <li><a href="single-service.html">Video Production</a></li>
                            <li><a href="single-service.html">SEO</a></li>
                            <li><a href="single-service.html">Digital Marketing</a></li>
                            <li><a href="single-service.html">Infographics</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h4 class="footer-title">About company</h4>
                        <ul class="list-sm footer-list">
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h4 class="footer-title">Our social networks</h4>
                        <p>Join us in the social networks to receive the latest news and updates.</p>
                        <ul class="list-social list-inline">
                            <li class="list-inline-item"><a class="icon fa-youtube-play" href="#"></a></li>
                            <li class="list-inline-item"><a class="icon fa-facebook-f" href="#"></a></li>
                            <li class="list-inline-item"><a class="icon fa-instagram" href="#"></a></li>
                            <li class="list-inline-item"><a class="icon fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-xs">
            <div class="container">
                <div class="row row-30">
                    <div class="col-md-6">
                        <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Metric</span><span>.&nbsp; All Rights Reserved. &nbsp;</span>Design&nbsp;by&nbsp;<a href="https://zemez.io/">Zemez</a></p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <ul class="footer-list-inline">
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--===== Scripts ===== -->
    <script src="{{ asset('js/core.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

</body>

</html>