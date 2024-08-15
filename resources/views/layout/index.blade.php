<!DOCTYPE html>
<html lang="en" class="no-js">

@include('layout.header')

<body>

    {{-- Start body content --}}
          <!-- PAGE LOADING
        ================================================== -->
        <div id="preloader"></div>

        <!-- MAIN WRAPPER
        ================================================== -->
        <div class="main-wrapper">

            <!-- HEADER
            ================================================== -->
            <header class="header-style1 menu_area-light">

                <div class="navbar-default border-bottom border-color-light-white">

                    <!-- start top search -->
                    <div class="top-search bg-primary">
                        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                            <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                                <div class="input-group">
                                    <span class="input-group-addon cursor-pointer">
                                        <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                    </span>
                                    <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                    <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end top search -->

                    <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-12">
                                <div class="menu_area alt-font">
                                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                                        <div class="navbar-header navbar-header-custom">
                                            <!-- start logo -->
                                            <a href="index.html" class="navbar-brand"><img id="logo" src='{{ asset("img/logos/logo-inner.png" ) }}' alt="logo"></a>
                                            <!-- end logo -->
                                        </div>

                                        <div class="navbar-toggler"></div>

                                        <!-- start menu area -->
                                        <ul class="navbar-nav " id="nav" style="display: none;">
                                            <li>
                                                <a href="#!">Buy</a>
                                                {{-- <ul>
                                                    <li><a href="index.html">Home 01</a></li>
                                                    <li><a href="index-02.html">Home 02</a></li>
                                                    <li><a href="index-03.html">Home 03</a></li>
                                                </ul> --}}
                                            </li>
                                            <li>  <a href="#!">Rent</a> </li>
                                            <li>  <a href="#!">Sell</a> </li>
                                            <li>  <a href="#!">Off Plan</a> </li>
                                            <li>  <a href="#!">Agent</a> </li>
                                            <li>  <a href="#!">Area</a> </li>

                                        </ul>
                                        <!-- end menu area -->

                                        <!-- start attribute navigation -->
                                        <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                            <ul>
                                                <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                                <li class="d-none d-xl-inline-block"><a href="contact.html" class="butn md">Free Quote</a></li>
                                            </ul>
                                        </div>
                                        <!-- end attribute navigation -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- BANNER
            ================================================== -->
            <section class="full-screen top-position1 p-0">
                <div class="slider-fade owl-carousel owl-theme w-100 min-vh-100">

                    <div class="item bg-img cover-background left-overlay-secondary" data-overlay-dark="7" data-background="img/banner/slide-01.jpg">
                        <div class="container pt-sm-6 pt-md-0 d-flex flex-column">
                            <div class="row align-items-center min-vh-100 pt-6 pt-md-0">
                                <div class="col-md-7 col-lg-6 col-xl-7 mb-1-9 mb-lg-0 py-5">
                                    <span class="small-title">Construction, since 1945.</span>
                                    <h1 class="display-16 display-sm-7 display-lg-4 display-xl-3 display-xxl-2 text-white mb-2-9">INVEST IN DUBAI WITH REAL ESTATE.</h1>
                                    <div class="mt-1-9 align-middle">
                                        <a href="contact.html" class="butn me-sm-2 mb-2 mb-sm-0 md white">Get Started</a>
                                        <a href="about.html" class="butn md">Read More</a>
                                    </div>
                                </div>


                                <div class="col-md-4 col-lg-6 col-xl-5 mb-1-9 mb-lg-0 py-5">
                                    <form class="contact quform" action="quform/contact.php" method="post" enctype="multipart/form-data" onclick="">
                                        <div class="quform-elements">
                                            <div class="row">

                                                <!-- Begin area select !-->
                                                 <div class="col-md-12">
                                                    <div class="quform-element form-group">
                                                        <label class="fwhite" for="total-bedroom">Area <span class="quform-required">*</span></label>
                                                        <select class="js-example-basic-multiple-limit-area" name="area">
                                                            <option value="">Select Area</option>
                                                            <option value="DM">Dubai Marina</option>
                                                            <option value="PJ">Palm Jumeirah </option>
                                                            <option value="DL">Dubailand</option>
                                                            <option value="BB">Business Bay</option>
                                                            <option value="EH">Emirates Hills</option>
                                                            <option value="DSC">Dubai Sport City</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- End Area Select !-->

                                                <div class="col-md-6">
                                                    <div class="quform-element form-group">
                                                        <label class="fwhite" for="proprty-type">Property Type <span class="quform-required">*</span></label>
                                                        <select class="js-example-basic-single" name="state">
                                                            <option value="">Select Property Type</option>
                                                            <option value="AP">Apartment</option>
                                                            <option value="PE">Penthouse</option>
                                                            <option value="VI">Villa</option>
                                                            <option value="DU">Duplex</option>
                                                            <option value="LA">Land</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="quform-element form-group">
                                                        <label class="fwhite" for="total-bedroom">Total Bedroom <span class="quform-required">*</span></label>
                                                        <select class="js-example-basic-multiple-limit" name="state">
                                                            <option value="">Select No. Of Bedroom</option>
                                                            <option value="AP">1</option>
                                                            <option value="PE">2</option>
                                                            <option value="VI">3</option>
                                                            <option value="DU">4</option>
                                                            <option value="LA">5</option>
                                                        </select>
                                                    </div>
                                                </div>



                                                <!-- Begin Text input element -->
                                                <div class="col-md-6">
                                                    <div class="quform-element form-group">
                                                        <label class="fwhite" for="name">Your Name <span class="quform-required">*</span></label>
                                                        <div class="quform-input">
                                                            <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Text input element -->

                                                <!-- Begin Text input element -->
                                                <div class="col-md-6">
                                                    <div class="quform-element form-group">
                                                        <label class="fwhite" for="email">Your Email <span class="quform-required">*</span></label>
                                                        <div class="quform-input">
                                                            <input class="form-control" id="email" type="text" name="email" placeholder="Your email here" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Text input element -->



                                                <!-- Begin Textarea element -->
                                                <div class="col-md-12">
                                                    <div class="quform-element currency form-group">
                                                        <label class="fwhite" for="currency">Currency</label>
                                                        <ul>
                                                            <li>AED</li>
                                                            <li>USD</li>
                                                            <li>EURO</li>
                                                            <li>CNY</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- End Textarea element -->
                                            </div>

                                            <div class="row range-left">
                                                <div class="col-md-6" style="padding-right: 0px;">
                                                    <div class="quform-element form-group">
                                                        <div class="quform-input">
                                                            <input class="form-control" id="min" type="text" name="email" placeholder="Min 10000" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 range-right"  style="padding-left: 0px;">
                                                    <div class="quform-element form-group">
                                                        <div class="quform-input">
                                                            <input class="form-control" id="max" type="text" name="email" placeholder="Max 150000" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <!-- Begin Submit button -->
                                                <div class="col-md-12">
                                                    <div class="quform-submit-inner">
                                                        <button class="butn border-0" type="submit"><span>Send Message</span></button>
                                                    </div>
                                                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                                </div>
                                                <!-- End Submit button -->

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>





                    {{-- <div class="item bg-img cover-background left-overlay-secondary" data-overlay-dark="7" data-background="img/banner/slide-02.jpg">
                        <div class="container pt-sm-6 pt-md-0 d-flex flex-column">
                            <div class="row align-items-center min-vh-100 pt-6 pt-md-0">
                                <div class="col-md-10 col-lg-8 col-xl-7 mb-1-9 mb-lg-0 py-5">
                                    <span class="small-title">Construction, since 1945.</span>
                                    <h1 class="display-16 display-sm-7 display-lg-4 display-xl-3 display-xxl-2 text-white mb-2-9">Provide Effective Solutions.</h1>
                                    <div class="mt-1-9 align-middle">
                                        <a href="contact.html" class="butn me-sm-2 mb-2 mb-sm-0 md white">Get Started</a>
                                        <a href="about.html" class="butn md">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-img cover-background left-overlay-secondary" data-overlay-dark="7" data-background="img/banner/slide-03.jpg">
                        <div class="container pt-sm-6 pt-md-0 d-flex flex-column">
                            <div class="row align-items-center min-vh-100 pt-6 pt-md-0">
                                <div class="col-md-10 col-lg-8 col-xl-7 mb-1-9 mb-lg-0 py-5">
                                    <span class="small-title">Construction, since 1945.</span>
                                    <h1 class="display-16 display-sm-7 display-lg-4 display-xl-3 display-xxl-2 text-white mb-2-9">Best Builders In The World.</h1>
                                    <div class="mt-1-9 align-middle">
                                        <a href="contact.html" class="butn me-sm-2 mb-2 mb-sm-0 md white">Get Started</a>
                                        <a href="about.html" class="butn md">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </section>

            <!-- ABOUT
            ================================================== -->
            <section>
                <div class="container position-relative z-index-9">
                    <div class="row align-items-xxl-center about-style01">
                        <div class="col-lg-6 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                            <div class="row">
                                <div class="col-sm-3 d-none d-sm-block">
                                    <img src='{{ asset("img/content/about2.jpg" ) }}' class="about-img1" alt="...">
                                </div>
                                <div class="col-sm-9">
                                    <img src='{{ asset("img/content/about1.jpg") }}' class="about-img2" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                            <div class="ps-lg-2-3">
                                <div class="section-title">
                                    <span class="sm-title">About Us</span>
                                </div>
                                <h2 class="h1 mb-1-9">Providing full range of high services solution</h2>
                                <p class="mb-1-9">Team is a diverse network of consultants and industry professionals with a global mindset and a collaborative culture. We work to understand your issues and are driven to ask better questions.</p>
                                <div class="row mb-2-3">
                                    <div class="col-md-6 mb-4 mb-md-0">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src='{{ asset("img/icons/01.png" ) }}' alt="...">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h4 class="mb-0 h5">Certified & Awards winner</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src='{{ asset("img/icons/02.png" ) }}' alt="...">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h4 class="mb-0 h5">Best Quality Service</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-light-gray px-2-3 py-1-9 position-relative border-radius-10">
                                    <p class="mb-0 lead font-weight-500 position-relative z-index-9 text-secondary">Construction is exactly what our business has been lacking. Very easy to use.</p>
                                    <img src='{{ asset("img/icons/quote.png") }}' class="position-absolute top-0 right" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src='{{ asset("img/bg/bg-06.jpg") }}' class="position-absolute bottom-0 right" alt="...">
            </section>

            <!-- SERVICES
            ================================================== -->
            <section class="bg-secondary">
                <div class="container">
                    <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                        <span class="sm-title">What We Do</span>
                        <h2 class="mb-0 text-white display-16 display-sm-13 display-md-10 display-lg-8 display-xl-6">Services That Help You Grow.</h2>
                    </div>
                    <div class="row gx-xxl-5 mt-n1-9">
                        <div class="col-md-6 col-xl-4 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                            <div class="card-style1">
                                <div class="card-main-img">
                                    <div class="card-border"></div>
                                    <div class="card-icon">
                                        <img src='{{ asset("img/icons/03.png") }}' alt="...">
                                    </div>
                                    <div class="card-image">
                                        <img src='{{ asset("img/service/service-01.jpg") }}' alt="...">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="mb-2 h5"><a href="apartment-design.html">Apartment Design</a></h3>
                                    <a href="apartment-design.html">Read more <i class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                            <div class="card-style1">
                                <div class="card-main-img">
                                    <div class="card-border"></div>
                                    <div class="card-icon">
                                        <img src='{{ asset("img/icons/04.png") }}' alt="...">
                                    </div>
                                    <div class="card-image">
                                        <img src='{{ asset("img/service/service-02.jpg") }}' alt="...">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="mb-2 h5"><a href="expert-mechanical.html">Expert Mechanical</a></h3>
                                    <a href="expert-mechanical.html">Read more <i class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mt-1-9 wow fadeIn" data-wow-delay="800ms">
                            <div class="card-style1">
                                <div class="card-main-img">
                                    <div class="card-border"></div>
                                    <div class="card-icon">
                                        <img src='{{ asset("img/icons/05.png") }}' alt="...">
                                    </div>
                                    <div class="card-image">
                                        <img src='{{ asset("img/service/service-03.jpg") }}' alt="...">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="mb-2 h5"><a href="architecture-building.html">Architecture & Building</a></h3>
                                    <a href="architecture-building.html">Read more <i class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- TAB
            ================================================== -->
            <section class="pb-lg-0">
                <div class="container position-relative z-index-9">
                    <div class="row align-items-end">
                        <div class="col-lg-7 pb-lg-2-9 wow fadeIn" data-wow-delay="200ms">
                            <div>
                                <h2 class="mb-1-9 mb-xl-2-3 h1">Ready to bring bigger and stronger projects than before!</h2>
                                <div class="horizontaltab tab-style1">
                                    <ul class="resp-tabs-list hor_1">
                                        <li>Our Mission</li>
                                        <li>Our Vision</li>
                                        <li>Our History</li>
                                    </ul>
                                    <div class="resp-tabs-container hor_1 p-0">
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-md-5 mb-1-9 mb-md-0">
                                                    <img src='{{ asset("img/content/tab-01.jpg") }}' class="border-radius-10" alt="...">
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="ps-lg-4">
                                                        <p class="mb-1-9">Our mission is to be the business head specialist co-op organization focused on satisfying the most extreme to our clients.</p>
                                                        <ul class="list-style2 mb-0">
                                                            <li>Professional engineers</li>
                                                            <li>Award winning company</li>
                                                            <li>Work with energetic team</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-md-5 mb-1-9 mb-md-0">
                                                    <img src='{{ asset("img/content/tab-02.jpg") }}' class="border-radius-10" alt="...">
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="ps-lg-4">
                                                        <p class="mb-1-9">Our vision is our expert team has been dedicated to providing the best service and quality available in the area.</p>
                                                        <ul class="list-style2 mb-0">
                                                            <li>Professional engineers</li>
                                                            <li>Award winning company</li>
                                                            <li>Work with energetic team</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-md-5 mb-1-9 mb-md-0">
                                                    <img src='{{ asset("img/content/tab-03.jpg") }}' class="border-radius-10" alt="...">
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="ps-lg-4">
                                                        <p class="mb-1-9">In 1996 we expanded our outstanding service lists, offering a variety of energy saving solutions that we had perfected over the coarse of the last 10 years.</p>
                                                        <ul class="list-style2 mb-0">
                                                            <li>Professional engineers</li>
                                                            <li>Award winning company</li>
                                                            <li>Work with energetic team</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block wow fadeInUp" data-wow-delay="350ms">
                            <div class="ps-xl-6">
                                <img src='{{ asset("img/content/mission.png") }}' alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <img src='{{ asset("img/bg/bg-04.png") }}' class="position-absolute bottom-0 right" alt="...">
            </section>

            <!-- PORTFOLIO
            ================================================== -->
            <section class="position-relative z-index-9">
                <div class="bg-secondary section-bg"></div>
                <div class="position-relative z-index-9">
                    <div class="container">
                        <div class="section-title mb-1-9 mb-md-6 wow fadeIn" data-wow-delay="200ms">
                            <span class="sm-title">Recent Projects</span>
                            <h2 class="mb-0 text-white display-16 display-sm-13 display-md-10 display-lg-8 display-xl-6">Our Special Projects</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 offset-lg-2">
                            <div class="portfolio-carousel owl-carousel owl-theme">
                                <div class="portfolio-style01">
                                    <div class="portfolio-img">
                                        <img src='{{ asset("img/portfolio/01.jpg") }}' class="left-radius" alt="...">
                                    </div>
                                    <div class="portfolio-content">
                                        <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">Commercial</span>
                                        <h3 class="mb-0 h4"><a href="portfolio-details.html">MDZ Designs</a></h3>
                                    </div>
                                </div>
                                <div class="portfolio-style01">
                                    <div class="portfolio-img">
                                        <img src='{{ asset("img/portfolio/02.jpg") }}' class="top-radius" alt="...">
                                    </div>
                                    <div class="portfolio-content">
                                        <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">Commercial</span>
                                        <h3 class="mb-0 h4"><a href="portfolio-details.html">Membrane Structure</a></h3>
                                    </div>
                                </div>
                                <div class="portfolio-style01">
                                    <div class="portfolio-img">
                                        <img src='{{ asset("img/portfolio/03.jpg") }}' class="left-radius" alt="...">
                                    </div>
                                    <div class="portfolio-content">
                                        <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">Architecture</span>
                                        <h3 class="mb-0 h4"><a href="portfolio-details.html">Best Engineering</a></h3>
                                    </div>
                                </div>
                                <div class="portfolio-style01">
                                    <div class="portfolio-img">
                                        <img src='{{ asset("img/portfolio/04.jpg") }}' class="right-radius" alt="...">
                                    </div>
                                    <div class="portfolio-content">
                                        <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">Planning</span>
                                        <h3 class="mb-0 h4"><a href="portfolio-details.html">Market Research</a></h3>
                                    </div>
                                </div>
                                <div class="portfolio-style01">
                                    <div class="portfolio-img">
                                        <img src='{{ asset("img/portfolio/05.jpg") }}' class="top-radius" alt="...">
                                    </div>
                                    <div class="portfolio-content">
                                        <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">Architects</span>
                                        <h3 class="mb-0 h4"><a href="portfolio-details.html">Whitney Architecture</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CLIENTS
            ================================================== -->
            <section class="pt-0 wow fadeIn" data-wow-delay="200ms">
                <div class="container">
                    <div class="row align-items-center mt-n4 text-center">
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src='{{ asset("img/clients/01.png" ) }}' alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src='{{ asset("img/clients/02.png") }}'  alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src='{{ asset("img/clients/03.png") }}' alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src='{{ asset("img/clients/04.png" ) }}'alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src='{{ asset("img/clients/05.png" ) }}'alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src='{{ asset("img/clients/06.png") }}' alt="...">
                        </div>
                    </div>
                </div>
            </section>

            <!-- TESTIMONIAL
            ================================================== -->
            <section class="bg-light bg-img cover-background" data-background="img/bg/bg-07.png">
                <div class="container">
                    <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                        <span class="sm-title">Testimonial</span>
                        <h2 class="mb-0 display-16 display-sm-13 display-md-10 display-lg-8 display-xl-6">What Our Client Say</h2>
                    </div>
                    <div class="row gx-xxl-5 mt-n2-9">
                        <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="400ms">
                            <div class="testimonial-style1">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src='{{ asset("img/avatars/avatar-04.jpg") }}' class="border-radius-10" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-4 pt-4">
                                        <h4 class="h5 mb-1">Alexander Sleigh</h4>
                                        <small>CEO & Founder</small>
                                    </div>
                                </div>
                                <div class="testi-text">
                                    <i class="fa-solid fa-quote-right icon"></i>
                                    <div class="item-desc">I have gotten at least 50 times the value from construction. It really saves me time and effort. Construction did exactly what you said it does.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="600ms">
                            <div class="testimonial-style1">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src='{{ asset("img/avatars/avatar-05.jpg") }}' class="border-radius-10" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-4 pt-4">
                                        <h4 class="h5 mb-1">Nate Disher</h4>
                                        <small>Marketing Manager</small>
                                    </div>
                                </div>
                                <div class="testi-text">
                                    <i class="fa-solid fa-quote-right icon"></i>
                                    <div class="item-desc">I would be lost without construction. I STRONGLY recommend construction to everyone interested in running a successful business! I'm good to go.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="800ms">
                            <div class="testimonial-style1">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src='{{ asset("img/avatars/avatar-06.jpg" ) }}'class="border-radius-10" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-4 pt-4">
                                        <h4 class="h5 mb-1">Eliza Dadswell</h4>
                                        <small>Business Manager</small>
                                    </div>
                                </div>
                                <div class="testi-text">
                                    <i class="fa-solid fa-quote-right icon"></i>
                                    <div class="item-desc">I wish I would have thought of it first. I don't know what else to say. Just what I was looking for. Buy this now. Just what I was looking for.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-6">
                        <a href="about.html" class="butn">View More</a>
                    </div>
                </div>
            </section>

            <!-- TEAM
            ================================================== -->
            <section>
                <div class="container">
                    <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                        <span class="sm-title">Team Members</span>
                        <h2 class="mb-0 display-16 display-sm-13 display-md-10 display-lg-8 display-xl-6">Our Expert Team</h2>
                    </div>
                    <div class="row mt-n1-9">
                        <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                            <div class="team-style01">
                                <div class="image">
                                    <img src='{{ asset("img/team/team-01.jpg") }}' alt="...">
                                    <ul class="social-box">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="text-center pt-4">
                                    <h3 class="h5 mb-1"><a href="team-details.html">Kiara Magarey</a></h3>
                                    <p class="mb-0">Architectural Inspector</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                            <div class="team-style01">
                                <div class="image">
                                    <img src='{{ asset("img/team/team-02.jpg") }}' alt="...">
                                    <ul class="social-box">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="text-center pt-4">
                                    <h3 class="h5 mb-1"><a href="team-details.html">George Skertchly</a></h3>
                                    <p class="mb-0">Electrician Supervisor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="800ms">
                            <div class="team-style01">
                                <div class="image">
                                    <img src='{{ asset("img/team/team-03.jpg") }}' alt="...">
                                    <ul class="social-box">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="text-center pt-4">
                                    <h3 class="h5 mb-1"><a href="team-details.html">David Huish</a></h3>
                                    <p class="mb-0">Building Inspector</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="1000ms">
                            <div class="team-style01">
                                <div class="image">
                                    <img src='{{ asset("img/team/team-04.jpg") }}' alt="...">
                                    <ul class="social-box">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="text-center pt-4">
                                    <h3 class="h5 mb-1"><a href="team-details.html">Dakota Budd</a></h3>
                                    <p class="mb-0">Plumbing Inspector</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CALL TO ACTION
            ================================================== -->
            <section class="bg-img cover-background call-to-action1 video-banner jarallax secondary-overlay" data-overlay-dark="7" style="background-image: url(img/banner/video-cover.jpg);" data-jarallax data-speed="0.8" data-video-src='{{ asset("https://www.youtube.com/watch?v=x4dEfxj_Ttk") }}'>
                <div class="container position-relative z-index-9">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                            <h2 class="display-16 display-sm-13 display-md-10 display-lg-8 display-xl-6 mb-1-9 text-white">We building everything best that you needed</h2>
                            <a href="contact.html" class="butn md">Get Started</a>
                        </div>
                        <div class="offset-lg-1 col-lg-5">
                            <ul class="list-style3">
                                <li class="wow fadeInUp" data-wow-delay="200ms">
                                    <i class="ti-check text-primary me-3"></i>
                                    <p class="mb-0 text-white">We’ve expert &amp; certified staff</p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="350ms">
                                    <i class="ti-check text-primary me-3"></i>
                                    <p class="mb-0 text-white"> We only provide quality services</p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="500ms">
                                    <i class="ti-check text-primary me-3"></i>
                                    <p class="mb-0 text-white">We offer you free estimates</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span class="shape1"></span>
            </section>

            <!-- BLOG
            ================================================== -->
            <section>
                <div class="container">
                    <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                        <span class="sm-title">Our Blog</span>
                        <h2 class="mb-0 display-16 display-sm-13 display-md-10 display-lg-8 display-xl-6">Read Our Latest Updates</h2>
                    </div>
                    <div class="row g-xl-5 mt-n2-2">
                        <div class="col-md-6 col-lg-4 mt-2-2 wow fadeIn" data-wow-delay="400ms">
                            <article class="card-style02">
                                <div class="card-tag">
                                    <a href="#!">Building</a>
                                </div>
                                <div class="card-image"><img src='{{ asset("img/blog/blog-01.jpg") }}' alt="..."></div>
                                <div class="card-body">
                                    <h3 class="h4 mb-3"><a href="blog-details.html" class="text-white">5 innovative approaches to improve your building.</a></h3>
                                    <ul class="card-list ps-0 m-0">
                                        <li><i class="far fa-calendar me-2"></i>Jul 23, 2022</li>
                                        <li class="text-capitalize"><i class="far fa-user me-2"></i><a href="#!">admin</a></li>
                                    </ul>
                                </div>
                                <div class="overlay-box">
                                    <div class="link-btn"><a href="blog-details.html">Read More <i class="ti-arrow-right align-middle ms-1"></i></a></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4 mt-2-2 wow fadeIn" data-wow-delay="600ms">
                            <article class="card-style02">
                                <div class="card-tag">
                                    <a href="#!">Construction</a>
                                </div>
                                <div class="card-image"><img src='{{ asset("img/blog/blog-02.jpg") }}' alt="..."></div>
                                <div class="card-body">
                                    <h3 class="h4 mb-3"><a href="blog-details.html" class="text-white">Everything you need to know about construction.</a></h3>
                                    <ul class="card-list ps-0 m-0">
                                        <li><i class="far fa-calendar me-2"></i>Jul 20, 2022</li>
                                        <li class="text-capitalize"><i class="far fa-user me-2"></i><a href="#!">admin</a></li>
                                    </ul>
                                </div>
                                <div class="overlay-box">
                                    <div class="link-btn"><a href="blog-details.html">Read More <i class="ti-arrow-right align-middle ms-1"></i></a></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4 mt-2-2 wow fadeIn" data-wow-delay="800ms">
                            <article class="card-style02">
                                <div class="card-tag">
                                    <a href="#!">Architecture</a>
                                </div>
                                <div class="card-image"><img src='{{ asset("img/blog/blog-03.jpg" ) }}' alt="..."></div>
                                <div class="card-body">
                                    <h3 class="h4 mb-3"><a href="blog-details.html" class="text-white">Awesome things you can learn from architecture.</a></h3>
                                    <ul class="card-list ps-0 m-0">
                                        <li><i class="far fa-calendar me-2"></i>Jul 18, 2022</li>
                                        <li class="text-capitalize"><i class="far fa-user me-2"></i><a href="#!">admin</a></li>
                                    </ul>
                                </div>
                                <div class="overlay-box">
                                    <div class="link-btn"><a href="blog-details.html">Read More <i class="ti-arrow-right align-middle ms-1"></i></a></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- EXTRA
            ================================================== -->
            <section class="bg-primary py-8 overflow-visible">
                <div class="container">
                    <div class="row justify-content-xxl-end align-items-center">
                        <div class="col-lg-8 col-xl-6 mb-4 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                            <div class="section-title white">
                                <h2 class="mb-0 h1 text-white">For all your construction needs!</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 wow fadeIn" data-wow-delay="400ms">
                            <div class="text-lg-end">
                                <a href="contact.html" class="butn white"><span>Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-img-block">
                    <div class="left-img">
                        <img src='{{ asset("img/content/footer.jpg") }}' alt="...">
                    </div>
                </div>
            </section>

            <!-- FOOTER
            ================================================== -->


        </div>
    {{-- End body content --}}
    <!-- Start footer Area -->
    @include('layout.footer')
    <!-- End footer Area -->



    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                placeholder: "Select Property Type"
            });

            $(".js-example-basic-multiple-limit").select2({
                 placeholder: "Select Total No. Of Room",
                 maximumSelectionLength: 2
            });

            $(".js-example-basic-multiple-limit-area").select2({
                 placeholder: "Select Area",
                 maximumSelectionLength: 2
            });


        });
    </script>


</body>



</html>
