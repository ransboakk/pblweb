@extends('frontend.layout.main')
@section('content')

    <!-- Start Main Banner Area -->
    <div class="banner-slider-eight owl-carousel owl-theme">
        <div class="main-banner jarallax" data-jarallax="{" speed":="" 0.3}"="">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content">
                            <h1>Easy, fee-free banking for entrepreneurs</h1>
                            <p>Get the financial tools and insights to start, build, and grow your business.</p>
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner jarallax bg-8" data-jarallax="{" speed":="" 0.3}"="">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content">
                            <h1>International Currency Transfer Provider</h1>
                            <p>Get the financial tools and insights to start, build, and grow your business.</p>
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Featured Boxes Area -->
    <section class="featured-boxes-area">
        <div class="container">
            <div class="featured-boxes-inner">
                <div class="row m-0">
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-fb7756">
                                <i class="flaticon-piggy-bank"></i>
                            </div>

                            <h3>Savings Account</h3>
                            <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>

                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-facd60">
                                <i class="flaticon-check-mark"></i>
                            </div>

                            <h3> Current Account</h3>
                            <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>

                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-1ac0c6">
                                <i class="flaticon-wallet"></i>
                            </div>

                            <h3>Savings Account</h3>
                            <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>

                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <i class="flaticon-shield"></i>
                            </div>

                            <h3>Investment Account</h3>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>

                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Boxes Area -->

    <!-- Start Services Area -->
    <section class="services-area ptb-70">
        <div class="container-fluid p-0">
            <div class="overview-box">
                <div class="overview-content">
                    <div class="content left-content">
                        <h2>Freelancers, entrepreneurs, and sole traders</h2>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="services-list">
                            <li><span><i class="flaticon-check-mark"></i> Free plan available</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Full data privacy compliance</span></li>
                            <li><span><i class="flaticon-check-mark"></i> 100% transparent costs</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Commitment-free</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Real-time spending overview</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Debit Mastercard included</span></li>
                        </ul>
                    </div>
                </div>

                <div class="overview-image">
                    <div class="image">
                        <img src="frontend/images/1.png" alt="image">

                        <div class="circle-img">
                            <img src="frontend/images/circle.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Services Area -->
    <section class="services-area ptb-70" style="background-color: rgb(115, 194, 176)">
        <div class="container-fluid p-0">
            <div class="overview-box">
                <div class="overview-image">
                    <div class="image">
                        <img src="frontend/images/2.png" alt="image">

                        <div class="circle-img">
                            <img src="frontend/images/circle.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="overview-content">
                    <div class="content">
                        <h2>Small- to medium-sized businesses</h2>
                        <div class="bar"></div>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        <ul class="services-list">
                            <li><span><i class="flaticon-check-mark"></i> Easy transfers</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Deposit checks instantly</span></li>
                            <li><span><i class="flaticon-check-mark"></i> A powerful open API</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Coverage around the world</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Business without borders</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Affiliates and partnerships</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Services Area -->
    {{-- <section class="services-area ptb-70">
        <div class="container-fluid p-0">
            <div class="overview-box">
                <div class="overview-content">
                    <div class="content left-content">
                        <h2>Large or enterprise level businesses</h2>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="services-list">
                            <li><span><i class="flaticon-check-mark"></i> Corporate Cards</span></li>
                            <li><span><i class="flaticon-check-mark"></i> International Payments</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Automated accounting</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Request Features</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Premium Support</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Direct Debit</span></li>
                        </ul>
                    </div>
                </div>

                <div class="overview-image">
                    <div class="image">
                        <img src="images/3.png" alt="image">

                        <div class="circle-img">
                            <img src="images/circle.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Services Area -->

    <!-- Start Comparisons Area -->
    {{-- <section class="comparisons-area ptb-70 bg-f7fafd">
        <div class="container">
            <div class="section-title">
                <h2>Compare us with others</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="comparisons-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Packages</th>
                            <th scope="col">Freelancer</th>
                            <th scope="col">Householder</th>
                            <th scope="col">Business Man</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>Control payout timing</td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                        </tr>
                        <tr>
                            <td>Transparent payouts</td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-cancel"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                        </tr>
                        <tr>
                            <td>Automate evidence submission</td>
                            <td><i class="flaticon-cancel"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                        </tr>
                        <tr>
                            <td>Collaboration notes</td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-cancel"></i></td>
                            <td><i class="flaticon-cancel"></i></td>
                        </tr>
                        <tr>
                            <td>Deposit tagging</td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-cancel"></i></td>
                        </tr>
                        <tr>
                            <td>Technical support over IRC</td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                        </tr>
                        <tr>
                            <td>24×7 support</td>
                            <td><i class="flaticon-cancel"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                            <td><i class="flaticon-check-mark"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section> --}}
    <!-- End Comparisons Area -->

    <!-- Start Features Area -->
    <section class="features-area ptb-70 bg-f6f4f8">
        <div class="container">
            <div class="section-title">
                <h2>Our Features</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="flaticon-settings"></i>
                        </div>

                        <h3>Incredible infrastructure</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-features-box">
                        <div class="icon bg-f78acb">
                            <i class="flaticon-envelope-of-white-paper"></i>
                        </div>

                        <h3>Email notifications</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-features-box">
                        <div class="icon bg-cdf1d8">
                            <i class="flaticon-menu"></i>
                        </div>

                        <h3>Simple dashboard</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-features-box">
                        <div class="icon bg-c679e3">
                            <i class="flaticon-info"></i>
                        </div>

                        <h3>Information retrieval</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-features-box">
                        <div class="icon bg-eb6b3d">
                            <i class="flaticon-cursor"></i>
                        </div>

                        <h3>Drag and drop functionality</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="flaticon-alarm"></i>
                        </div>

                        <h3>Deadline reminders</h3>
                        <p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Invoicing Area -->
    {{-- <section class="invoicing-area ptb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="invoicing-content">
                        <h2>Easy Payment to borrow free get a better filling at home</h2>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="invoicing-image">
                        <div class="main-image">
                            <img src="images/1_1.png" class="wow animate__animated animate__zoomIn" alt="image">
                            <img src="images/2_1.png" class="wow animate__animated animate__fadeInLeft" alt="image">
                            <img src="images/3_1.png" class="wow animate__animated animate__fadeInLeft" alt="image">
                            <img src="images/4.png" class="wow animate__animated animate__fadeInRight" alt="image">
                        </div>
                        <div class="main-mobile-image">
                            <img src="images/main-pic.png" class="wow animate__animated animate__zoomIn" alt="image">
                        </div>
                        <div class="circle-image">
                            <img src="images/circle1.png" alt="image">
                            <img src="images/circle2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Invoicing Area -->

    <!-- Start Fun Facts Area -->
    <section class="funfacts-area ptb-70 pt-0">
        <div class="container">
            <div class="section-title">
                <h2>We always try to understand customers expectation</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="180">00</span>K</h3>
                        <p>Downloaded</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="20">00</span>K</h3>
                        <p>Feedback</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="500">00</span>+</h3>
                        <p>Workers</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="70">00</span>+</h3>
                        <p>Contrubutors</p>
                    </div>
                </div>
            </div>

            <div class="contact-cta-box">
                <h3>Have any question about us?</h3>
                <p>Don't hesitate to contact us</p>
                <a href="contact.html" class="btn btn-primary">Contact Us</a>
            </div>

            <div class="map-bg">
                <img src="frontend/images/map.png" alt="map">
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->
    
    <!-- Start Feedback Area -->
    <section class="feedback-area ptb-70 bg-f7fafd">
        <div class="container">
            <div class="section-title">
                <h2>What customers say about Us</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="feedback-slides">
                <div class="client-feedback">
                    <div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="frontend/images/1.jpg" alt="image">
                                </div>

                                <h3>John Lucy</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="frontend/images/2.jpg" alt="image">
                                </div>

                                <h3>John Smith</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="frontend/images/3.jpg" alt="image">
                                </div>

                                <h3>Maxwel Warner</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="frontend/images/4.jpg" alt="image">
                                </div>

                                <h3>Ross Taylor</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="frontend/images/5.jpg" alt="image">
                                </div>

                                <h3>James Anderson</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="frontend/images/1.jpg" alt="image">
                                </div>

                                <h3>Steven Smith</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="frontend/images/2.jpg" alt="image">
                                </div>

                                <h3>Steven Lucy</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <div class="client-img">
                                    <img src="frontend/images/3.jpg" alt="image">
                                </div>

                                <h3>John Terry</h3>
                                <span>Web Developer</span>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="client-thumbnails">
                    <div>
                        <div class="item">
                            <div class="img-fill"><img src="frontend/images/1.jpg" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="frontend/images/2.jpg" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="frontend/images/3.jpg" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="frontend/images/4.jpg" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="frontend/images/5.jpg" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="frontend/images/1.jpg" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="frontend/images/2.jpg" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="frontend/images/3.jpg" alt="client"></div>
                        </div>
                    </div>

                    <button class="prev-arrow slick-arrow">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    
                    <button class="next-arrow slick-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feedback Area -->
    
    <!-- Start Ready To Talk Area -->
    <section class="ready-to-talk">
        <div class="container">
            <div class="ready-to-talk-content">
                <h3>Ready to talk?</h3>
                <p>Our team is here to answer your question about Luvion</p>
                <a href="contact.html" class="btn btn-primary">Contact Us</a>
                <span><a href="#">Or, get started now with a free trial</a></span>
            </div>
        </div>
    </section>
    <!-- End Ready To Talk Area -->
    
    <!-- Start Partner Area -->
    <div class="partner-area">
        <div class="container">

            <h3>More that 1.5 million businesses and organizations use Luvion</h3>

            <div class="partner-inner">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/frontend/images/partner-1.png" alt="partner">
                            <img src="frontend/frontend/images/partner-hover1.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-2.png" alt="partner">
                            <img src="frontend/images/partner-hover2.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-3.png" alt="partner">
                            <img src="frontend/images/partner-hover3.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-4.png" alt="partner">
                            <img src="frontend/images/partner-hover4.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-5.png" alt="partner">
                            <img src="frontend/images/partner-hover5.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-6.png" alt="partner">
                            <img src="frontend/images/partner-hover6.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-7.png" alt="partner">
                            <img src="frontend/images/partner-hover7.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-8.png" alt="partner">
                            <img src="frontend/images/partner-hover8.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-9.png" alt="partner">
                            <img src="frontend/images/partner-hover9.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-10.png" alt="partner">
                            <img src="frontend/images/partner-hover10.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-11.png" alt="partner">
                            <img src="frontend/images/partner-hover11.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-12.png" alt="partner">
                            <img src="frontend/images/partner-hover12.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-13.png" alt="partner">
                            <img src="frontend/images/partner-hover13.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-14.png" alt="partner">
                            <img src="frontend/images/partner-hover14.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-15.png" alt="partner">
                            <img src="frontend/images/partner-hover15.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-16.png" alt="partner">
                            <img src="frontend/images/partner-hover16.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-17.png" alt="partner">
                            <img src="frontend/images/partner-hover17.png" alt="partner">
                        </a>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-3 col-6">
                        <a href="#">
                            <img src="frontend/images/partner-18.png" alt="partner">
                            <img src="frontend/images/partner-hover18.png" alt="partner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start App Download Area -->
    <section class="app-download-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="app-image">
                        <div class="main-image">
                            <img src="frontend/images/mobile-app1.png" class="wow animate__animated animate__fadeInLeft" alt="image">
                            <img src="frontend/images/mobile-app2.png" class="wow animate__animated animate__fadeInUp" alt="image">
                        </div>

                        <div class="main-mobile-image">
                            <img src="frontend/images/main-mobile.png" class="wow animate__animated animate__fadeInUp" alt="image">
                        </div>

                        <div class="circle-img">
                            <img src="frontend/images/circle.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="app-download-content">
                        <h2>You can find all the thing you need to payout</h2>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                        <div class="btn-box">
                            <a href="#" class="app-store-btn">
                                <i class="flaticon-apple"></i>
                                Download on
                                <span>App Store</span>
                            </a>

                            <a href="#" class="play-store-btn">
                                <i class="flaticon-play-store"></i>
                                Download on
                                <span>Google play</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End App Download Area -->

           <!-- Start Blog Area -->
		<section class="blog-area ptb-70 pt-0">
			<div class="container">
				<div class="section-title">
					<h2>The News from Our Blog</h2>
					<div class="bar"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

				<div class="row" >
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
						<div style="width: 24rem; height: 25rem; padding:0;" class="single-blog-post">
							<div  style="width:100%; height:60%; position: relative;">
								<a href="single-blog.html">
									<img style="width: 100%; height:100%" src="{{asset('uploads/' . $blog->thumbnail)}}" alt="image">
								</a>

								<div class="date" style="
                                position: absolute;
                                left: 20px;
                                bottom: -20px;
                                background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%);
                                color: #ffffff;
                                padding: 10px 16px 8px;
                                border-radius: 50px;
                                font-size: 13px;">
									<i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse($blog->created_at)->format('F d, Y')}}
								</div>
							</div>

							<div class="blog-post-content">
								<h6 style="font-weight: 600"><a href="single-blog.html">{{$blog->title}}</a></h6>

								<span>by <a href="#">Prudential Bank Ghana</a></span>

								<a href="{{ route('blogdetails',  $blog->slug) }}" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</section>
        <!-- End Blog Area -->

    <!-- Start Account Create Area -->
    <section class="account-create-area">
        <div class="container">
            <div class="account-create-content">
                <h2>Apply for an account in minutes</h2>
                <p>Get your Luvion account today!</p>
                <a href="login.html" class="btn btn-primary">Get Your Luvion Account</a>
            </div>
        </div>
    </section>

    
    <!-- End Account Create Area -->
   @endsection
