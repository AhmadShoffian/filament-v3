<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Blog Grid - HostGrids Hosting & Domain Services HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" /> --}}

    <link rel="stylesheet" href="{{ asset('../detailticket/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/main.css') }}" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="images/white-logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="index.html" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Hosting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" aria-label="Toggle navigation">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                <a href="signup.html" class="btn">Get started</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Blog Grid Sidebar</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog Grid Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Blog Grid Area -->
    <section class="section blog-grid-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="row">
                        {{-- <div class="col-lg-6 col-md-6 col-12">
                            <!-- Start Single Blog Grid -->
                            <div class="single-blog-grid">
                                <div class="blog-img">
                                    <a href="blog-single.html">
                                        <img src="{{ asset('detailticket/images/blog-1.jpg') }}" alt="#">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="meta-info">
                                        <a class="date" href="javascript:void(0)">Hosting</a>
                                    </div>
                                    <h4>
                                        <a href="blog-single.html">Best Reseller Hosting for Start Business in 2021</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod
                                        tempor
                                        ividunt dolore...</p>
                                </div>
                            </div>
                            <!-- End Single Blog Grid -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <!-- Start Single Blog Grid -->
                            <div class="single-blog-grid">
                                <div class="blog-img">
                                    <a href="blog-single.html">
                                        <img src="{{ asset('detailticket/images/blog-1.jpg') }}" alt="#">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="meta-info">
                                        <a class="date" href="javascript:void(0)">Marketing</a>
                                    </div>
                                    <h4>
                                        <a href="blog-single.html">5 Awesome Tips For Improving Your Website’s
                                            Readability</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod
                                        tempor
                                        ividunt dolore...</p>
                                </div>
                            </div>
                            <!-- End Single Blog Grid -->
                        </div> --}}
                        @foreach ($tickets as $ticket)
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Start Single Blog Grid -->
                                <div class="single-blog-grid">
                                    <div class="blog-img">
                                        <a href="{{ route('tickets.show', $ticket->id) }}">
                                            @php
                                                $firstImage = $ticket->images->first();
                                            @endphp

                                            <img src="{{ $firstImage ? asset('images/' . $firstImage->filename) : asset('detailticket/images/default-image.png') }}"
                                                alt="Gambar Tiket">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="meta-info">
                                            <a class="date" href="javascript:void(0)">Ticket
                                                #{{ $ticket->id }}</a>
                                        </div>
                                        <h4>
                                            <a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->title }}</a>
                                        </h4>
                                        <p>{{ Str::limit($ticket->description, 100) }}</p>

                                        <!-- Tombol Detail -->
