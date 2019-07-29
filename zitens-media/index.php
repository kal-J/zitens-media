<?php get_header(); ?>

<body>

    <!--Main Navigation-->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #F5F5F5">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" height="60" alt="logo">
            <a class="navbar-brand" href="#"><strong style="color: purple; margin-left: 1em;"> ZITENS MEDIA</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="color: purple;">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: purple;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: purple;">Get in touch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: purple;">Our services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: purple;">Portifolio</a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link" style="color: purple;"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: purple;"><i class="fab fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: purple;"><i class="fab fa-instagram fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    <!--Main Navigation-->

    <main>

        <!--Main layout-->
        <div class="container">

            <!--First row-->
            <div class="row mt-5">
                <div class="col-md-6 col-xs-12 mt-5 pt-5" data-intro-info>
                    <h3 class="lead purple-text font-weight-bold"> Zitens Media</h3>
                    <p data-zitens-description>
                        Every Modern Business needs an online presence that brings in visitors and converts them into
                        paying customers.
                        <br> We are a digital agency providing various digital services to help businesses build a
                        strong digital presence and skyrocket their growth.
                    </p>
                </div>
                <div class="col-md-6 col-xs-12" data-intro-image>
                    <img style="width: 100%" src="<?php bloginfo('template_url'); ?>/images/phone.png"
                        alt="intro-image">
                </div>
            </div>
            <!--/First row-->

            <hr class="extra-margins">

            <!--Second row-->
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <img src="<?php bloginfo('template_url'); ?>/images/website_sketch.jpg" alt="why-us-image"
                        style="width: 100%; border-radius: 2em;">
                </div>
                <div class="col-md-6 col-xs-12 pl-5">
                    <h2 class="mt-5 why-choose-us">WHY CHOOSE US?</h2>
                    <ul class="mt-3 why-choose-us-list">
                        <li>Because we listen and understand what you need</li>
                        <li>We deliver a custom masterpeice that will suit your business and also make sales.</li>
                        <li>We Deliver Fast</li>
                        <li>Quality Service</li>
                        <li>100% refund Policy</li>
                    </ul>
                </div>
                <!--/.Second row-->
            </div>

            <section id="features" class="mb-5 pb-4">

                <!-- Section heading -->
                <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.1s"
                    style="visibility: visible; animation-name: fadeIn; animation-delay: 0.1s;">
                    <strong>Our services</strong>
                </h3>

                <!-- Section services -->
                <p class="text-center w-responsive mx-auto my-5 grey-text wow fadeIn" data-wow-delay="0.1s"
                    style="visibility: visible; animation-name: fadeIn; animation-delay: 0.1s;">
                    Our team of experts and professionals concentrates on client's growth and advancement and have been
                    in the industry for years, we are extending our reach to fiverr this year.
                </p>

                <!-- Grid row -->
                <div class="row features-small wow fadeIn" data-wow-delay="0.1s"
                    style="visibility: visible; animation-name: fadeIn; animation-delay: 0.1s;">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12">
                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-2">
                                <i class="fa fa-edit purple-text fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Highly Professional website Design</h5>
                            </div>
                        </div>
                        <!-- Grid row -->


                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-2">
                                <i class="fas fa-coins purple-text fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">E-commerce with various payment methods</h5>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-2">
                                <i class="fa fa-cogs purple-text fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Custom Designing</h5>
                                <p class="grey-text">We deliver a custom masterpeice that will suit your business and
                                    also make sales.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-tablet-alt purple-text fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">User friendly and attractive layout</h5>
                                <p class="grey-text">Our developers design your website with your customers at the
                                    center of it all</p>
                            </div>
                        </div>
                        <!-- Grid row -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-1 text-center text-md-left">
                        <img src="<?php bloginfo('template_url'); ?>/images/phone.png" alt=""
                            class="z-depth-0 img-fluid">
                    </div>
                    <!-- Grid column -->

                    <!-- Third column -->
                    <div class="col-lg-4 col-md-12">
                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-2">
                                <i class="fa fa-chart-line purple-text fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Optmized for SEO</h5>
                                <p class="grey-text">We can build a nice and professional website for your business
                                    which will be mobile friendly and SEO optimized.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-2">
                                <i class="fa fa-users purple-text fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Technical support</h5>
                                <p class="grey-text">100% Unlimited revisions</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-2">
                                <i class="far fa-gem purple-text fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">High quality</h5>
                                <p class="grey-text">Secure Websites
                                </p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-envelope-open-text purple-text fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Newsletter subscription, Mailing lists</h5>
                            </div>
                        </div>
                        <!-- Grid row -->
                    </div>
                    <!-- Third column -->
                </div>
                <!-- Grid row -->

            </section>

            <section data-free-services>
                <p class="lead purple-text my-5 text-center we-care-text">
                    Because we care about our customers and what they hope to achieve with their website: we offer free
                </p>

                <div class="row">
                    <!-- Card Wider -->
                    <div class="card card-cascade wider col-md-4">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/social-media.jpg"
                                alt="social-media-image" height="150">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>Facebook, twitter, Instagram page setup</strong></h4>
                            <!-- Text -->
                            <p class="card-text">(free cover designs with your logo)</p>

                        </div>

                    </div>
                    <!-- Card Wider -->

                    <!-- Card Wider -->
                    <div class="card card-cascade wider col-md-4">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/google-setup.jpg"
                                alt="google-setup-image" height="150">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Title -->
                            <h4 class="font-weight-bold card-title">Google business and adword setup</h4>
                            <!-- Text -->

                        </div>

                    </div>
                    <!-- Card Wider -->

                    <!-- Card Wider -->
                    <div class="card card-cascade wider col-md-4">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top"
                                src="<?php bloginfo('template_url'); ?>/images/content-marketing.png"
                                alt="content-marketing-image" height="150">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>Content marketing strategy</strong></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Very important for a website!!!
                            </p>

                        </div>



                    </div>
                    <!-- Card Wider -->
                    <p class="text-center my-3 we-care-text-after">
                        Having a good and clean website isn't enough, which is why we are offering the above services
                        for free(valued above $500) when you order our gig, so you can be succesful with your business
                        or cause!.
                    </p>

                </div>
            </section>
            <!--/.Main layout-->

    </main>

    <div class="container">

        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-6 mx-auto">
                <!-- Form contact -->
                <p class="text-center">
                    Please contact us to place your order or if you have any questions. Can't wait to begin the work on
                    your project and help you make sales.
                </p>
                <form>
                    <p class="h5 text-center mb-4">Contact Us</p>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix purple-text"></i>
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label for="defaultForm-email">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="far fa-comment-dots prefix purple-text"></i>
                        <textarea id="message" class="form-control md-textarea" length="120" rows="3"></textarea>
                        <label for="message">Your message</label>
                    </div>

                    <div class="text-center">
                        <button class="btn" style="background-color: purple">submit</button>
                    </div>
                </form>
                <!-- Form contact -->


            </div>

        </div>
    </div>

    <?php get_footer(); ?>