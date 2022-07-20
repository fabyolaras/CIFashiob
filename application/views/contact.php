<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url()."assets/"; ?>img/favicon.png" type="image/png">
    <title>Fashiop - Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>vendors/jquery-ui/jquery-ui.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/responsive.css">
</head>

<body>

  <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container-fluid">
                <div class="float-left">
                    <p>Call Us: 0411 878 1392</p>
                </div>
                <div class="float-right">
                    <ul class="right_side">
                        <li>
                            <a href="#">
                                Login/Register
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."index.php/crud/pageContact"; ?>">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?php echo base_url()."index.php/crud/pageHome"; ?>">
                        <img src="<?php echo base_url()."assets/"; ?>img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <div class="row w-100">
                            <div class="col-lg-7 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()."index.php/crud/pageHome"; ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()."index.php/crud/pageProducts"; ?>">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()."index.php/crud/pageWinter"; ?>">Winter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()."index.php/crud/pageSummer"; ?>">Summer</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo base_url()."index.php/crud/pageContact"; ?>">Contact</a>
                                    </li>
                            </div>

                            <div class="col-lg-5">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url()."index.php/crud/pageCart"; ?>" class="icons">
                                            <i class="lnr lnr lnr-cart"></i>
                                        </a>
                                    </li>

                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contact Us</h2>
                    <div class="page_link">
                        <a href="<?php echo base_url()."index.php/crud/pageHome"; ?>">Home</a>
                        <a href="<?php echo base_url()."index.php/crud/pageContact"; ?>">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Makassar, Indonesia</h6>
                            <p>Jl. A.P. Pettarani</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a href="#">0411 878 1392</a>
                            </h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6>
                                <a href="#">support@colorlib.com</a>
                            </h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Us</h6>
                        <p>Fashiop is part of the Brandous Group, a world leader in apparel and accessories that owns a portfolio of powerful luxury and sport and lifestyle brands.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Newsletter</h6>
                        <p>Stay updated with our latest trends</p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                             method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
                                     required="" type="email">
                                    <button class="btn sub-btn">
                                        <span class="lnr lnr-arrow-right"></span>
                                    </button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">Instagram Feed</h6>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li>
                                <img src="<?php echo base_url()."assets/"; ?>img/instagram/Image-01.jpg" alt="">
                            </li>
                            <li>
                                <img src="<?php echo base_url()."assets/"; ?>img/instagram/Image-02.jpg" alt="">
                            </li>
                            <li>
                                <img src="<?php echo base_url()."assets/"; ?>img/instagram/Image-03.jpg" alt="">
                            </li>
                            <li>
                                <img src="<?php echo base_url()."assets/"; ?>img/instagram/Image-04.jpg" alt="">
                            </li>
                            <li>
                                <img src="<?php echo base_url()."assets/"; ?>img/instagram/Image-05.jpg" alt="">
                            </li>
                            <li>
                                <img src="<?php echo base_url()."assets/"; ?>img/instagram/Image-06.jpg" alt="">
                            </li>
                            <li>
                                <img src="<?php echo base_url()."assets/"; ?>img/instagram/Image-07.jpg" alt="">
                            </li>
                            <li>
                                <img src="<?php echo base_url()."assets/"; ?>img/instagram/Image-08.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget f_social_wd">
                        <h6 class="footer_title">Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="f_social">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-behance"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
    </footer>
    <!--================ End footer Area  =================-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url()."assets/"; ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/popper.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/stellar.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendors/isotope/isotope-min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendors/flipclock/timer.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendors/counter-up/jquery.counterup.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/mail-script.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/theme.js"></script>
</body>

</html>