<a href="{{ route('portal.kcdetail', ['ticket' => $ticket->uuid]) }}" class="btn btn-primary mt-2">Detail</a>
                                    </div>
                                </div>
                                <!-- End Single Blog Grid -->
                            </div>
                        @endforeach


                        {{-- <div class="col-lg-6 col-md-6 col-12">
                            <!-- Start Single Blog Grid -->
                            <div class="single-blog-grid">
                                <div class="blog-img">
                                    <a href="blog-single.html">
                                        <img src="{{ asset('detailticket/images/blog-1.jpg') }}" alt="#">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="meta-info">
                                        <a class="date" href="javascript:void(0)">Hosting</a>
                                    </div>
                                    <h4>
                                        <a href="blog-single.html">Best Reseller Hosting for Start Business in 2021</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod
                                        tempor
                                        ividunt dolore...</p>
                                </div>
                            </div>
                            <!-- End Single Blog Grid -->
                        </div> --}}
                        {{-- <div class="col-lg-6 col-md-6 col-12">
                            <!-- Start Single Blog Grid -->
                            <div class="single-blog-grid">
                                <div class="blog-img">
                                    <a href="blog-single.html">
                                        <img src="{{ asset('detailticket/images/blog-1.jpg') }}" alt="#">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="meta-info">
                                        <a class="date" href="javascript:void(0)">Marketing</a>
                                    </div>
                                    <h4>
                                        <a href="blog-single.html">5 Awesome Tips For Improving Your Website’s
                                            Readability</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod
                                        tempor
                                        ividunt dolore...</p>
                                </div>
                            </div>
                            <!-- End Single Blog Grid -->
                        </div> --}}
                        {{-- <div class="col-lg-6 col-md-6 col-12">
                            <!-- Start Single Blog Grid -->
                            <div class="single-blog-grid">
                                <div class="blog-img">
                                    <a href="blog-single.html">
                                        <img src="{{ asset('detailticket/images/blog-1.jpg') }}" alt="#">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="meta-info">
                                        <a class="date" href="javascript:void(0)">Website</a>
                                    </div>
                                    <h4>
                                        <a href="blog-single.html">4 Ways To Boost Engagement On Your Website</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod
                                        tempor
                                        ividunt dolore...</p>
                                </div>
                            </div>
                            <!-- End Single Blog Grid -->
                        </div> --}}
                    </div>
                    <!-- Pagination -->
                    {{-- <div class="pagination left">
                        <ul class="pagination-list">
                            <li><a href="javascript:void(0)">Prev</a></li>
                            <li class="active"><a href="javascript:void(0)">1</a></li>
                            <li><a href="javascript:void(0)">2</a></li>
                            <li><a href="javascript:void(0)">3</a></li>
                            <li><a href="javascript:void(0)">Next</a></li>
                        </ul>
                    </div> --}}
                    <!--/ End Pagination -->





                    <!-- Pagination -->
                    {{ $tickets->links() }}





                </div>
                <aside class="col-lg-4 col-md-12 col-12">
                    <div class="sidebar">
                        <!-- Start Single Widget -->
                        <div class="widget search-widget">
                            <form action="#">
                                <input type="text" placeholder="Search ...">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="widget popular-feeds">
                            <h5 class="widget-title">Recent Posts</h5>
                            <div class="popular-feed-loop">
                                <div class="single-popular-feed">
                                    <div class="post-image">
                                        <a href="blog-single.html"><img
                                                src="{{ asset('detailticket/images/sidebar-1.jpg') }}"
                                                alt="#"></a>
                                    </div>
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="blog-single.html">Owning a Domain is Key to
                                                Democratizing the Web</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 05th Nov 2023</span>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="post-image">
                                        <a href="blog-single.html"><img
                                                src="{{ asset('detailticket/images/blog-1.jpg') }}"
                                                alt="#"></a>
                                    </div>
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="blog-single.html">Should You Turn a Domain
                                                into
                                                a Business?</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 24th March 2023</span>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="post-image">
                                        <a href="blog-single.html"><img
                                                src="{{ asset('detailticket/images/blog-1.jpg') }}"
                                                alt="#"></a>
                                    </div>
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="blog-single.html">Businesses that Use New
                                                Domain
                                                Extensions</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 30th Jan 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="widget categories-widget">
                            <h5 class="widget-title">Categories</h5>
                            <ul class="custom">
                                <li>
                                    <a href="javascript:void(0)">Development <span class="badge rounded">10</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Domain <span class="badge rounded">12</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Hosting <span class="badge rounded">35</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Web Security <span
                                            class="badge rounded">28</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Technology <span class="badge rounded">15</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Cyber Security <span
                                            class="badge rounded">55</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="widget popular-tag-widget">
                            <h5 class="widget-title">Popular Tags</h5>
                            <div class="tags">
                                <a href="javascript:void(0)">Hosting</a>
                                <a href="javascript:void(0)">Domain</a>
                                <a href="javascript:void(0)">VPS</a>
                                <a href="javascript:void(0)">Cloud</a>
                                <a href="javascript:void(0)">Dedicated</a>
                                <a href="javascript:void(0)">Css</a>
                                <a href="javascript:void(0)">Html</a>
                                <a href="javascript:void(0)">WordPress</a>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- End Blog Grid Area -->

    <!-- Start Footer Area -->
    <footer class="footer section">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-about">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/white-logo.svg" alt="#">
                                    </a>
                                </div>
                                <p>We are Hostpack 29 years of experience on this field with most talanted peoples and
                                    leaders.
                                </p>
                                <a class="call" href="tel:8884014678"><i class="lni lni-phone-set"></i>
                                    888-401-4678</a>
                                <div class="payments">
                                    <img src="assets/images/footer/cards.png" alt="#">
                                </div>
                                <ul class="social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                </ul>
                                <p class="copyright-text">© 2023 HostGrids.<br>
                                    Designed and Developed by <a href="https://graygrids.com/"
                                        target="_blank">GrayGrids</a></p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Pages</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">About Us</a></li>
                                    <li><a href="javascript:void(0)">Services</a></li>
                                    <li><a href="javascript:void(0)">Pricing <span style="margin-left: 4px;"
                                                class="badge bg-success rounded text-white">Try Me</span></a></li>
                                    <li><a href="javascript:void(0)">Contact</a></li>
                                </ul>
                                <h4 class="mt-40 mb-20 text-white" style="font-size: 18px;">Hosting</h4>
                                <ul>
                                    <li><a href="javascript:void(0)">Shared Hosting</a></li>
                                    <li><a href="javascript:void(0)">Dedicated Hosting</a></li>
                                    <li><a href="javascript:void(0)">Reseller Hosting</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Security</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                                    <li><a href="javascript:void(0)">Disclaimer</a></li>
                                    <li><a href="javascript:void(0)">FAQ</a></li>
                                </ul>
                                <h4 class="mt-40 mb-20 text-white" style="font-size: 18px;">Support</h4>
                                <ul>
                                    <li><a href="javascript:void(0)">Support Center</a></li>
                                    <li><a href="javascript:void(0)">Status Updates</a></li>
                                    <li><a href="javascript:void(0)">Knowledgebase</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer latest-news">
                                <h3>Latest News</h3>
                                <div class="single-head">
                                    <!-- Start Single News -->
                                    <div class="single-news">
                                        <span class="date"><a href="javascript:void(0)">NOVEMBER 29, 2023</a></span>
                                        <h4 class="post-title"><a href="blog-single.html">An artistic Technology
                                                turning
                                                real here</a>
                                        </h4>
                                    </div>
                                    <!-- End Single News -->
                                    <!-- Start Single News -->
                                    <div class="single-news">
                                        <span class="date"><a href="javascript:void(0)">NOVEMBER 22, 2023</a></span>
                                        <h4 class="post-title"><a href="blog-single.html">better time for buying a web
                                                hosting is
                                                today</a>
                                        </h4>
                                    </div>
                                    <!-- End Single News -->
                                    <!-- Start Single News -->
                                    <div class="single-news">
                                        <span class="date"><a href="javascript:void(0)">NOVEMBER 15, 2023</a></span>
                                        <h4 class="post-title"><a href="blog-single.html">better time for buying a web
                                                hosting is
                                                today</a>
                                        </h4>
                                    </div>
                                    <!-- End Single News -->
                                </div>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Start Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-12">
                            <p class="text">Offers valid for a limited time only hostpack reflect multi annual
                                discounts. Other terms and conditions may apply. <a href="javascript:void(0)">Click
                                    Here</a>

                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="align-right">
                                <img src="assets/images/footer/certificate3.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom Area -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    {{-- <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script> --}}

    <script src="{{ asset('../detailticket/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/wow.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('../detailticket/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/count-up.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/main.js') }}"></script>
</body>

</html>
