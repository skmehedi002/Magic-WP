<?php /* Template Name: Home */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>



<?php endwhile; ?>

<?php else: ?>



<?php endif; ?>
    <!-- home banner area -->
    <div class="banner-area-inner">
        <div class="banner-inner-area banner-area1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <!-- banner text -->
                        <div class="banner-text-inner">
                            <div class="banner-shape-wrap">
                                <div class="banner-shape-inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/shaps1.png" alt="" class='shape shape1 rotate3d'>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/shaps2.png" alt="" class='shape shape2 rotate2d'>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/shaps3.png" alt="" class='shape shape3 rotate-2d'>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/shaps4.png" alt="" class='shape shape4 rotate3d'>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/shaps5.png" alt="" class='shape shape5 rotate2d'>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/shaps6.png" alt="" class='shape shape6 rotate-2d'>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/shaps7.png" alt="" class='shape shape7 rotate3d'>
                                </div>
                            </div>

                            <h1><?php global $magic; echo $magic['banner-title'];  ?></h1>
                            <p><?php global $magic; echo $magic['banner-content'];  ?></p>
                            <a href="#" class="btn">Download App</a>
                            <a href="#" class="btn">Discover More</a>
                        </div>
                        <!-- banner text -->
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-4 offse-xl-2">
                        <!-- banner image-->
                        <div class="banner-image">
                            <img src="<?php global $magic; echo $magic['banner-image']['url'];  ?>" alt="Image">
                        </div>
                        <!--End of banner image-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of home banner area -->

    <!-- feature area -->
    <section class="pb-110" id='features'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <h2><?php global $magic; echo $magic['feature-title'];  ?></h2>
                        <p><?php global $magic; echo $magic['feature-content'];  ?></p>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="feature-carousel owl-carousel">
                        <?php echo feature(); ?>
                    </div><!--/.feature-carousel-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!-- End of feature area -->

    <!-- Counter up area -->
    <section class="border-top pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <!-- single counetr -->
                    <div class="single-counter text-center">
                        <span class="counter">4789</span>
                        <p>Downloads</p>
                    </div><!-- single counetr -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- single counetr -->
                    <div class="single-counter text-center">
                        <span class="counter">6389</span>
                        <p>Liks</p>
                    </div><!-- single counetr -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- single counetr -->
                    <div class="single-counter text-center">
                        <span class="counter">900</span>
                        <p>5 Star Reating</p>
                    </div><!-- single counetr -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- single counetr -->
                    <div class="single-counter text-center">
                        <span class="counter">489</span>
                        <p>Awards</p>
                    </div><!-- single counetr -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.End of Counter up area -->

    <!-- interact user -->
    <section class="bg-2 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-7">
                    <!-- user interact image -->
                    <div class="user-interact-image">
                        <img src="<?php global $magic; echo $magic['first-interact-image']['url'];?>" class="svg" alt="Image">
                    </div>
                    <!-- End of user interact image -->
                </div>
                <div class="col-lg-5 col-sm-5">
                    <!-- user ineract text -->
                    <div class="user-interact-inner">
                        <div class="interact-icon">
                            <img src="<?php global $magic; echo $magic['first-interact-icon']['url'];  ?>"  alt="Icon">
                        </div>
                        <h2><?php global $magic; echo $magic['first-interact-title'];  ?></h2>
                        <p><?php global $magic; echo $magic['first-interact-content'];  ?></p>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                    <!--End of user ineract text -->
                </div>
            </div>
        </div>
    </section>
    <!-- interact user -->

    <!-- interact user -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-5">
                    <!-- user ineract text -->
                    <div class="user-interact-inner">
                        <div class="interact-icon">
                            <img src="<?php global $magic; echo $magic['interact-icon']['url'];  ?>" class="svg" alt="Image">
                        </div>
                        <h2><?php global $magic; echo $magic['interact-title'];  ?></h2>
                        <p><?php global $magic; echo $magic['interact-content'];  ?></p>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                    <!--End of user ineract text -->
                </div>
                <div class="col-lg-7 col-sm-7">
                    <!-- user interact image -->
                    <div class="user-interact-image type2">
                        <img src="<?php global $magic; echo $magic['interact-image']['url'];  ?>"  alt="Image">
                    </div>
                    <!-- End of user interact image -->
                </div>
            </div>
        </div>
    </section>
    <!-- interact user -->



    <!-- app video -->
    <section class="app-video">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- why bottle video -->
                    <div class="theme-video-wrap">
                        <a href="https://www.youtube.com/watch?v=SZEflIVnhH8" class="video-btn" data-popup="video"><i class="fa fa-play"></i></a>
                    </div>
                    <!-- end of why bottle video -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of why bottol water -->

    <!-- app screen -->
    <section class="pt-120 pb-115" id='app'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <h2><?php global $magic; echo $magic['app-screen-title'];  ?></h2>
                        <p><?php global $magic; echo $magic['app-screen-content'];  ?></p>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
        </div>
        <div class="app-scrin-inner">
            <div class="app-carousel-inner">
                <div class="app-carousel owl-carousel">
                    <!-- slingle app image -->
                    <?php echo app_screen() ?>
                    <!-- slingle app image -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of app screen -->

    <!-- app pricing plan -->
    <section class="pb-90" id='pricing'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <h2><?php global $magic; echo $magic['price-title'];  ?></h2>
                        <p><?php global $magic; echo $magic['price-content'];  ?></p>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="price-nav-wrap">
                        <!-- price nav -->
                        <div class="price--nav-inner">
                            <nav>
                                <div class="nav info-tabs">
                                    <a class="price--nav-item active" id="nav-contact-tab" data-toggle="tab" href="#month">Monthly</a>
                                    <a class="price--nav-item" data-toggle="tab" href="#year">Yearly</a>
                                </div>
                            </nav>
                        </div>
                        <!-- End of price nav -->
                    </div>
                    <!-- nav tab content -->
                    <div class="tab-content price-content">
                        <div class="tab-pane fade active show" id="month" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <!--Single price plan -->
                                    <div class="single-price-plan text-center">
                                        <div class="single-price-top">
                                            <h4>Standard</h4>
                                            <span>$20</span>
                                        </div>
                                        <div class="single-price-body">
                                            <div class="price-list">
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 pages
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        500 gb storage
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 sdd Database
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                                        Free coustom domain
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                                        24/7 free support
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn">Get Started</a>
                                        </div>
                                    </div>
                                    <!--end of Single price plan -->
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <!--Single price plan -->
                                    <div class="single-price-plan active text-center">
                                        <div class="single-price-top">
                                            <h4>Business</h4>
                                            <span>$30</span>
                                        </div>
                                        <div class="single-price-body">
                                            <div class="price-list">
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 pages
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        500 gb storage
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 sdd Database
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        Free coustom domain
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                                        24/7 free support
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn">Get Started</a>
                                        </div>
                                    </div>
                                    <!--end of Single price plan -->
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <!--Single price plan -->
                                    <div class="single-price-plan text-center">
                                        <div class="single-price-top">
                                            <h4>Professional</h4>
                                            <span>$40</span>
                                        </div>
                                        <div class="single-price-body">
                                            <div class="price-list">
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 pages
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        500 gb storage
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 sdd Database
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        Free coustom domain
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        24/7 free support
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn">Get Started</a>
                                        </div>
                                    </div>
                                    <!--end of Single price plan -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="year" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <!--Single price plan -->
                                    <div class="single-price-plan text-center">
                                        <div class="single-price-top">
                                            <h4>Standard</h4>
                                            <span>$200</span>
                                        </div>
                                        <div class="single-price-body">
                                            <div class="price-list">
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 pages
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        500 gb storage
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 sdd Database
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                                        Free coustom domain
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                                        24/7 free support
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn">Get Started</a>
                                        </div>
                                    </div>
                                    <!--end of Single price plan -->
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <!--Single price plan -->
                                    <div class="single-price-plan active text-center">
                                        <div class="single-price-top">
                                            <h4>Business</h4>
                                            <span>$300</span>
                                        </div>
                                        <div class="single-price-body">
                                            <div class="price-list">
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 pages
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        500 gb storage
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 sdd Database
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        Free coustom domain
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                                        24/7 free support
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn">Get Started</a>
                                        </div>
                                    </div>
                                    <!--end of Single price plan -->
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <!--Single price plan -->
                                    <div class="single-price-plan text-center">
                                        <div class="single-price-top">
                                            <h4>Professional</h4>
                                            <span>$400</span>
                                        </div>
                                        <div class="single-price-body">
                                            <div class="price-list">
                                                <ul>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 pages
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        500 gb storage
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        10 sdd Database
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        Free coustom domain
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                                        24/7 free support
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn">Get Started</a>
                                        </div>
                                    </div>
                                    <!--end of Single price plan -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of nav tab content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of app pricing plan -->

    <!-- testimonial area -->
    <section class="pt-120 pb-110 bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <?php echo review()?>
            </div>
        </div>
    </section>
    <!--End of testimonial area -->

    <!-- our partner -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- partner carosel inner -->
                    <div class="partner-carousel-wrap">
                        <div class="partner-carousel owl-carousel">
                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner2.png" alt="">
                            </div>
                            <!-- End of single partner -->

                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner2.png" alt="">
                            </div>
                            <!-- End of single partner -->

                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner2.png" alt="">
                            </div>
                            <!-- End of single partner -->

                            <!-- single partner -->
                            <div class="single-partner">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner2.png" alt="">
                            </div>
                            <!-- End of single partner -->
                        </div>
                    </div>
                    <!--End of  partner carosel inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of our partner -->

    <!-- start blog area -->
    <section class="border-top pt-115 pb-80" id='blog'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <h2><?php global $magic; echo $magic['blog-title'];  ?></h2>
                        <p><?php global $magic; echo $magic['blog-content'];  ?></p>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <!-- single blog inner -->
                    <div class="single-blog-inner">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1.png" alt="">
                            </a>
                            <div class="post-date">
                                <p><span>30</span>Sep</p>
                            </div>
                        </div>
                        <!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-info d-flex">
                                    <a href="#"><span>By</span>Admin</a>
                                    <a href="#"><span>1</span> Comment</a>
                                </div>

                                <div class="post-title">
                                    <h3><a href="blog-details.html">Pre and Post Launch Mobile App Marketing Pitfalls to Avoid</a></h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject humour or random
                                    words.</p>
                                <a class='blog-btn' href="blog-details.html">Read More</a>
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div>

                <div class="col-lg-4 col-md-4">
                    <!-- single blog inner -->
                    <div class="single-blog-inner">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2.png" alt="">
                            </a>
                            <div class="post-date">
                                <p><span>11</span>Sep</p>
                            </div>
                        </div>
                        <!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-info d-flex">
                                    <a href="#"><span>By</span>Admin</a>
                                    <a href="#"><span>2</span> Comments</a>
                                </div>

                                <div class="post-title">
                                    <h3><a href="blog-details.html">Nascetur Etiam tempus sit amet vestibulum quis variations.</a></h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject
                                    humour or random
                                    words.</p>
                                <a class='blog-btn' href="blog-details.html">Read More</a>
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div>

                <div class="col-lg-4 col-md-4">
                    <!-- single blog inner -->
                    <div class="single-blog-inner">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3.png" alt="">
                            </a>
                            <div class="post-date">
                                <p><span>20</span>Nov</p>
                            </div>
                        </div>
                        <!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-info d-flex">
                                    <a href="#"><span>By</span>Admin</a>
                                    <a href="#"><span>5</span> Comments</a>
                                </div>

                                <div class="post-title">
                                    <h3><a href="blog-details.html">It is a long established fact that and reader will be distracted.</a></h3>
                                </div>
                                <p>There are many variations of passages of available but majority have alteration in some by inject
                                    humour or random
                                    words.</p>
                                <a class='blog-btn' href="blog-details.html">Read More</a>
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- end of blog artea -->

    <!-- download app -->
    <section class="border-top pt-110 pb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="download-app-inner text-center">
                        <h2 class="h1">
                            Download our App Today &<br>
                            Experience Endless Possibilities.
                        </h2>
                        <h3>and get started with a free 1 month trial for your business</h3>
                        <a href="#" class="btn">Download App</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of download app -->


<?php get_footer() ?>