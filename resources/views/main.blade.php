<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="MyVolunteer.co">
    <link rel="shortcut icon" href="images/favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/flatpickr.min.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>MyVolunteer | @yield('title')</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="<?php echo url('');?>" class="logo m-0 float-start text-white">Volunteer</a>
                        </div>
                        <div class="col-8 text-center">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="{{$position == "home"?'active':''}}"><a href="<?php echo url('');?>">Home</a></li>
                                <li class="{{$position == "cause"?'active':''}}"><a href="<?php echo url('/cause');?>">Causes</a></li>
                                <li class="{{$position == "about"?'active':''}}"><a href="<?php echo url('/about');?>">About</a></li>
                                <li class="{{$position == "news"?'active':''}}"><a href="<?php echo url('/news');?>">News</a></li>
                                <li class="{{$position == "contact"?'active':''}}"><a href="<?php echo url('/contact');?>">Contact</a></li>
                                <li><span><a href="<?php echo url('/login');?>" class="btn btn-primary btn-sm">Login</a></span></li>
                            </ul>
                        </div>
                        <div class="col-2 text-end">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>

                            <a href="#" class="call-us d-flex align-items-center">
                                <span class="icon-phone"></span>
                                <span>123-489-9381</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="site-footer">
        <div class="container">

            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Follow Now</a></li>
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Popular Causes</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Food for the Hungry</a></li>
                            <li><a href="#">Education for Children</a></li>
                            <li><a href="#">Support for Livelihood</a></li>
                            <li><a href="#">Medical Mission</a></li>
                            <li><a href="#">Education</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->


                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                        </ul>

                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>

                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

            </div> <!-- /.row -->


            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="copyright">Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script>. All Rights Reserved. &mdash; Designed with love by <a
                            href="https://MyVolunteer.co">MyVolunteer.co</a>
                        <!-- License information: https://MyVolunteer.co/license/ -->
                    </p>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/flatpickr.min.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
