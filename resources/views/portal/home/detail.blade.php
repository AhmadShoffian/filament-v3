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
    <style>
        .view-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            /* hitam transparan */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .view-btn:hover {
            background: rgba(0, 0, 0, 0.8);
            /* sedikit lebih gelap saat hover */
        }
    </style>


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
                        <h1 class="page-title">Blog Single Sidebar</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Home</a></li> |
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
                <div class="col-lg-12 col-md-12 col-12">
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
                                <!-- Tab Contents -->
                                <section class="py-8 bg-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <!-- Informasi Umum Tab - Clean Modern Design with Enhanced Icons -->
                                        <div x-show="activeTab === 'about'"
                                            x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                            <div class="bg-white">
                                                <!-- Modern Header - Matched with UMKM Style -->
                                                <div class="mb-5">
                                                    <!-- Title and Button in One Row -->
                                                    <div class="flex items-center justify-between mb-3">
                                                        <!-- Left: Title Badge with Icon -->
                                                        <div class="flex items-center">
                                                            <div class="h-6 w-1 bg-emerald-500 rounded-full mr-2">
                                                            </div>
                                                            <span
                                                                class="bg-emerald-50 px-2.5 py-1 rounded-full text-emerald-800 text-sm font-semibold flex items-center">
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
                                                        <div
                                                            class="bg-gray-50 shadow-sm rounded-lg p-5 mb-4 border border-gray-100 text-center">
                                                            <!-- Wrapper untuk gambar dan tombol -->
                                                            <div class="position-relative"
                                                                style="width: 100%; max-width: 400px;">
                                                                <!-- Gambar -->
                                                                <img src="{{ asset('storage/' . $ticket->image) }}"
                                                                    alt="Ticket Image" class="img-fluid rounded">

                                                                <!-- Tombol transparan di tengah -->
                                                                <button type="button" class="view-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal{{ $ticket->id }}">
                                                                    View Image
                                                                </button>
                                                            </div>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="imageModal{{ $ticket->id }}"
                                                                tabindex="-1"
                                                                aria-labelledby="imageModalLabel{{ $ticket->id }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="imageModalLabel{{ $ticket->id }}">
                                                                                Ticket #{{ $ticket->id }} Image</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body text-center">
                                                                            <img src="{{ asset('storage/' . $ticket->image) }}"
                                                                                alt="Ticket Image"
                                                                                class="img-fluid rounded">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="font-semibold text-xl text-gray-900 mb-1">Desa
                                                                Digital</h3>
                                                            <p class="text-sm text-gray-500">Kecamatan Contoh,
                                                                Kabupaten Contoh</p>
                                                        </div>

                                                        <!-- Image Slider for Thumbnails -->
                                                        <div x-data="{
                                                            currentIndex: 0,
                                                            totalImages: 5,
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
                                                            class="relative mb-4 rounded-lg overflow-hidden shadow-sm">
                                                            <!-- Main Slider Container -->
                                                            <div class="relative aspect-w-16 aspect-h-9 bg-gray-100">
                                                                <!-- Images -->
                                                                <div x-show="currentIndex === 0"
                                                                    x-transition:enter="transition ease-out duration-300"
                                                                    x-transition:enter-start="opacity-0 transform scale-95"
                                                                    x-transition:enter-end="opacity-100 transform scale-100"
                                                                    class="w-full h-full">
                                                                    <img src="/src/images/hero/1.jpg"
                                                                        alt="Desa Digital - Image 1"
                                                                        class="w-full h-full object-cover" />
                                                                </div>
                                                                <div x-show="currentIndex === 1"
                                                                    x-transition:enter="transition ease-out duration-300"
                                                                    x-transition:enter-start="opacity-0 transform scale-95"
                                                                    x-transition:enter-end="opacity-100 transform scale-100"
                                                                    class="w-full h-full">
                                                                    <img src="/src/images/hero/2.jpg"
                                                                        alt="Desa Digital - Image 2"
                                                                        class="w-full h-full object-cover" />
                                                                </div>
                                                                <div x-show="currentIndex === 2"
                                                                    x-transition:enter="transition ease-out duration-300"
                                                                    x-transition:enter-start="opacity-0 transform scale-95"
                                                                    x-transition:enter-end="opacity-100 transform scale-100"
                                                                    class="w-full h-full">
                                                                    <img src="/src/images/hero/3.jpg"
                                                                        alt="Desa Digital - Image 3"
                                                                        class="w-full h-full object-cover" />
                                                                </div>
                                                                <div x-show="currentIndex === 3"
                                                                    x-transition:enter="transition ease-out duration-300"
                                                                    x-transition:enter-start="opacity-0 transform scale-95"
                                                                    x-transition:enter-end="opacity-100 transform scale-100"
                                                                    class="w-full h-full">
                                                                    <img src="/src/images/hero/4.jpg"
                                                                        alt="Desa Digital - Image 4"
                                                                        class="w-full h-full object-cover" />
                                                                </div>
                                                                <div x-show="currentIndex === 4"
                                                                    x-transition:enter="transition ease-out duration-300"
                                                                    x-transition:enter-start="opacity-0 transform scale-95"
                                                                    x-transition:enter-end="opacity-100 transform scale-100"
                                                                    class="w-full h-full">
                                                                    <img src="/src/images/hero/5.jpg"
                                                                        alt="Desa Digital - Image 5"
                                                                        class="w-full h-full object-cover" />
                                                                </div>
                                                            </div>

                                                            <!-- Controls -->
                                                            <button @click.stop="prev()"
                                                                class="absolute left-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-black/60 transition-colors z-20">
                                                                <i class="fas fa-chevron-left"></i>
                                                            </button>
                                                            <button @click.stop="next()"
                                                                class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-black/60 transition-colors z-20">
                                                                <i class="fas fa-chevron-right"></i>
                                                            </button>

                                                            <!-- Indicator Dots -->
                                                            <div
                                                                class="absolute bottom-3 left-0 right-0 flex justify-center gap-2 z-20">
                                                                <button @click.stop="currentIndex = 0"
                                                                    :class="{
                                                                        'bg-white': currentIndex ===
                                                                            0,
                                                                        'bg-white/50 hover:bg-white/70': currentIndex !==
                                                                            0
                                                                    }"
                                                                    class="w-2.5 h-2.5 rounded-full transition-all"
                                                                    aria-label="Show image 1"></button>
                                                                <button @click.stop="currentIndex = 1"
                                                                    :class="{
                                                                        'bg-white': currentIndex ===
                                                                            1,
                                                                        'bg-white/50 hover:bg-white/70': currentIndex !==
                                                                            1
                                                                    }"
                                                                    class="w-2.5 h-2.5 rounded-full transition-all"
                                                                    aria-label="Show image 2"></button>
                                                                <button @click.stop="currentIndex = 2"
                                                                    :class="{
                                                                        'bg-white': currentIndex ===
                                                                            2,
                                                                        'bg-white/50 hover:bg-white/70': currentIndex !==
                                                                            2
                                                                    }"
                                                                    class="w-2.5 h-2.5 rounded-full transition-all"
                                                                    aria-label="Show image 3"></button>
                                                                <button @click.stop="currentIndex = 3"
                                                                    :class="{
                                                                        'bg-white': currentIndex ===
                                                                            3,
                                                                        'bg-white/50 hover:bg-white/70': currentIndex !==
                                                                            3
                                                                    }"
                                                                    class="w-2.5 h-2.5 rounded-full transition-all"
                                                                    aria-label="Show image 4"></button>
                                                                <button @click.stop="currentIndex = 4"
                                                                    :class="{
                                                                        'bg-white': currentIndex ===
                                                                            4,
                                                                        'bg-white/50 hover:bg-white/70': currentIndex !==
                                                                            4
                                                                    }"
                                                                    class="w-2.5 h-2.5 rounded-full transition-all"
                                                                    aria-label="Show image 5"></button>
                                                            </div>

                                                            <!-- Swipe Area for Touch Devices -->
                                                            <div class="absolute inset-0 z-10"
                                                                x-on:touchstart="touchStart($event)"
                                                                x-on:touchend="touchEnd($event)"></div>
                                                        </div>
                                                    </div>

                                                    <!-- Information Column -->
                                                    <div class="lg:col-span-7 xl:col-span-8 space-y-6">
                                                        <!-- General Information Card -->
                                                        <div
                                                            class="bg-gray-50 shadow-sm rounded-lg overflow-hidden border border-gray-100">
                                                            <div
                                                                class="px-6 py-4 border-b border-gray-100 flex items-center">
                                                                <i
                                                                    class="fas fa-file-alt text-emerald-500 mr-2 mb-4"></i>
                                                                <h3 class="font-medium text-gray-900 mr-1">Informasi
                                                                    Desa
                                                                </h3>
                                                            </div>
                                                            <div class="p-6">
                                                                <dl
                                                                    class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                                                                    <div>
                                                                        <dt
                                                                            class="text-sm font-medium text-gray-500 flex items-center">
                                                                            <i
                                                                                class="fas fa-signature text-emerald-400 mr-1.5 text-xs"></i>
                                                                            Nama
                                                                        </dt>
                                                                        <dd class="mt-1 text-gray-900">
                                                                            {{ $ticket->username }}
                                                                        </dd>
                                                                    </div>
                                                                    <div>
                                                                        <dt
                                                                            class="text-sm font-medium text-gray-500 flex items-center">
                                                                            <i
                                                                                class="fas fa-map text-emerald-400 mr-1.5 text-xs"></i>
                                                                            Email
                                                                        </dt>
                                                                        <dd class="mt-1 text-gray-900">
                                                                            {{ $ticket->email }}
                                                                        </dd>
                                                                    </div>
                                                                    <div>
                                                                        <dt
                                                                            class="text-sm font-medium text-gray-500 flex items-center">
                                                                            <i
                                                                                class="fas fa-city text-emerald-400 mr-1.5 text-xs"></i>
                                                                            No Telepon
                                                                        </dt>
                                                                        <dd class="mt-1 text-gray-900">087838658884
                                                                        </dd>
                                                                    </div>
                                                                    <div>
                                                                        <dt
                                                                            class="text-sm font-medium text-gray-500 flex items-center">
                                                                            <i
                                                                                class="fas fa-map-marked text-emerald-400 mr-1.5 text-xs"></i>
                                                                            Peran
                                                                        </dt>
                                                                        <dd class="mt-1 text-gray-900">
                                                                            {{ $ticket->peran->name ?? '-' }}
                                                                        </dd>
                                                                    </div>
                                                                    <div>
                                                                        <dt
                                                                            class="text-sm font-medium text-gray-500 flex items-center">
                                                                            <i
                                                                                class="fas fa-mail-bulk text-emerald-400 mr-1.5 text-xs"></i>
                                                                            Unit Kerja
                                                                        </dt>
                                                                        <dd class="mt-1 text-gray-900">
                                                                            {{ $ticket->unitKerja->name ?? '-' }}</dd>
                                                                    </div>
                                                                </dl>
                                                            </div>
                                                        </div>

                                                        <!-- Contact Information Card -->
                                                        <div
                                                            class="bg-gray-50 shadow-sm rounded-lg overflow-hidden border border-gray-100">
                                                            <div
                                                                class="px-6 py-4 border-b border-gray-100 flex items-center">
                                                                <i
                                                                    class="fas fa-address-card text-emerald-500 mr-2 mb-4"></i>
                                                                <h3 class="font-medium text-gray-900">Kontak & Alamat
                                                                </h3>
                                                            </div>
                                                            <div class="p-6">
                                                                <dl
                                                                    class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                                                                    <div>
                                                                        <dt
                                                                            class="text-sm font-medium text-gray-500 flex items-center">
                                                                            <i
                                                                                class="fas fa-phone-alt text-emerald-400 mr-1.5 text-xs"></i>
                                                                            Kategori Masalah
                                                                        </dt>
                                                                        <dd class="mt-1 text-gray-900">
                                                                            <a href="tel:+6287815454498"
                                                                                class="text-emerald-600 hover:underline flex items-center group">
                                                                                <span>{{ $ticket->unit->name ?? '-' }}</span>
                                                                                <i
                                                                                    class="fas fa-headset ml-1.5 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                                                            </a>
                                                                        </dd>
                                                                    </div>
                                                                    <div>
                                                                        <dt
                                                                            class="text-sm font-medium text-gray-500 flex items-center">
                                                                            <i
                                                                                class="fas fa-envelope text-emerald-400 mr-1.5 text-xs"></i>
                                                                            Sub kategori Masalah
                                                                        </dt>
                                                                        <dd class="mt-1 text-gray-900">
                                                                            <a href="mailto:cepatberes2024@gmail.com"
                                                                                class="text-emerald-600 hover:underline flex items-center group">
                                                                                <span>{{ $ticket->problemCategory->name ?? '-' }}</span>
                                                                                <i
                                                                                    class="fas fa-paper-plane ml-1.5 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                                                            </a>
                                                                        </dd>
                                                                    </div>
                                                                    <div>
                                                                        <dt
                                                                            class="text-sm font-medium text-gray-500 flex items-center">
                                                                            <i
                                                                                class="fas fa-globe text-emerald-400 mr-1.5 text-xs"></i>
                                                                            Judul Tiket
                                                                        </dt>
                                                                        <dd class="mt-1 text-gray-900">
                                                                            <a href="https://desadigital.com"
                                                                                target="_blank"
                                                                                class="text-emerald-600 hover:underline flex items-center group">
                                                                                <span>{{ $ticket->title ?? '-' }}</span>
                                                                                <i
                                                                                    class="fas fa-external-link-alt ml-1.5 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                                                            </a>
                                                                        </dd>
                                                                    </div>
                                                                    <div class="md:col-span-2">
                                                                        <dt
                                                                            class="text-sm font-medium text-gray-500 flex items-center">
                                                                            <i
                                                                                class="fas fa-map-marker-alt text-emerald-400 mr-1.5 text-xs"></i>
                                                                            Deskripsi Masalah
                                                                        </dt>
                                                                        <dd class="mt-1 text-gray-900">
                                                                            {{ $ticket->description ?? '-' }}</dd>
                                                                    </div>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-danger">Kembali</button>
                                                        <button type="button" class="btn btn-primary">Buat Tiket
                                                            Baru</button>
                                                        @foreach ($users as $user)
                                                            @if ($user->id !== auth()->id())
                                                                <a href="{{ route('chat', ['ticket_id' => $ticket->id]) }}"
                                                                    class="btn btn-primary">
                                                                    Chat dengan {{ $user->name }}
                                                                </a>
                                                            @endif
                                                        @endforeach





                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>


                        <!-- Start Blog Singel Area -->

                        <livewire:chat-component :ticket_id="$user->id" />



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
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Komentar -->
                                    <div class="col-12 mb-3">
                                        <label for="content" class="form-label fw-bold">Komentar</label>
                                        <textarea name="content" id="content" class="ckeditor form-control" rows="5"
                                            placeholder="Tulis komentar Anda..." required></textarea>
                                    </div>

                                    <!-- Attachment Custom -->
                                    <div class="col-12 mb-4">
                                        <label class="form-label fw-bold d-block">Lampiran (opsional)</label>

                                        <label for="attachment" class="custom-file-upload">
                                            📎 Pilih File
                                        </label>
                                        <input type="file" id="attachment" name="attachment"
                                            accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
                                        <div id="file-name" class="file-name-preview">Belum ada file dipilih</div>

                                        <small class="text-muted">File yang diizinkan: jpg, png, pdf, docx (maks.
                                            2MB)</small>
                                    </div>

                                    <!-- Tombol Submit -->
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary px-4 py-2">Kirim
                                            Komentar</button>
                                    </div>
                                </div>
                            </form>

                            <script>
                                // Script untuk preview nama file
                                const input = document.getElementById('attachment');
                                const fileName = document.getElementById('file-name');

                                input.addEventListener('change', function() {
                                    fileName.textContent = this.files.length > 0 ? this.files[0].name : 'Belum ada file dipilih';
                                });
                            </script>


                        </div>
                        <!-- End Comment Form -->
                    </div>
                    {{-- <aside class="col-lg-4 col-md-12 col-12">
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
                                            <h6 class="post-title"><a href="blog-single.html">Owning a Domain is Key
                                                    to
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
                                            <h6 class="post-title"><a href="blog-single.html">Should You Turn a Domain
                                                    into
                                                    a Business?</a></h6>
                                            <span class="time"><i class="lni lni-calendar"></i> 24th March
                                                2023</span>
                                        </div>
                                    </div>
                                    <div class="single-popular-feed">
                                        <div class="post-image">
                                            <a href="blog-single.html"><img src="assets/images/blog/sidebar-3.jpg"
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
                                        <a href="javascript:void(0)">Development <span
                                                class="badge rounded">10</span></a>
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
                                        <a href="javascript:void(0)">Technology <span
                                                class="badge rounded">15</span></a>
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
                    </aside> --}}
                </div>
            </div>
    </section>
    <!-- End Blog Singel Area -->

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
    <script src="{{ asset('../detailticket/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/wow.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('../detailticket/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/count-up.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/main.js') }}"></script>
    <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
    {{-- <script src="{{ asset('../detailticket/js/main.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
