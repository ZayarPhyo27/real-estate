@extends('../website/layout/index')
@section ('content')
@parent

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
                                            <a href="index.html" class="navbar-brand"><img id="logo" src="img/logos/logo-inner.png" alt="logo"></a>
                                            <!-- end logo -->
                                        </div>

                                        <div class="navbar-toggler"></div>

                                        <!-- start menu area -->
                                        <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                            <li>
                                                <a href="#!">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home 01</a></li>
                                                    <li><a href="index-02.html">Home 02</a></li>
                                                    <li><a href="index-03.html">Home 03</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">Pages</a>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="how-we-work.html">How We Work</a></li>
                                                    <li><a href="faq.html">FAQ's</a></li>
                                                    <li>
                                                        <a href="#!">Our Team</a>
                                                        <ul>
                                                            <li><a href="team.html">Our Team</a></li>
                                                            <li><a href="team-details.html">Team Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="pricing.html">Pricing Plans</a></li>
                                                    <li><a href="404-page.html">404 Page</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">Service</a>
                                                <ul>
                                                    <li><a href="services.html">Our Services</a></li>
                                                    <li><a href="apartment-design.html">Apartment Design</a></li>
                                                    <li><a href="expert-mechanical.html">Expert Mechanical</a></li>
                                                    <li><a href="architecture-building.html">Architecture & Building</a></li>
                                                    <li><a href="heavy-equipment.html">Heavy Equipment</a></li>
                                                    <li><a href="interior-design.html">Interior Design</a></li>
                                                    <li><a href="repair-painting.html">Repair & Painting</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">Portfolio</a>
                                                <ul>
                                                    <li><a href="#!">Portfolio Grid</a>
                                                        <ul>
                                                            <li><a href="portfolio-two-columns.html">2 Columns</a></li>
                                                            <li><a href="portfolio.html">3 Columns - Standard</a></li>
                                                            <li><a href="portfolio-four-columns.html">4 Columns</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">Blog</a>
                                                <ul>
                                                    <li><a href="#!">Blog Grid</a>
                                                        <ul>
                                                            <li><a href="blog-grid-two-columns.html">2 Columns</a></li>
                                                            <li><a href="blog-grid-two-columns-left-sidebar.html">2 Col – Left Sidebar</a></li>
                                                            <li><a href="blog-grid-two-columns-right-sidebar.html">2 Col – Right Sidebar</a></li>
                                                            <li><a href="blog-grid.html">3 Columns - Standard</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog-list.html">Blog List</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">Elements</a>
                                                <ul class="row megamenu">
                                                    <li class="col-lg-3">
                                                        <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-700 display-30">Elements 01</span>
                                                        <ul>
                                                            <li><a href="accordion.html"><i class="fas fa-sliders-h me-2"></i>Accordions</a></li>
                                                            <li><a href="alerts.html"><i class="far fa-bell me-2"></i>Alerts</a></li>
                                                            <li><a href="blockquotes.html"><i class="fas fa-vector-square me-2"></i>Blockquote</a></li>
                                                            <li><a href="buttons.html"><i class="fas fa-link me-2"></i>Buttons</a></li>
                                                            <li><a href="call-to-action.html"><i class="far fa-square me-2"></i>Call to Action</a></li>
                                                            <li><a href="carousel-slider.html"><i class="far fa-images me-2"></i>Carousel Slider</a></li>
                                                            <li><a href="count-down.html"><i class="far fa-flag me-2"></i>Count Down</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-lg-3">
                                                        <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-700 display-30">Elements 02</span>
                                                        <ul>
                                                            <li><a href="counter.html"><i class="fas fa-compress me-2"></i>Counters</a></li>
                                                            <li><a href="dropcaps.html"><i class="far fa-closed-captioning me-2"></i>Dropcaps</a></li>
                                                            <li><a href="forms.html"><i class="fab fa-wpforms me-2"></i>Forms</a></li>
                                                            <li><a href="form-elements.html"><i class="fas fa-cubes me-2"></i>Form Elements</a></li>
                                                            <li><a href="font-icons.html"><i class="far fa-check-square me-2"></i>Font Icons</a></li>
                                                            <li><a href="google-map.html"><i class="fas fa-map-marker-alt me-2"></i>Google Map</a></li>
                                                            <li><a href="grid-system.html"><i class="fas fa-th me-2"></i>Grid System</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-lg-3">
                                                        <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-700 display-30">Elements 03</span>
                                                        <ul>
                                                            <li><a href="highlights.html"><i class="fas fa-highlighter me-2"></i>Highlights</a></li>
                                                            <li><a href="header-1.html"><i class="fas fa-compress me-2"></i>Header Style 01</a></li>
                                                            <li><a href="header-2.html"><i class="fas fa-compress-arrows-alt me-2"></i>Header Style 02</a></li>
                                                            <li><a href="icon-with-text.html"><i class="fab fa-fonticons-fi me-2"></i>Icon With Text</a></li>
                                                            <li><a href="list-styles.html"><i class="fas fa-list-ul me-2"></i>List Styles</a></li>
                                                            <li><a href="media-object.html"><i class="fas fa-photo-video me-2"></i>Media Object</a></li>
                                                            <li><a href="modal.html"><i class="fas fa-expand me-2"></i>Modal</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-lg-3">
                                                        <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-700 display-30">Elements 04</span>
                                                        <ul>
                                                            <li><a href="pagination.html"><i class="far fa-caret-square-right me-2"></i>Pagination</a></li>
                                                            <li><a href="progress-bar.html"><i class="fas fa-tasks me-2"></i>Progress Bars</a></li>
                                                            <li><a href="social-icons.html"><i class="fas fa-bezier-curve me-2"></i>Social Icons</a></li>
                                                            <li><a href="tables.html"><i class="fas fa-table me-2"></i>Tables</a></li>
                                                            <li><a href="tabs.html"><i class="fas fa-sliders-h me-2"></i>Tabs</a></li>
                                                            <li><a href="typography.html"><i class="fas fa-text-height me-2"></i>Typography</a></li>
                                                            <li><a href="video.html"><i class="fas fa-video me-2"></i>Videos</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
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
                                <div class="col-md-10 col-lg-8 col-xl-7 mb-1-9 mb-lg-0 py-5">
                                    <span class="small-title">Construction, since 1945.</span>
                                    <h1 class="display-16 display-sm-7 display-lg-4 display-xl-3 display-xxl-2 text-white mb-2-9">Build A Better World With Us.</h1>
                                    <div class="mt-1-9 align-middle">
                                        <a href="contact.html" class="butn me-sm-2 mb-2 mb-sm-0 md white">Get Started</a>
                                        <a href="about.html" class="butn md">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-img cover-background left-overlay-secondary" data-overlay-dark="7" data-background="img/banner/slide-02.jpg">
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
                    </div>

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
                                    <img src="img/content/about2.jpg" class="about-img1" alt="...">
                                </div>
                                <div class="col-sm-9">
                                    <img src="img/content/about1.jpg" class="about-img2" alt="...">
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
                                                <img src="img/icons/01.png" alt="...">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h4 class="mb-0 h5">Certified & Awards winner</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="img/icons/02.png" alt="...">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h4 class="mb-0 h5">Best Quality Service</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-light-gray px-2-3 py-1-9 position-relative border-radius-10">
                                    <p class="mb-0 lead font-weight-500 position-relative z-index-9 text-secondary">Construction is exactly what our business has been lacking. Very easy to use.</p>
                                    <img src="img/icons/quote.png" class="position-absolute top-0 right" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="img/bg/bg-06.jpg" class="position-absolute bottom-0 right" alt="...">
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
                                        <img src="img/icons/03.png" alt="...">
                                    </div>
                                    <div class="card-image">
                                        <img src="img/service/service-01.jpg" alt="...">
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
                                        <img src="img/icons/04.png" alt="...">
                                    </div>
                                    <div class="card-image">
                                        <img src="img/service/service-02.jpg" alt="...">
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
                                        <img src="img/icons/05.png" alt="...">
                                    </div>
                                    <div class="card-image">
                                        <img src="img/service/service-03.jpg" alt="...">
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
                                                    <img src="img/content/tab-01.jpg" class="border-radius-10" alt="...">
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
                                                    <img src="img/content/tab-02.jpg" class="border-radius-10" alt="...">
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
                                                    <img src="img/content/tab-03.jpg" class="border-radius-10" alt="...">
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
                                <img src="img/content/mission.png" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <img src="img/bg/bg-04.png" class="position-absolute bottom-0 right" alt="...">
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
                                        <img src="img/portfolio/01.jpg" class="left-radius" alt="...">
                                    </div>
                                    <div class="portfolio-content">
                                        <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">Commercial</span>
                                        <h3 class="mb-0 h4"><a href="portfolio-details.html">MDZ Designs</a></h3>
                                    </div>
                                </div>
                                <div class="portfolio-style01">
                                    <div class="portfolio-img">
                                        <img src="img/portfolio/02.jpg" class="top-radius" alt="...">
                                    </div>
                                    <div class="portfolio-content">
                                        <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">Commercial</span>
                                        <h3 class="mb-0 h4"><a href="portfolio-details.html">Membrane Structure</a></h3>
                                    </div>
                                </div>
                                <div class="portfolio-style01">
                                    <div class="portfolio-img">
                                        <img src="img/portfolio/03.jpg" class="left-radius" alt="...">
                                    </div>
                                    <div class="portfolio-content">
                                        <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">Architecture</span>
                                        <h3 class="mb-0 h4"><a href="portfolio-details.html">Best Engineering</a></h3>
                                    </div>
                                </div>
                                <div class="portfolio-style01">
                                    <div class="portfolio-img">
                                        <img src="img/portfolio/04.jpg" class="right-radius" alt="...">
                                    </div>
                                    <div class="portfolio-content">
                                        <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">Planning</span>
                                        <h3 class="mb-0 h4"><a href="portfolio-details.html">Market Research</a></h3>
                                    </div>
                                </div>
                                <div class="portfolio-style01">
                                    <div class="portfolio-img">
                                        <img src="img/portfolio/05.jpg" class="top-radius" alt="...">
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
                            <img src="img/clients/01.png" alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src="img/clients/02.png" alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src="img/clients/03.png" alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src="img/clients/04.png" alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src="img/clients/05.png" alt="...">
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mt-4">
                            <img src="img/clients/06.png" alt="...">
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
                                        <img src="img/avatars/avatar-04.jpg" class="border-radius-10" alt="...">
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
                                        <img src="img/avatars/avatar-05.jpg" class="border-radius-10" alt="...">
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
                                        <img src="img/avatars/avatar-06.jpg" class="border-radius-10" alt="...">
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
                                    <img src="img/team/team-01.jpg" alt="...">
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
                                    <img src="img/team/team-02.jpg" alt="...">
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
                                    <img src="img/team/team-03.jpg" alt="...">
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
                                    <img src="img/team/team-04.jpg" alt="...">
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
            <section class="bg-img cover-background call-to-action1 video-banner jarallax secondary-overlay" data-overlay-dark="7" style="background-image: url(img/banner/video-cover.jpg);" data-jarallax data-speed="0.8" data-video-src="https://www.youtube.com/watch?v=x4dEfxj_Ttk">
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
                                <div class="card-image"><img src="img/blog/blog-01.jpg" alt="..."></div>
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
                                <div class="card-image"><img src="img/blog/blog-02.jpg" alt="..."></div>
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
                                <div class="card-image"><img src="img/blog/blog-03.jpg" alt="..."></div>
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
                        <img src="img/content/footer.jpg" alt="...">
                    </div>
                </div>
            </section>

            <!-- FOOTER
            ================================================== -->
            <footer class="pt-6 pt-lg-8">
                <div class="container">
                    <div class="row mt-n2-9 pb-6 pb-lg-8">
                        <div class="col-md-6 col-lg-5 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                            <div class="footer-logo mb-1-9">
                                <a href="index.html"><img src="img/logos/footer-light-logo.png" alt="..."></a>
                            </div>
                            <h4 class="text-white mb-1-9 fw-light w-lg-75 display-27 lh-base opacity8">We have 14+ years experience. Helping you overcome technology challenges.</h4>
                            <ul class="social-icon-style1">
                                <li>
                                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-2-9 wow fadeIn" data-wow-delay="400ms">
                            <div class="ps-0">
                                <h3 class="text-white h4 mb-1-9">Newsletter</h3>
                                <p class="text-white opacity8 mb-4">Subscribe to our newsletter to receive updates on the latest news!</p>
                                <form class="quform newsletter-form" action="quform/newsletter-two.php" method="post" enctype="multipart/form-data" onclick="">

                                    <div class="quform-elements">
                                        <div class="row">

                                            <!-- Begin Text input element -->
                                            <div class="col-md-12">
                                                <div class="quform-element mb-0">
                                                    <div class="quform-input">
                                                        <input class="form-control" id="email_address" type="text" name="email_address" placeholder="Subscribe with us">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Text input element -->

                                            <!-- Begin Submit button -->
                                            <div class="col-md-12">
                                                <div class="quform-submit-inner">
                                                    <button class="btn btn-white text-white m-0" type="submit"><i class="fas fa-paper-plane"></i></button>
                                                </div>
                                                <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                            </div>
                                            <!-- End Submit button -->
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-2-9 offset-lg-1 wow fadeIn" data-wow-delay="600ms">
                            <div class="ps-xl-4">
                                <h3 class="text-white h4 mb-1-9">Contacts</h3>
                                <div class="d-flex mb-1-9">
                                    <div class="flex-shrink-0">
                                        <img src="img/icons/09.png" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 h5 text-white">Contact Us</h4>
                                        <p class="mb-0 text-white">(44) 123-456-789</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="img/icons/10.png" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 h5 text-white">Mail Us</h4>
                                        <p class="mb-0 text-white">info@yourdomain.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4 border-top border-color-light-white">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 text-center">
                                <p class="d-inline-block text-white mb-0">&copy; <span class="current-year"></span> Archic Powered by <a href="#!" class="text-primary text-white-hover">Website Design Templates</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>



        <!-- all js include end -->

    </body>

    </html>
@endsection
