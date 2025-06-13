<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ticketing | ISI yogyakarta</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/icon-isi.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-5.0.0-alpha.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/tiny-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/glightbox.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('../detailticket/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../detailticket/css/main.css') }}" />
    <link href="https://unpkg.com/filepond/dist/filepond.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <!-- Select2 CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"></head> --}}

<body>
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

    {{-- <section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url('/frontend/assets/img/common-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-content">
                            <h2 class="text-white">About Company</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Kirim Cepat</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Home</a></li> |
                            <li>Kirim Cepat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <!--===========================form isian ==========================-->
    <div class="container">
        <div class="alert" role="alert" style="background-color: #D1F8EF; color: black;">
            <strong>Sebelum mengirimkan, mohon pastikan:</strong><br>
            <span style="color: red;">*</span> Semua yang bertanda bintang wajib diisi.<br>
            <span style="color: red;">*</span> Semua informasi adalah benar dan bebas dari kesalahan.
        </div>
        <div class="form-container-inputform">
            <form name="input_form" action="{{ route('portal.kirimcepat.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="input-box">
                        <label for="username">Nama</label><span class="required"></span>
                        <input type="text" name="username" id="username" class="required"
                            placeholder="Masukkan Username">
                    </div>
                    <div class="input-box">
                        <label for="judul">Judul</label><span class="required"></span>
                        <input type="text" name="title" id="title" class="required"
                            placeholder="Masukkan Judul">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-box half-width">
                        <label for="email">Email</label><span class="required"></span>
                        <input type="email" name="email" id="email" class="required"
                            placeholder="Masukkan Email">

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
                        <label for="unit" class="mt-4">Unit</label><span class="required"></span>
                        <select id="unit" name="unit" class="form-select" required>
                            <option value="">Pilih Unit</option>
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                            @endforeach
                        </select>

                        <label for="category" class="mt-4">Kategori</label><span class="required"></span>
                        <select id="category" name="category" class="form-select" required
                            onchange="checkCategory()">
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
                </div>
                <div class="button-container">
                    <button type="submit" class="btn btn-primary" id="submitBtn">Kirim</button>
                </div>
                <div class="input-box">
                    <label class="form-label">Lampiran <span id="lampiranBintang" style="color:red;">*</span></label>
                </div>
            </form>
            <form action="{{ route('upload.lampiran') }}" method="post" enctype="multipart/form-data"
                class="dropzone mt-4" id="image-upload">
                @csrf
            </form><br>
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
        <i class="lni lni-arrow-up"></i>
    </a>


    <script src="{{ asset('../detailticket/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/wow.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('../detailticket/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/count-up.min.js') }}"></script>
    <script src="{{ asset('../detailticket/js/main.js') }}"></script>
    <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>




    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('frontend/assets/js/contact-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/input_form.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script> --}}
    <!-- Alpine.js -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <script>
        document.getElementById("submissionForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Cegah submit form langsung

            Swal.fire({
                icon: 'warning',
                title: 'Pastikan Data Yang Di Inputkan\nSudah Benar Dan Lengkap',
                showCancelButton: true,
                confirmButtonText: 'YA',
                cancelButtonText: 'BATAL',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Tampilkan notifikasi sukses
                    Swal.fire({
                        title: "Berhasil Dikirim",
                        text: "Data Berhasil Dikirim",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 2000
                    });

                    // Submit form setelah delay
                    setTimeout(() => {
                        document.getElementById("submissionForm").submit();
                    }, 2000);
                }
            });
        });
    </script>

    <script>
        document.getElementById("submissionForm").addEventListener("submit", function(event) {
            if (confirm("Yakin ingin mengirim?")) {
                this.submit(); // Pastikan form dikirim
            }
        });
    </script>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone(".dropzone", {
            url: "{{ route('upload.lampiran') }}",
            paramName: "file",
            uploadMultiple: false,
            maxFilesize: 2, // in MB
            acceptedFiles: ".jpg,.jpeg,.png,.pdf",
            addRemoveLinks: true,
            autoProcessQueue: false,
            init: function() {
                var dz = this;

                $("#submitBtn").on("click", function(e) {
                    e.preventDefault();
                    if (dz.getQueuedFiles().length > 0) {
                        dz.processQueue();
                    } else {
                        document.querySelector("form[name='input_form']").submit();
                    }
                });

                dz.on("queuecomplete", function() {
                    document.querySelector("form[name='input_form']").submit();
                });

                dz.on("success", function(file, response) {
                    file.uploadedPath = response.filename; // jika ingin kirim path juga
                    const input = document.createElement("input");
                    input.type = "hidden";
                    input.name = "uploaded_files[]";
                    input.value = response.filename;
                    document.querySelector("form[name='input_form']").appendChild(input);
                });

                dz.on("removedfile", function(file) {
                    file.previewElement.remove();
                    // bisa tambahkan AJAX untuk hapus file dari server jika perlu
                });


            }
        });
    </script>
</body>

</html>
