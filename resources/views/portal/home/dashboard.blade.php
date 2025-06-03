<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ticketing | ISI Yogyakarta</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- AJAX Notifikasi -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('../frontend/assets/img/logo/icon-isi.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="{{ asset('../frontend/assets/css/bootstrap-5.0.0-alpha.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('../frontend/assets/css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('../frontend/assets/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('../frontend/assets/css/tiny-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('../frontend/assets/css/glightbox.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../frontend/assets/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('../frontend/assets/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    </head>
    <body>
        <!-- ========================= preloader start ========================= -->
            <div class="preloader">
                <div class="loader">
                    <div class="ytp-spinner">
                        <div class="ytp-spinner-container">
                            <div class="ytp-spinner-rotator">
                                <div class="ytp-spinner-left">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                                <div class="ytp-spinner-right">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- preloader end -->

        <!-- ========================= header start ========================= -->
        <header class="header navbar-area bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('../frontend/assets/img/logo/logo_new.svg') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li> 
                                     <li class="nav-item">
                                        <a class="page-scroll" href="#alur-tiketing">Alur Tiketing</a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#faqs">FAQS</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="page-scroll" href="{{ route('../front.layouts.contact_login') }}">Contact</a>
                                    </li> --}}
                                </ul>

                            </div> <!-- navbar collapse -->
                                {{-- <!-- Notification -->
                                <div class="notification">
                                    <div class="nav-item">
                                        <i class="lni lni-alarm" id="notificationIcon"></i>
                                        <span class="badge" id="notificationBadge">0</span>
                                    </div>
                                    <div class="dropdown-menu" id="notificationDropdown">
                                        <div class="dropdown-header">
                                            <span>Notifications</span>
                                            <a href="#" class="mark-read" onclick="markAllAsRead()">Mark All As Read</a>
                                        </div>
                                        <ul class="notification-list" id="notificationList">
                                            
                                        </ul>
                                        <div class="dropdown-footer">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div> --}}
                                
                                <!-- button profile -->
                                <ul class="sign-in">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni lni-user"></i> My Account</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="lni lni-briefcase"></i>Profil</a>
                                        <a class="dropdown-item" href="#"><i class="lni lni-rocket"></i> Akun</a>
                                        <a class="dropdown-item logout-btn" id="logoutButton" href="#"><i class="lni lni-close"></i>Logout</a>
                                    </div>
                                    </li>
                                </ul>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        
        </header>
        <!-- ========================= header end ========================= -->


         <!-- Start Hero Area -->
        <section class="hero-area style3">
            <div class="hero-inner" style="background-image:url('{{ asset('../frontend/assets/img/carousel/pkkmb_2024_12-scaled.jpg') }}');">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 co-12">
                            <div class="home-slider">
                                <div class="hero-text">
                                    <!-- <h5 class="wow fadeInUp" data-wow-delay=".2s">We're here to help our clients.</h5> -->
                                    <h1 class="wow fadeInUp" data-wow-delay=".4s">Helpdesk UPA TIK ISI Yogyakarta</h1>
                                    <p class="wow fadeInUp" data-wow-delay=".6s">Helpdesk UPA TIK berkomitmen untuk memberikan dukungan terkait sistem informasi, jaringan internet, perangkat keras dan lunak, serta layanan TIK lainnya guna mendukung kelancaran kegiatan akademik dan administratif.</p>
                                    <div class="subscribe-section mt-5">
                                        <form action="#" method="GET" class="subscribe-form wow fadeInRight" data-wow-delay=".4s">
                                            <input type="text" name="ticket_number" id="ticket_number" value="{{ request('ticket_number') }}" placeholder="Cari Nomor Ticket" required>
                                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                                        </form>   
                                                      {{-- {{ route('searchTicket') }} --}}
                                    </div>
                                    @if(Auth::guard('portal')->check())
                                        <div class="button text-center mt-3">
                                            <a href="{{ route('ticket.create') }}" class="theme-btn">Buat Tiket Permohonan</a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Hero Area -->
        

        <!--========================= about-section start========================= -->
        <section id="about">
            <div class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-img-wrapper">
                                <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="{{ asset('../frontend/assets/img/carousel/ilustrasi1.2 1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-content-wrapper">
                                <div class="section-title">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">Tentang Kami</span>
                                    <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Helpdesk Ticketing ISI Yogyakarta</h2>
                                </div>
                                <div class="about-content">
                                    <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">Helpdesk UPA TIK ISI Yogyakarta adalah layanan bantuan TIK bagi civitas akademika, tenaga kependidikan, dan masyarakat umum. Sistem ini memberikan solusi cepat untuk berbagai kendala terkait perangkat lunak, perangkat keras, jaringan, serta sistem informasi akademik di ISI Yogyakarta.
                                    <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">Pengguna dapat melaporkan permasalahan melalui Log In untuk layanan terintegrasi atau Kirim Cepat tanpa akun. Setiap laporan akan ditangani oleh tim teknis yang kompeten agar masalah terselesaikan dengan efisien. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================= about-section end========================= -->


        <!-- ========================= feature-section start ========================= -->
        <section id="features" class="feature-section pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Features</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Kenapa Helpdesk Ticketing ISI Yogyakarta ?</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Helpdesk Ticketing ISI Yogyakarta hadir untuk memberikan kemudahan dalam pengelolaan layanan Teknologi Informasi dan Komunikasi (TIK) bagi sivitas akademika ISI Yogyakarta.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-layers"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Empati</h4>
                                <p>Memberikan solusi untuk permasalahan jaringan yang terjadi pada pelanggan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-brush-alt"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Cepat</h4>
                                <p>Merespon panggilan atau komplain pelanggan dengan cepat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-pointer-up"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Terbaik</h4>
                                <p>Memberikan service terbaik untuk kepuasan pelanggan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= feature-section end ========================= -->

        <!-- =============== alur-tiketing start =============== -->
        <section id="alur-tiketing" class="ticket-section">
            <div class="container">
                <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                    <div class="section-title text-center mb-55">
                        <h2 class="section-title">Alur Ticketing</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Alur ticketing merupakan proses yang terstruktur untuk memudahkan pengguna dalam mengajukan dan melacak permintaan layanan.</p>
                    </div>
                </div>
        
                <div class="row justify-content-center">
                    <!-- Login Section -->
                    <div class="col-md-5 login-alur">
                        <h3 class="text-primary text-center fw-bold mb-5">Login</h3>
        
                        <div class="ticket-card mb-4">
                            <i class="fa fa-ticket icon"></i>
                            <p class="ticket-step">1. Open Ticket</p>
                            <p class="ticket-desc">Mengajukan atau mengubah permohonan.</p>
                        </div>
        
                        <div class="ticket-card mb-4">
                            <i class="fa fa-spinner icon"></i>
                            <p class="ticket-step">2. Proses Ticket</p>
                            <p class="ticket-desc">Permohonan ditelaah dan dikerjakan.</p>
                        </div>
        
                        <div class="ticket-card mb-4">
                            <i class="fa fa-comments icon"></i>
                            <p class="ticket-step">3. Diskusi</p>
                            <p class="ticket-desc">Melakukan diskusi apabila ada pertanyaan.</p>
                        </div>
        
                        <div class="ticket-card mb-4">
                            <i class="fa fa-window-close icon"></i>
                            <p class="ticket-step">4. Close Ticket</p>
                            <p class="ticket-desc">Mengakhiri tiket permohonan.</p>
                        </div>
        
                        <div class="ticket-card mb-4">
                            <i class="fa fa-clock icon"></i>
                            <p class="ticket-step">5. Riwayat</p>
                            <p class="ticket-desc">Melihat riwayat permohonan.</p>
                        </div>
                        <div class="ticket-card mb-4">
                            <i class="fa fa-check-circle icon"></i>
                            <p class="ticket-step">6. Selesai</p>
                            <p class="ticket-desc">Permohonan telah ditangani dan selesai.</p>
                        </div>
                    </div>
        
                    <!-- Kirim Cepat Section -->
                    <div class="col-md-5 kirim-cepat">
                        <h3 class="text-center fw-bold mb-5">Kirim Cepat</h3>
        
                        <div class="ticket-card mb-4">
                            <i class="fa fa-ticket icon"></i>
                            <p class="ticket-step">1. Open Ticket</p>
                            <p class="ticket-desc">Mengajukan atau mengubah permohonan.</p>
                        </div>
        
                        <div class="ticket-card mb-4">
                            <i class="fa fa-history icon"></i>
                            <p class="ticket-step">2. Riwayat</p>
                            <p class="ticket-desc">Melihat riwayat permohonan.</p>
                        </div>
        
                        <div class="ticket-card mb-4">
                            <i class="fa fa-check-circle icon"></i>
                            <p class="ticket-step">3. Selesai</p>
                            <p class="ticket-desc">Permohonan telah ditangani dan selesai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =============== alur-tiketing end =============== -->



        <!-- ========================= service-section start ========================= -->
        <section id="services" class="service-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Apa Bedanya ?</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Sistem icketing bisa masuk menggunakan 2 cara, yaitu masuk dengan menggunakan Kirim Cepat dan masuk menggunakan Login</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-10"> 
                        <div class="table-responsive wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <table class="table table-bordered text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th>Fitur</th>
                                        <th class="text-primary">Log In</th>
                                        <th class="text-purple" style="color: #8401FF;">Kirim Cepat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">Pengguna dapat mengubah keterangan pada tiket yang sudah dibuat</td>
                                        <td class="text-primary">✔</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Pengguna dapat mengakhiri tiket jika permasalahan telah teratasi</td>
                                        <td class="text-primary">✔</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Pengguna dapat mengirim dan merespon pesan untuk berdikusi secara realtime</td>
                                        <td class="text-primary">✔</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Pengguna dapat melihat detail tiket dan riwayat penyelesaian tiket</td>
                                        <td class="text-primary">✔</td>
                                        <td class="text-purple"style="color:purple;">✔</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-8 col-sm-10">
                        <div class="single_pricing text-center pricing_color_1 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-10">
                    </div>
            </div>
        </section>
        <!-- ========================= service-section end ========================= -->


        <!-- =============== FAQ start ============= -->
        <!-- Start Faq Area -->
    <section class="faq section" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                    <div class="section-title text-center mx-auto wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <span>FAQ</span>
                        <h2>Frequently Asked Questions</h2>
                        <p>FAQ kumpulan pertanyaan yang sering diajukan mengenai layanan Helpdesk Ticketing ISI Yogyakarta.</p>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>Bagaimana cara masuk ke sistem helpdesk tiketing?</span><i class="lni lni-chevron-down"></i>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                        ultrices gravida.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Siapa saja yang boleh mengirim keluhan di sistem ticketing?</span><i
                                        class="lni lni-chevron-down"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                        ultrices gravida.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                        ultrices gravida.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>Apa yang harus dilakukan apabila tiket sudah diakhiri tapi pekerjaan belum selesai sepenuhnya?</span><i
                                        class="lni lni-chevron-down"></i>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                        ultrices gravida.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>Bagaimana cara masuk menggunakan sistem kirim cepat?</span><i
                                        class="lni lni-chevron-down"></i>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                        ultrices gravida.</p>
                                </div>
                            </div>
                        </div>
                        <a class="main-btn" style="margin-right: auto;" href="../faqs_login.html">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Faq Area -->
        <!-- =============== FAQ end =============== -->
        
        
        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                            <a href="{{route('index')}}" class="logo mb-30"><img src="{{ asset('assets/img/logo-isi-black.svg') }}" alt=""></a>
                            <p class="mb-30 footer-desc">Institut Seni Indonesia Yogyakarta atau ISI Yogyakarta, berdiri sejak 23 Juli 1984, adalah Perguruan Tinggi Negeri Seni Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia dengan berbagai bidang seni terlengkap dan terbaik di Indonesia.</p>
                            <div class="footer-social-links">
                                <ul class="d-flex">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <h4>Quick Link</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Alur Ticekting</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">FAQs</a>
                                </li> 
                                <li>
                                    <a href="javascript:void(0)">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                            <h4>Contact</h4>
                            <ul class="footer-contact">
                                <li>
                                    <p>0274-379133, 373659</p>
                                </li>
                                <li>
                                    <p>isiyogyakarta@example.com</p>
                                </li>
                                <li>
                                    <p>Jl. Parangtritis Km. 6.5 Sewon, Bantul, Yogyakarta, 55188</br>
                                    Indonesia</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <p class="mb-0 text-black text-center">Copyright © 2025. UPA. Teknologi Informasi dan Komunikasi</p>
                </div>
            </div>
        </footer>
        <!-- ========================= footer end ========================= -->
         
        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-arrow-up"></i>
        </a>

        <!-- Login Modal -->
        <div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog max-width-px-840 position-relative">
                <button type="button"
                    class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
                    data-dismiss="modal"><i class="lni lni-close"></i></button>
                <div class="login-modal-main">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="row">
                                <div class="heading">
                                    <h3>Login From Here</h3>
                                    <p>Log in to continue your account <br> and explore new jobs.</p>
                                </div>
                                <div class="social-login">
                                    <ul>
                                        <li><a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Log in
                                                with LinkedIn</a></li>
                                        <li><a class="google" href="#"><i class="lni lni-google"></i> Log in with
                                                Google</a></li>
                                        <li><a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Log in
                                                with Facebook</a></li>
                                    </ul>
                                </div>
                                <div class="or-devider">
                                    <span>Or</span>
                                </div>
                                <form action="/">
                                    <div class="form-group">
                                        <label for="email" class="label">E-mail</label>
                                        <input type="email" class="form-control" placeholder="example@gmail.com" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="label">Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between">
                                        <!-- Default checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                            <label class="form-check-label" for="flexCheckDefault">Remember password</label>
                                        </div>
                                        <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                                    </div>
                                    <div class="form-group mb-8 button">
                                        <button class="btn ">Log in
                                        </button>
                                    </div>
                                    <p class="text-center create-new-account">Don't have an account? <a href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal">Create a free account</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login Modal -->


        <!-- Signup Modal -->
        <div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog max-width-px-840 position-relative">
                <button type="button"
                    class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
                    data-dismiss="modal"><i class="lni lni-close"></i></button>
                <div class="login-modal-main">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="row">
                                <div class="heading">
                                    <h3>Create a free Account <br> Today</h3>
                                    <p>Create your account to continue <br> and explore new jobs.</p>
                                </div>
                                <div class="social-login">
                                    <ul>
                                        <li><a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Import from LinkedIn</a></li>
                                        <li><a class="google" href="#"><i class="lni lni-google"></i> Import from
                                                Google</a></li>
                                        <li><a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Import from Facebook</a></li>
                                    </ul>
                                </div>
                                <div class="or-devider">
                                    <span>Or</span>
                                </div>
                                <form action="/">
                                    <div class="form-group">
                                        <label for="email" class="label">E-mail</label>
                                        <input type="email" class="form-control" placeholder="example@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="label">Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control"
                                                placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="label">Confirm Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control"
                                                placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between">
                                        <!-- Default checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">Agree to the <a
                                                    href="#">Terms & Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-8 button">
                                        <button class="btn ">Sign Up
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Signup Modal -->

        <!-- Kirim Cepat -->
        <div class="modal fade form-modal" id="kircep" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog max-width-px-900 position-relative">
                <button type="button"
                    class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
                    data-dismiss="modal"><i class="lni lni-close"></i></button>
                <div class="login-modal-main modal-lg">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="row">
                                <div class="heading">
                                    <h3>Create a free Account <br> Today</h3>
                                    <!-- <p>Create your account to continue <br> and explore new jobs.</p> -->
                                </div>
                                <form>
                                    <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="summernote" name="ckeditor"></textarea>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                            <h4>Multiple Upload</h4>
                                            </div>
                                            <div class="card-body">
                                            <form action="#" class="dropzone" id="mydropzone">
                                                <div class="fallback">
                                                <input name="file" type="file" multiple />
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>    
                                    <div class="form-group row mb-4">
                                        <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary mt-3">Publish</button>
                                    </div>                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Kirim Cepat -->
        
		<!-- ========================= JS here ========================= -->
		<script src="{{ asset('../frontend/assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="{{ asset('../frontend/assets/js/contact-form.js') }}"></script>
        <script src="{{ asset('../frontend/assets/js/count-up.min.js') }}"></script>
        <script src="{{ asset('../frontend/assets/js/tiny-slider.js') }}"></script>
        <script src="{{ asset('../frontend/assets/js/isotope.min.js') }}"></script>
        <script src="{{ asset('../frontend/assets/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('../frontend/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('../frontend/assets/js/imagesloaded.min.js') }}"></script>
		<script src="{{ asset('../frontend/assets/js/main.js') }}"></script>
        <!-- <script src="../https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'ckeditor' );
        </script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                new WOW().init();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.getElementById("logoutButton").addEventListener("click", function() {
                Swal.fire({
                    title: "Yakin ingin logout?",
                    text: "Anda akan keluar dari sesi saat ini.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#0d6efd",
                    confirmButtonText: "#3085d6",
                    confirmButtonText: "Ya, Keluar!",
                    cancelButtonText: "Batal",
                    cancelButtonColor: "#d33"
                }).then((result) => {
                    if (result.isConfirmed) {
                       
                        window.location.href = "../index.html";
                    }
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Ambil semua link dalam navbar
                const navLinks = document.querySelectorAll(".navbar-nav .nav-item a");
        
                // Tambahkan event listener ke setiap link
                navLinks.forEach(link => {
                    link.addEventListener("click", function () {
                        // Hapus kelas "active" dari semua link
                        navLinks.forEach(item => item.classList.remove("active"));
                        
                        // Tambahkan kelas "active" ke link yang diklik
                        this.classList.add("active");
                    });
                });
            });
        </script>
        <script>
            document.getElementById("notificationIcon").addEventListener("click", function () {
                var dropdown = document.getElementById("notificationDropdown");
                dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
            });

            // Menutup dropdown jika klik di luar elemen
            document.addEventListener("click", function (event) {
                var dropdown = document.getElementById("notificationDropdown");
                var icon = document.getElementById("notificationIcon");
                if (!icon.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.style.display = "none";
                }
            });

        </script>

        <!-- NOTIFICATION -->
        <script>
            function loadNotifications() {
                fetch('/notifications')
                    .then(response => response.json())
                    .then(data => {
                        const badge = document.getElementById('notificationBadge');
                        const list = document.getElementById('notificationList');

                        // Update badge
                        badge.textContent = data.length;

                        // Kosongkan list
                        list.innerHTML = '';

                        // Tambahkan notifikasi baru
                        data.forEach(notification => {
                            const li = document.createElement('li');
                            li.innerHTML = `
                                <i class="lni lni-comments"></i>
                                <div class="notification-text">
                                    <p>${notification.data.message}</p>
                                    <small>Dari ID ${notification.data.sender_id}</small>
                                </div>
                            `;
                            list.appendChild(li);
                        });
                    });
            }

            // Polling setiap 5 detik
            setInterval(loadNotifications, 5000);

            // Fungsi untuk menandai semua sebagai sudah dibaca
            function markAllAsRead() {
                fetch('/notifications/mark-all-read', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json'
                    }
                }).then(response => {
                    if (response.ok) {
                        loadNotifications(); // Refresh notifikasi
                    }
                });
            }

            // Muat saat pertama kali
            loadNotifications();

        </script>
    </body>
</html>
