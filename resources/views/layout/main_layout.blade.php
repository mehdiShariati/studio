<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>نرگس گرافی | عکاس عقد</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="nargesgraphy.ir">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/css/theme.css">
    <link rel="stylesheet" href="/assets/css/theme-elements.css">
    <link rel="stylesheet" href="/assets/css/theme-blog.css">
    <link rel="stylesheet" href="/assets/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="/assets/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/assets/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/assets/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="/assets/vendor/circle-flip-slideshow/css/component.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="/assets/css/skins/skin-corporate-7.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css">
    @yield("more_css")

    <!-- Head Libs -->
    <script src="/assets/vendor/modernizr/modernizr.min.js"></script>
    <link rel="stylesheet" href="/assets/css/share.css">
    <style>
        p{
            font-family: Erfan!important;
        }
        div{
            font-family: Erfan;
        }
    </style>
</head>
<body >


<div class="body" >
    <header id="header" class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 bg-dark box-shadow-none" >
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="/">
                                    <img alt="Porto" width="100"  data-sticky-width="" data-sticky-height="" data-sticky-top="" src="/images/logo_transparent.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">

                        <div class="header-row">
                            <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav" style="direction: rtl">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " href="/">
                                                    خانه
                                                </a>

                                            </li>
                                            <li class="dropdown">
                                                <a href="/portfolios" class="dropdown-item dropdown-toggle">نمونه کار های ما</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="/contact" class="dropdown-item dropdown-toggle">تماس با ما</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="/about" class="dropdown-item dropdown-toggle">درباره ی ما</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="/portfolios" class="dropdown-item dropdown-toggle">وبلاگ ما</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-item dropdown-toggle active">ثبت سفارش</a>
                                            </li>
                                            @if(Auth::user())
                                            <li class="dropdown">
                                                <a ><form action="{{route("logout")}}" method="post">@csrf <input style="outline: none;background: transparent;border:none;color:white" value="خروج" type="submit"></form></a>

                                            </li>
                                                @endif
                                        </ul>
                                    </nav>
                                </div>
                                <ul class="header-social-icons social-icons d-none d-sm-block">
                                    <li class="social-icons-instagram"><a href="http://www.instagram.com/narges.photoo" target="_blank" title="Twitter"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">

        @yield("content")

    </div>

    <footer id="footer">
        <div class="container">
            <div class="row py-5 justify-content-center">
                <div class="col-md-9 offset-md-1 offset-lg-0 mb-4 mb-lg-0 d-flex align-items-center">
                    <div class="footer-nav footer-nav-links footer-nav-bottom-line">
                        <nav>
                            <ul class="nav" id="footerNav">

                                <li>
                                    <a href="/">خانه</a>
                                </li>
                                <li>
                                    <a href="/contact">تماس با ما</a>
                                </li>
                                <li>
                                    <a class="active" href="#">ثبت سفارش</a>
                                </li>
                                <li>
                                    <a href="/portfolios">نمونه کار ها</a>
                                </li>
                                <li>
                                    <a href="/about">درباره ی ما</a>
                                </li>
                                <li>
                                    <a href="#">وبلاگ</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4 mb-lg-0 text-center text-lg-right">
                    <h5 class="text-3 mb-0 pb-1 opacity-6">پشتیبانی</h5>
                    <p class="text-8 text-color-light font-weight-bold pb-1 mb-0"  ><a style="font-family: Erfan;font-size: 12px" href="tel:09387126458">09387126458</a></p>
                    <p class="m-0"><a href="mailto:mail@example.com">mehdishariati12@gmail.com</a></p>
                </div>
            </div>
        </div>
        <div class="footer-copyright footer-copyright-style-2">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                        <a href="index.html" class="logo pr-0 pr-lg-3">
                            <img alt="nargesgraphy logo" src="/images/logo_transparent.png" height="80">
                        </a>
                    </div>
                    <div class="col-lg-11 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0">
                        <p>طراحی شده توسط تیم نرگس گرافی</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Vendor -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/assets/vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="/assets/vendor/popper/umd/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/vendor/common/common.min.js"></script>
    <script src="/assets/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="/assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="/assets/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendor/vide/jquery.vide.min.js"></script>
    <script src="/assets/vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="/assets/js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="/assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="/assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <script src="/assets/js/views/view.home.js"></script>

    <!-- Theme Custom -->
    <!-- Theme Initialization Files -->
    <script src="/assets/js/theme.init.js"></script>

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-12345678-1', 'auto');
        ga('send', 'pageview');
    </script>
     -->

</body>
</html>
