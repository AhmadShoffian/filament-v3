
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Blog Single - HostGrids Hosting & Domain Services HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

     <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin />
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link rel="preconnect" href="https://fonts.bunny.net" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('../detailticket/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('../css/output.css') }}" />

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
                                <img src="assets/images/logo/white-logo.svg" alt="Logo">
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
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                        <ul class="sub-menu collapse" id="submenu-1-1">
                                            <li class="nav-item"><a href="domain.html">Domain</a></li>
                                            <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                            <li class="nav-item"><a href="pricing.html">Pricing</a></li>
                                            <li class="nav-item"><a href="faq.html">Faq</a></li>
                                            <li class="nav-item"><a href="signin.html">Sign In</a></li>
                                            <li class="nav-item"><a href="signup.html">Sign Up</a></li>
                                            <li class="nav-item"><a href="reset-password.html">Reset Password</a>
                                            <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                            <li class="nav-item"><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Hosting</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="shared-hosting.html">Shared Hosting</a></li>
                                            <li class="nav-item"><a href="dedicated-hosting.html">Dedicated Servers</a>
                                            </li>
                                            <li class="nav-item"><a href="vps-hosting.html">VPS Servers</a></li>
                                            <li class="nav-item"><a href="reseller-hosting.html">Reseller Hosting</a>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu active collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-3"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="blog-grid.html">Blog Grid</a>
                                            </li>
                                            <li class="nav-item active"><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
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
                        <h1 class="page-title">Blog Single Sidebar</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog Single Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Blog Singel Area -->
    <section class="section blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="single-inner">
                        <div class="post-details">
                            <div class="main-content-head">
                                <div class="post-thumbnils">
                                    <img src="assets/images/blog/blog-details.jpg" alt="#">
                                    <div class="meta-information">
                                        <!-- End Meta Info -->
                                        <ul class="meta-info">
                                            <li>
                                                <a href="javascript:void(0)">By Martin King</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">20 Jun 2023</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Marketing</a>
                                            </li>
                                        </ul>
                                        <!-- End Meta Info -->
                                    </div>
                                </div>
                                <div class="detail-inner">
                                    <h2 class="post-title">To Most Best Sale Domain Article In October 2020</h2>
                                    <p>With over 25,000 customers worldwide, Appex is the world leading analytics and
                                        marketing suite for Instagram and a partner of the world's most-loved brands
                                        such as National Geographic, Gucci, Marc Jacobs, Samsung, Emirates and more.</p>
                                    <p>As a Customer Support Specialist, we expect you to be up-to-date with the latest
                                        digital technologies and social media trends. You should have excellent
                                        communication skills and be able to assist our customers in a fast, efficient
                                        and professional manner. If you enjoy fixing issues and helping improve the
                                        overall customer experience, this job is for you!</p>
                                    <h3>How We Do A Concert In Pandemic
                                    </h3>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At
                                        the end of the day, going forward, a new normal that has evolved from generation
                                        X is on the runway

                                    </p>
                                    <p>Heading towards a streamlined cloud solution. User generated content in real-time
                                        will have multiple touchpoints for offshoring Capitalize on low hanging fruit to
                                        identify a ballpark value added activity to beta test. Override the digital
                                        divide with additional

                                    </p>
                                    <h3>Security and Reliability
                                    </h3>
                                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to
                                        beta test. Override the digital divide with additional clickthroughs from
                                        DevOps. Nanotechnology immersion along the information highway will close the
                                        loop on focusing solely on the bottom line.

                                    </p>
                                    <blockquote>
                                        <img class="shape" src="assets/images/shapes/shape.png" alt="#">
                                        <img class="shape2" src="assets/images/shapes/shape.png" alt="#">
                                        <div class="icon">
                                            <i class="lni lni-quotation"></i>
                                        </div>
                                        <h4>"Don't demand that things happen as you wish, but wish that they happen as
                                            they
                                            do
                                            happen, and you will go on well."</h4>
                                        <span>- Epictetus, The Enchiridion</span>
                                    </blockquote>
                                    <h3>Setting the mood with incense</h3>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At
                                        the end of the day, going forward, a new normal that has evolved from generation
                                        X is on the runway heading towards a streamlined cloud solution. User generated
                                        content in real-time</p>
                                    <p>Completely synergize resource taxing relationships via premier niche markets.
                                        Professionally cultivate one-to-one customer service with robust ideas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Comments -->
                    <div class="post-comments">
                        <h3 class="comment-title"><span>02 Comments on this post</span></h3>
                        <ul class="comments-list">
                            <li>
                                <div class="comment-img">
                                    <img src="assets/images/blog/comment1.jpg" alt="img">
                                </div>
                                <div class="comment-desc">
                                    <div class="desc-top">
                                        <h6>Wiliym Smith</h6>
                                        <span class="date">28 Dec 2023</span>
                                        <a href="javascript:void(0)" class="reply-link"><i
                                                class="lni lni-reply"></i>Reply</a>
                                    </div>
                                    <p>
                                        Donec aliquam ex ut odio dictum, ut consequat leo interdum. Aenean nunc
                                        ipsum, blandit eu enim sed, facilisis convallis orci. Etiam commodo
                                        lectus
                                        quis vulputate tincidunt. Mauris tristique velit eu magna maximus
                                        condimentum.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="comment-img">
                                    <img src="assets/images/blog/comment2.jpg" alt="img">
                                </div>
                                <div class="comment-desc">
                                    <div class="desc-top">
                                        <h6>Jenifer Lofez</h6>
                                        <span class="date">25 Mar 2023</span>
                                        <a href="javascript:void(0)" class="reply-link"><i
                                                class="lni lni-reply"></i>Reply</a>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Comments -->
                    <!-- Start Comment Form -->
                    <div class="comment-form">
                        <h3 class="comment-reply-title">Leave a comment</h3>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-box form-group">
                                        <input type="text" name="name" class="form-control form-control-custom"
                                            placeholder="Name*" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-box form-group">
                                        <input type="email" name="email" class="form-control form-control-custom"
                                            placeholder="Email*" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box form-group">
                                        <textarea name="#" class="form-control form-control-custom"
                                            placeholder="Comments*"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button">
                                        <button type="submit" class="btn">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Comment Form -->
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
                                        <a href="blog-single.html"><img src="assets/images/blog/sidebar-1.jpg"
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
                                        <a href="blog-single.html"><img src="assets/images/blog/sidebar-2.jpg"
                                                alt="#"></a>
                                    </div>
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="blog-single.html">Should You Turn a Domain into
                                                a Business?</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 24th March 2023</span>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="post-image">
                                        <a href="blog-single.html"><img src="assets/images/blog/sidebar-3.jpg"
                                                alt="#"></a>
                                    </div>
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="blog-single.html">Businesses that Use New Domain
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
                                    <a href="javascript:void(0)">Web Security <span class="badge rounded">28</span></a>
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
    <!-- End Blog Singel Area -->


    <!-- Tab Contents -->
        <section class="py-8 bg-white">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Informasi Umum Tab - Clean Modern Design with Enhanced Icons -->
            <div x-show="activeTab === 'about'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
              <div class="bg-white">
                <!-- Modern Header - Matched with UMKM Style -->
                <div class="mb-5">
                  <!-- Title and Button in One Row -->
                  <div class="flex items-center justify-between mb-3">
                    <!-- Left: Title Badge with Icon -->
                    <div class="flex items-center">
                      <div class="h-6 w-1 bg-emerald-500 rounded-full mr-2"></div>
                      <span class="bg-emerald-50 px-2.5 py-1 rounded-full text-emerald-800 text-sm font-semibold flex items-center">
                        <i class="fas fa-home-alt text-emerald-600 mr-1.5"></i>
                        TENTANG DESA
                      </span>
                    </div>
                  </div>
                </div>

                <!-- Main Content with Clean Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mt-6">
                  <!-- Image Column with Slider Gallery & Header -->
                  <div class="lg:col-span-5 xl:col-span-4">
                    <!-- Village Identity at Top -->
                    <div class="bg-gray-50 shadow-sm rounded-lg p-5 mb-4 border border-gray-100 text-center">
                      <img src="/src/images/logo-desa.jpg" alt="Logo Desa" class="h-20 w-20 object-contain mx-auto mb-3" />
                      <h3 class="font-semibold text-xl text-gray-900 mb-1">Desa Digital</h3>
                      <p class="text-sm text-gray-500">Kecamatan Contoh, Kabupaten Contoh</p>
                    </div>

                    <!-- Image Slider for Thumbnails -->
                    <div
                      x-data="{ currentIndex: 0, totalImages: 5, 
                                                prev() { this.currentIndex = (this.currentIndex - 1 + this.totalImages) % this.totalImages },
                                                next() { this.currentIndex = (this.currentIndex + 1) % this.totalImages },
                                                touchStart: null,
                                                touchEnd: null,
                                                touchStart(e) { this.touchStart = e.changedTouches[0].screenX },
                                                touchEnd(e) {
                                                    this.touchEnd = e.changedTouches[0].screenX;
                                                    if (this.touchStart - this.touchEnd > 50) {
                                                        this.next();
                                                    } else if (this.touchEnd - this.touchStart > 50) {
                                                        this.prev();
                                                    }
                                                }
                                            }"
                      class="relative mb-4 rounded-lg overflow-hidden shadow-sm"
                    >
                      <!-- Main Slider Container -->
                      <div class="relative aspect-w-16 aspect-h-9 bg-gray-100">
                        <!-- Images -->
                        <div
                          x-show="currentIndex === 0"
                          x-transition:enter="transition ease-out duration-300"
                          x-transition:enter-start="opacity-0 transform scale-95"
                          x-transition:enter-end="opacity-100 transform scale-100"
                          class="w-full h-full"
                        >
                          <img src="/src/images/hero/1.jpg" alt="Desa Digital - Image 1" class="w-full h-full object-cover" />
                        </div>
                        <div
                          x-show="currentIndex === 1"
                          x-transition:enter="transition ease-out duration-300"
                          x-transition:enter-start="opacity-0 transform scale-95"
                          x-transition:enter-end="opacity-100 transform scale-100"
                          class="w-full h-full"
                        >
                          <img src="/src/images/hero/2.jpg" alt="Desa Digital - Image 2" class="w-full h-full object-cover" />
                        </div>
                        <div
                          x-show="currentIndex === 2"
                          x-transition:enter="transition ease-out duration-300"
                          x-transition:enter-start="opacity-0 transform scale-95"
                          x-transition:enter-end="opacity-100 transform scale-100"
                          class="w-full h-full"
                        >
                          <img src="/src/images/hero/3.jpg" alt="Desa Digital - Image 3" class="w-full h-full object-cover" />
                        </div>
                        <div
                          x-show="currentIndex === 3"
                          x-transition:enter="transition ease-out duration-300"
                          x-transition:enter-start="opacity-0 transform scale-95"
                          x-transition:enter-end="opacity-100 transform scale-100"
                          class="w-full h-full"
                        >
                          <img src="/src/images/hero/4.jpg" alt="Desa Digital - Image 4" class="w-full h-full object-cover" />
                        </div>
                        <div
                          x-show="currentIndex === 4"
                          x-transition:enter="transition ease-out duration-300"
                          x-transition:enter-start="opacity-0 transform scale-95"
                          x-transition:enter-end="opacity-100 transform scale-100"
                          class="w-full h-full"
                        >
                          <img src="/src/images/hero/5.jpg" alt="Desa Digital - Image 5" class="w-full h-full object-cover" />
                        </div>
                      </div>

                      <!-- Controls -->
                      <button @click.stop="prev()" class="absolute left-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-black/60 transition-colors z-20">
                        <i class="fas fa-chevron-left"></i>
                      </button>
                      <button @click.stop="next()" class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-black/60 transition-colors z-20">
                        <i class="fas fa-chevron-right"></i>
                      </button>

                      <!-- Indicator Dots -->
                      <div class="absolute bottom-3 left-0 right-0 flex justify-center gap-2 z-20">
                        <button
                          @click.stop="currentIndex = 0"
                          :class="{'bg-white': currentIndex === 0, 'bg-white/50 hover:bg-white/70': currentIndex !== 0 }"
                          class="w-2.5 h-2.5 rounded-full transition-all"
                          aria-label="Show image 1"
                        ></button>
                        <button
                          @click.stop="currentIndex = 1"
                          :class="{'bg-white': currentIndex === 1, 'bg-white/50 hover:bg-white/70': currentIndex !== 1 }"
                          class="w-2.5 h-2.5 rounded-full transition-all"
                          aria-label="Show image 2"
                        ></button>
                        <button
                          @click.stop="currentIndex = 2"
                          :class="{'bg-white': currentIndex === 2, 'bg-white/50 hover:bg-white/70': currentIndex !== 2 }"
                          class="w-2.5 h-2.5 rounded-full transition-all"
                          aria-label="Show image 3"
                        ></button>
                        <button
                          @click.stop="currentIndex = 3"
                          :class="{'bg-white': currentIndex === 3, 'bg-white/50 hover:bg-white/70': currentIndex !== 3 }"
                          class="w-2.5 h-2.5 rounded-full transition-all"
                          aria-label="Show image 4"
                        ></button>
                        <button
                          @click.stop="currentIndex = 4"
                          :class="{'bg-white': currentIndex === 4, 'bg-white/50 hover:bg-white/70': currentIndex !== 4 }"
                          class="w-2.5 h-2.5 rounded-full transition-all"
                          aria-label="Show image 5"
                        ></button>
                      </div>

                      <!-- Swipe Area for Touch Devices -->
                      <div class="absolute inset-0 z-10" x-on:touchstart="touchStart($event)" x-on:touchend="touchEnd($event)"></div>
                    </div>
                  </div>

                  <!-- Information Column -->
                  <div class="lg:col-span-7 xl:col-span-8 space-y-6">
                    <!-- General Information Card -->
                    <div class="bg-gray-50 shadow-sm rounded-lg overflow-hidden border border-gray-100">
                      <div class="px-6 py-4 border-b border-gray-100 flex items-center">
                        <i class="fas fa-file-alt text-emerald-500 mr-2"></i>
                        <h3 class="font-medium text-gray-900">Informasi Desa</h3>
                      </div>
                      <div class="p-6">
                        <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                          <div>
                            <dt class="text-sm font-medium text-gray-500 flex items-center">
                              <i class="fas fa-signature text-emerald-400 mr-1.5 text-xs"></i>
                              Nama Desa
                            </dt>
                            <dd class="mt-1 text-gray-900">Desa Digital</dd>
                          </div>
                          <div>
                            <dt class="text-sm font-medium text-gray-500 flex items-center">
                              <i class="fas fa-map text-emerald-400 mr-1.5 text-xs"></i>
                              Kecamatan
                            </dt>
                            <dd class="mt-1 text-gray-900">Kecamatan Contoh</dd>
                          </div>
                          <div>
                            <dt class="text-sm font-medium text-gray-500 flex items-center">
                              <i class="fas fa-city text-emerald-400 mr-1.5 text-xs"></i>
                              Kabupaten
                            </dt>
                            <dd class="mt-1 text-gray-900">Kabupaten Contoh</dd>
                          </div>
                          <div>
                            <dt class="text-sm font-medium text-gray-500 flex items-center">
                              <i class="fas fa-map-marked text-emerald-400 mr-1.5 text-xs"></i>
                              Provinsi
                            </dt>
                            <dd class="mt-1 text-gray-900">Provinsi Contoh</dd>
                          </div>
                          <div>
                            <dt class="text-sm font-medium text-gray-500 flex items-center">
                              <i class="fas fa-mail-bulk text-emerald-400 mr-1.5 text-xs"></i>
                              Kode Pos
                            </dt>
                            <dd class="mt-1 text-gray-900">12345</dd>
                          </div>
                        </dl>
                      </div>
                    </div>

                    <!-- Contact Information Card -->
                    <div class="bg-gray-50 shadow-sm rounded-lg overflow-hidden border border-gray-100">
                      <div class="px-6 py-4 border-b border-gray-100 flex items-center">
                        <i class="fas fa-address-card text-emerald-500 mr-2"></i>
                        <h3 class="font-medium text-gray-900">Kontak & Alamat</h3>
                      </div>
                      <div class="p-6">
                        <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                          <div>
                            <dt class="text-sm font-medium text-gray-500 flex items-center">
                              <i class="fas fa-phone-alt text-emerald-400 mr-1.5 text-xs"></i>
                              Telepon
                            </dt>
                            <dd class="mt-1 text-gray-900">
                              <a href="tel:+6287815454498" class="text-emerald-600 hover:underline flex items-center group">
                                <span>+62 878 1545 4498</span>
                                <i class="fas fa-headset ml-1.5 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                              </a>
                            </dd>
                          </div>
                          <div>
                            <dt class="text-sm font-medium text-gray-500 flex items-center">
                              <i class="fas fa-envelope text-emerald-400 mr-1.5 text-xs"></i>
                              Email
                            </dt>
                            <dd class="mt-1 text-gray-900">
                              <a href="mailto:cepatberes2024@gmail.com" class="text-emerald-600 hover:underline flex items-center group">
                                <span>cepatberes2024@gmail.com</span>
                                <i class="fas fa-paper-plane ml-1.5 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                              </a>
                            </dd>
                          </div>
                          <div>
                            <dt class="text-sm font-medium text-gray-500 flex items-center">
                              <i class="fas fa-globe text-emerald-400 mr-1.5 text-xs"></i>
                              Website
                            </dt>
                            <dd class="mt-1 text-gray-900">
                              <a href="https://desadigital.com" target="_blank" class="text-emerald-600 hover:underline flex items-center group">
                                <span>www.desadigital.com</span>
                                <i class="fas fa-external-link-alt ml-1.5 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                              </a>
                            </dd>
                          </div>
                          <div class="md:col-span-2">
                            <dt class="text-sm font-medium text-gray-500 flex items-center">
                              <i class="fas fa-map-marker-alt text-emerald-400 mr-1.5 text-xs"></i>
                              Alamat Kantor Desa
                            </dt>
                            <dd class="mt-1 text-gray-900">Jl. Desa Digital No. 123, Kecamatan Contoh, Kabupaten Contoh, Provinsi Contoh 12345</dd>
                          </div>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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
                                <a class="call" href="tel:8884014678"><i class="lni lni-phone-set"></i> 888-401-4678</a>
                                <div class="payments">
                                    <img src="assets/images/footer/cards.png" alt="#">
                                </div>
                                <ul class="social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
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
                                        <h4 class="post-title"><a href="blog-single.html">An artistic Technology turning
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
    <script src="{{ asset('../detailticket/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/wow.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('../detailticket/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/count-up.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/main.js') }}"></script>
    {{-- <script src="{{ asset('../detailticket/js/main.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>