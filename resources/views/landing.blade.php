{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} </title>
    <meta name="description" content="{{ env('APP_DESCRIPTION', 'Laravel description') }}">
    @vite(['resources/css/app.css'])
</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ url('/') }}" class="flex items-center">
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name') }}</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="{{ route('filament.auth.login') }}"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        {{ __('Login') }}</a>
                </div>

            </div>
        </nav>
    </header>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    {{ config('app.name') }}</h1>
                <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    {{ env('APP_DESCRIPTION', 'This is descriptions') }}</p>
                <a href="{{ route('filament.auth.login') }}"
                    class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    {{ __('Login') }}
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ url('lamp.png') }}">
            </div>
        </div>
    </section>


    <section class="bg-gray-50 dark:bg-gray-900 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 ">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">{{ __('Why Use Helpdesk?') }}</h2>
                <p class="mb-4 font-light">{{ __('Reasons') }}</p>
            </div>
        </div>
    </section>


    <footer class="p-4 bg-gray-50 sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl">
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a
                        href="https://ict.ummi.ac.id" class="hover:underline">{{ config('app.name') }}</a>. All Rights
                    Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                </div>
            </div>
        </div>
    </footer>

</body>

</html> --}}

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tiketing | ISI Yogyakarta</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend/assets/img/logo/icon-isi.png') }}">

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="{{ asset('/frontend/assets/css/bootstrap-5.0.0-alpha.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/frontend/assets/css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('/frontend/assets/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('/frontend/assets/css/tiny-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('/frontend/assets/css/glightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/frontend/assets/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                            <a class="navbar-brand" href="{{ route('index') }}">
                                <img src="{{ asset('/frontend/assets/img/logo/logo_new.svg') }}" alt="Logo">
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
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                {{-- <a href="javacript:" data-toggle="modal" data-target="#login" class="login"><i
                                        class="lni lni-lock-alt"></i> Login</a>
                                <a href="{{ route('kirimcepat') }}" class="btn">Kirim cepat</a> --}}
                                <a href="{{ route('portal.login') }}" class="login"><i class="lni lni-lock-alt"></i> Login</a>
                                <a href="{{ route('portal.kirimcepat') }}" class="btn">Kirim cepat</a>

                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </header>
        <!-- ========================= header end ========================= -->


        <!-- Start Hero Area -->
        <section class="hero-area style3" id="home">
            <div class="hero-inner" style="background-image: url('{{ asset('/frontend/assets/img/carousel/Saraswati.png') }}'); width: 100%; height: 100vh; background-size: cover; background-position: center;">
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
                                            <input type="text" name="ticket_number" id="ticket_number" placeholder="Cari Nomor Ticket" required>
                                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                                        </form>

                                        {{-- {{ route('searchTicket') }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Hero Area -->

        <!-- ========================= carousel-section end ========================= -->

        <!--========================= about-section start========================= -->
        <section id="about">
            <div class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="about-img-wrapper">
                                <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="{{ asset('/frontend/assets/img/carousel/Group 5.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
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


        <!-- Start Features Area -->
        <section class="features style2 section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Our Features</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Kenapa Helpdesk Ticketing ISI Yogyakarta ?</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Helpdesk Ticketing ISI Yogyakarta hadir untuk memberikan kemudahan dalam pengelolaan layanan Teknologi Informasi dan Komunikasi (TIK) bagi sivitas akademika ISI Yogyakarta.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Feature -->
                        <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                            <i class="lni lni-comments-alt"></i>
                            <h3><a href="#">EMPATI</a></h3>
                            <p>Memberikan solusi untuk permasalahan jaringan yang terjadi pada civitas akademika di ISI Yogyakarta</p>
                        </div>
                        <!-- End Single Feature -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Feature -->
                        <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                            <i class="lni lni-briefcase"></i>
                            <h3><a href="#">CEPAT</a></h3>
                            <p>Merespon panggilan atau komplain <br> kepada civitas akademika di ISI Yogyakarta dengan cepat</p>
                        </div>
                        <!-- End Single Feature -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Feature -->
                        <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                            <i class="lni lni-select"></i>
                            <h3><a href="#">TERBAIK</a></h3>
                            <p>Memberikan service terbaik untuk kepuasan bagi civitas akademika <br> di ISI Yogyakarta</p>
                        </div>
                        <!-- End Single Feature -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /End Features Area -->

        
        <!-- =============== alur-tiketing start =============== -->
        <section id="alur-tiketing" class="ticket-section pt-100">
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
        

        <!-- Start Faq Area -->
        <section class="faq section pb-100 pt-100" id="faqs">
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
                            <a class="main-btn" style="margin-right: auto;" href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Faq Area -->


        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 col-md-4">
                        <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                            <a href="index.html" class="logo mb-30"><img src="{{ asset('/frontend/assets/img/logo/Group 4.svg') }}" alt=""></a>
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
                    <div class="col-xl-4 col-lg-4 col-md-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-20 wow fadeInRight" data-wow-delay=".8s">
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
                                <div class="heading text-center">
                                    <h3>Masuk Akun</h3>
                                    <p>Masuk untuk melanjutkan akun Anda</p>
                                </div>
                                <div class="or-devider">
                                
                                </div>
                                <form action="/">
                                    <div class="form-group">
                                        <label for="email" class="label">E-mail</label>
                                        <input type="email" class="form-control" placeholder="contoh@gmail.com" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="label">Kata Sandi</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Masukkan Kata Sandi">
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-end">
                                        <a href="forgetpassword.html" class="font-size-3 text-dodger line-height-reset">Lupa Kata Sandi</a>
                                    </div>
                                    <div class="form-group mb-8 button" >
                                        <button class="btn btn-primary"> <a href="#">Masuk</a>
                                        </button>
                                    </div>
                                    <p class="text-center create-new-account">Belum memiliki Akun? <a href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal">Daftar</a></p>
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
                                <div class="heading text-center">
                                    <h3>Buat Akun Baru</h3>
                                    <p>Buat akun Anda untuk melanjutkan proses ticketing</p>
                                </div>
                                <div class="or-devider">
                                    <!-- <span>Or</span> -->
                                </div>
                                <form action="/">
                                    <div class="form-group">
                                        <label for="email" class="label">E-mail</label>
                                        <input type="email" class="form-control" placeholder="contoh@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="label">Kata Sandi</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control"
                                                placeholder="Masukkan Kata Sandi">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="label">Konfirmasi Kata Sandi</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control"
                                                placeholder="Masukkan Kata Sandi">
                                        </div>
                                    </div>
                                    <div class="form-group mb-8 button">
                                        <button class="btn btn-primary"><a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal">Daftar</a>
                                        </button>
                                    </div>
                                    <p class="text-center create-new-account">Sudah memiliki Akun? <a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal">Masuk</a></p>
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
		<script src="{{ asset('/frontend/assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
		<script src="{{ asset('/frontend/assets/js/contact-form.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/count-up.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/tiny-slider.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/isotope.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/imagesloaded.min.js') }}"></script>
		<script src="{{ asset('/frontend/assets/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                new WOW().init();
            });
        </script>
        <script type="text/javascript">
            //========= testimonial 
            tns({
                container: '.testimonial-slider',
                items: 3,
                slideBy: 'page',
                autoplay: false,
                mouseDrag: true,
                gutter: 0,
                nav: true,
                controls: false,
                controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    540: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                    1170: {
                        items: 3,
                    }
                }
            });
    
            //====== counter up 
            var cu = new counterUp({
                start: 0,
                duration: 2000,
                intvalues: true,
                interval: 100,
                append: " ",
            });
            cu.start();
    
    
            window.onscroll = function () {
                var header_navbar = document.querySelector(".navbar-area");
                var sticky = header_navbar.offsetTop;
    
                // show or hide the back-top-top button
                var backToTo = document.querySelector(".scroll-top");
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    backToTo.style.display = "flex";
                } else {
                    backToTo.style.display = "none";
                };
    
                if (window.pageYOffset > sticky) {
                    header_navbar.classList.add("sticky");
                } else {
                    header_navbar.classList.remove("sticky");
                }
    
                var logo = document.querySelector('.style2.navbar-brand img')
                if (window.pageYOffset > sticky) {
                    logo.src = 'assets/images/logo/logo.svg';
                } else {
                    logo.src = 'assets/images/logo/white-logo.svg';
                };
    
            };
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
    </body>
</html>

