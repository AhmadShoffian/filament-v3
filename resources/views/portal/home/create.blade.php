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

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/icon-isi.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-5.0.0-alpha.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/tiny-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/glightbox.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css"> -->
    </head>
    <body>
          <!-- ========================= header start ========================= -->
          <header class="header navbar-area bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('index') }}">
                                <img src="{{ asset('frontend/assets/img/logo/logo_new.svg') }}" alt="Logo">
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
                                        <a class="page-scroll active" href="{{ route('index') }}">Home</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Alur ticketing</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#">FAQS</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#">Contact</a>
                                    </li>
                                </ul>
                                <!-- <div class="header-btn">
                                    <a href="javascript:void(0)" class="theme-btn">Get Started</a>
                                </div> --
                            </div> navbar collapse -->

                            <!-- Notification -->
                            {{-- <div class="notification">
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
                                </div>
                             --}}
                            <!-- button profile -->
                            <ul class="sign-in">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni lni-user"></i> My Account</a>
                                    <div class="dropdown-menu">
                                        {{-- <a class="dropdown-item" href="{{ route('profile') }}"><i class="lni lni-briefcase"></i>Profil</a> --}}
                                        <a class="dropdown-item" href="#"><i class="lni lni-rocket"></i> Akun</a>
                                        <!-- <a class="dropdown-item" href="#"><i class="lni lni-close"></i>Logout</a> -->
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

        <!--===========================form isian ==========================-->
        <div class="container">
            <div class="alert" role="alert" style="background-color: #D1F8EF; color: black;">
                <strong>Sebelum mengirimkan, mohon pastikan:</strong><br>
                <span style="color: red;">*</span> Semua yang bertanda bintang wajib diisi.<br>
                <span style="color: red;">*</span> Semua informasi adalah benar dan bebas dari kesalahan.
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="form-container-inputform">
                <form  name="input_form" action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-box">
                            <label for="name">Nama</label><span class="required"></span>
                            <input type="text" name="name" id="name" class="required" placeholder="Masukkan Nama">
                        </div>
                        <div class="input-box">
                            <label for="judul">Judul</label><span class="required"></span>
                            <input type="text" name="title" id="title" class="required" placeholder="Masukkan Judul">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-box half-width">
                          <label for="email">Email</label><span class="required"></span>
                          <input type="email" name="email" id="email" class="required" placeholder="Masukkan Email">
                          
                          <label for="peran" class="mt-4">Peran</label><span class="required"></span>
                          <select id="peran" name="peran" class="form-select" required>
                              <option value="">Pilih Peran</option>
                                @foreach ($perans as $peran)
                                    <option value="{{ $peran->id }}">{{ $peran->name }}</option>
                                @endforeach
                          </select>
                          <label for="unit_kerja" class="mt-4">Unit Kerja</label><span class="required"></span>
                          <select id="unit_kerja" name="unit_kerja" class="form-select" required>
                              <option value="">Pilih Unit Kerja</option>
                                @foreach ($unitsKerja as $unitKerja)
                                    <option value="{{ $unitKerja->id }}">{{ $unitKerja->name }}</option>
                                @endforeach
                          </select>

                        </div>
                        <div class="input-box half-width">
                          <label for="description">Deskripsi</label><span class="required"></span>
                          <textarea name="description" id="description" class="required" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-box">
                            {{-- <label for="no_telepon">No. telepon</label><span class="required"></span>
                            <input type="text" name="no_telepon" id="no_telepon" class="required" placeholder="Masukkan No. Telepon"> --}}

                           <label for="unit" class="mt-4">Unit</label><span class="required"></span>
                            <select id="unit" name="unit" class="form-select" required>
                                <option value="">Pilih Unit</option>
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>

                            <label for="category" class="mt-4">Kategori</label><span class="required"></span>
                            <select id="category" name="category" class="form-select" required onchange="checkCategory()">
                                <option value="">Pilih Kategori</option>
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>

                            <label for="sub_category" class="mt-4">Sub Kategori</label><span class="required"></span>
                            <select id="sub_category" name="sub_category" class="form-select" required>
                                <option value="">Pilih Sub Kategori</option>
                                @foreach ($subKategories as $subKategory)
                                    <option value="{{ $subKategory->id }}">{{ $subKategory->name }}</option>
                                @endforeach
                            </select>

                            <label for="priority" class="mt-4">Prioritas</label><span class="required"></span>
                            <select id="priority" name="priority" class="form-select" required>
                                <option value="">Pilih Prioritas</option>
                                @foreach ($priority as $priorityes)
                                    <option value="{{ $priorityes->id }}">{{ $priorityes->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="input-box">
                            <label class="form-label">Lampiran <span id="lampiranBintang" style="color:red;">*</span></label>
                            <div class="file-upload">
                                <div class="preview-box" id="previewBox">
                                    <span id="previewText">Preview File</span>
                                    <img id="previewImage" src="" alt="" style="display: none;">
                                    <a id="previewLink" href="#" target="_blank" style="display: none;">Lihat File</a>
                                    <div class="overlay" id="removeBtn" onclick="removeFile()" style="display: none;">Hapus</div>
                                </div>
                                <div class="upload-box">
                                    <span>Upload file</span>
                                    <input type="file" name="lampiran[]" id="fileInput" accept=".png,.jpg,.jpeg,.pdf" onchange="previewFile()">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
           
        
                <!--===========================form isian end =========================-->

                 <!-- ========================= footer start ========================= -->
                 <footer class="footer pt-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                                    <a href="{{ route('index') }}" class="logo mb-30"><img src="{{ asset('front/assets/img/logo-isi-black.svg') }}" alt="logo"></a>
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
                
                <!-- ========================= JS here ========================= -->
                <script src="{{ asset('frontend/assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
                <script src="{{ asset('frontend/assets/js/contact-form.js') }}"></script>
                <script src="{{ asset('frontend/assets/js/count-up.min.js') }}"></script>
                <script src="{{ asset('frontend/assets/js/tiny-slider.js') }}"></script>
                <script src="{{ asset('frontend/assets/js/isotope.min.js') }}"></script>
                <script src="{{ asset('frontend/assets/js/glightbox.min.js') }}"></script>
                <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
                <script src="{{ asset('frontend/assets/js/imagesloaded.min.js') }}"></script>
                <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
                <script src="{{ asset('frontend/assets/js/input_form.js') }}"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <!-- jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
                <!-- <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script> -->
                <script>
                    document.getElementById("logoutButton").addEventListener("click", function (event) {
                        event.preventDefault(); // Mencegah link langsung dijalankan
                
                        Swal.fire({
                            title: "Konfirmasi Logout",
                            text: "Apakah Anda yakin ingin keluar?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#0d6efd",
                            confirmButtonText: "#3085d6",
                            confirmButtonText: "Ya, Logout!",
                            cancelButtonText: "Batal",
                            cancelButtonColor: "#d33"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Berhasil Logout",
                                    text: "Anda akan diarahkan ke halaman login.",
                                    icon: "success",
                                    timer: 2000,
                                    showConfirmButton: false
                                });
                
                                // Simulasi logout (bisa diganti dengan AJAX atau redirect ke backend logout)
                                setTimeout(() => {
                                    window.location.href = "index.html"; // Redirect ke halaman login
                                }, 2000);
                            }
                        });
                    });
                </script>
    </body>
</html>