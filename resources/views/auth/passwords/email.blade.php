<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin />
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="" />
    <meta name="description" content="Portal Digital Desa - Layanan terpadu untuk warga desa" />
    <meta name="theme-color" content="#047857" />

    <!-- SEO Tags -->
    <title>Login - Helpdesk Ticketing</title>
    <meta name="keywords" content="helpdesk ticketing, login, masuk" />
    <meta name="author" content="Helpdesk Ticketing" />

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Base Stylesheet -->
    <link href="/css/output.css" rel="stylesheet" />

    <!-- Additional Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Alpine.js -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Custom Styles -->
    <style>
      .bg-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.2'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      }
    </style>
  </head>

  <body class="font-sans text-gray-900 antialiased">
    <!-- Home Button - Fixed in Corner -->
    <a class='fixed top-4 right-4 z-50 flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-md hover:shadow-lg transition-all duration-200 border border-emerald-100 group' href='/'>
      <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
      </svg>
      <span class="absolute right-full mr-2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">Beranda</span>
    </a>

    <div class="min-h-screen flex flex-col md:flex-row">
      <!-- Left Side - Decorative/Branding Side -->
      <div class="hidden md:flex md:w-1/2 bg-gradient-to-br from-emerald-700 to-emerald-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        <div class="w-full h-full flex flex-col justify-between relative z-10 p-8 lg:p-12">
          <!-- Top Area -->
          <div class="flex items-center">
            <img src="/images/LOGO-ISI-JADI-FINAL.png" alt="Helpdesk Ticketing" class="w-16 h-16 object-contain rounded-full bg-white p-1" />
            <div class="ml-4">
              <h1 class="text-xl font-bold">Helpdesk Ticketing</h1>
              <p class="text-sm text-emerald-50">Sewon, Bantul, Yogyakarta</p>
            </div>
          </div>

          <!-- Middle Area with Image -->
          <div class="flex-grow flex flex-col justify-center py-4">
            <h2 class="text-3xl font-bold mb-2">Helpdesk Ticketing UPA TIK</h2>
            <p class="text-emerald-50 mb-4">Akses informasi dan layanan desa kapan saja dan di mana saja</p>

            <!-- Featured Image - Desktop Only -->
            <div class="w-full mx-auto rounded-xl overflow-hidden shadow-lg">
              <img src="/images/Saraswati.png" alt="isi yogyakarta" class="w-full h-auto object-cover" />
            </div>
          </div>

          <!-- Bottom Area -->
          <div class="text-sm text-emerald-50">&copy; 2025 ISI Yogyakarta</div>
        </div>
      </div>

      <!-- Right Side - Form Area -->
      <div class="w-full md:w-1/2 bg-white flex items-center justify-center p-4 sm:p-6 md:p-8">
        <div class="w-full max-w-md min-h-screen md:min-h-0 flex flex-col justify-between py-6">
          <!-- Mobile Header (visible only on mobile) -->
          <div class="md:hidden">
            <!-- Top Logo and Text -->
            <div class="flex items-start justify-start sm:items-center sm:justify-center mb-6">
              <img src="/src/images/logo-desa.jpg" alt="Isi Yogakarta" class="w-16 h-16 object-contain rounded-full bg-white p-1 shadow-sm" />
              <div class="ml-4">
                <h1 class="text-xl font-bold text-gray-900">Institut Seni Indonesia</h1>
                <p class="text-sm text-emerald-600">Sewon, Bantul, Yogyakarta</p>
              </div>
            </div>
          </div>

          <!-- Main Content -->
          <div>
                <div wire:snapshot="{&quot;data&quot;:{&quot;email&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;5IBNqxoVXwwFAZ2TySdL&quot;,&quot;name&quot;:&quot;pages.auth.forgot-password&quot;,&quot;path&quot;:&quot;forgot-password&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;id&quot;},&quot;checksum&quot;:&quot;8c52df37e3461f60d06a98e389a1521085b465a108793901a93e963518849fcb&quot;}" wire:effects="[]" wire:id="5IBNqxoVXwwFAZ2TySdL">
    <!-- Modern Header -->
    <div class="mb-6 relative">
        <div class="absolute -top-10 -left-10 w-20 h-20 bg-emerald-100 rounded-full opacity-50"></div>
        <div class="absolute -bottom-4 right-0 w-12 h-12 bg-emerald-100 rounded-full opacity-30"></div>

        <div class="relative">
            <!-- Modern Badge with Recovery Icon -->
            <div class="flex items-center gap-2 mb-3">
                <div class="flex items-center bg-gradient-to-r from-emerald-600 to-emerald-400 text-white text-xs font-medium py-1 px-3 rounded-full shadow-sm">
                    <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Portal Helpdesk Ticketing</span>
                </div>

                <!-- Responsive additions for larger screens -->
                <div class="hidden sm:block bg-gray-100 h-px flex-grow mx-2"></div>
                <div class="hidden sm:flex gap-1 text-xs text-gray-500">
                    <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    <span>Lupa Password</span>
                </div>
            </div>

            <h2 class="text-2xl font-bold bg-gradient-to-r from-emerald-700 to-emerald-500 bg-clip-text text-transparent">
                Lupa Password?
            </h2>
            <p class="text-gray-600 mt-2 flex items-center">
                <svg class="w-4 h-4 mr-1 text-emerald-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                </svg>
                Dapatkan link reset password ke email Anda
            </p>
        </div>
    </div>

    <!-- Session Status -->
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
        @csrf
        <!-- Email Address -->
        <div>
            <label class="block font-medium text-sm text-gray-700 text-gray-700 font-medium mb-1 flex items-center" for="email">
    Email
</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </div>
                <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full pl-10 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500" wire:model="email" id="email" type="email" name="email" required="required" autofocus="autofocus" placeholder="nama@email.com">
            </div>
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>

        <div class="flex items-center justify-between pt-2">
            <a class="text-sm font-medium text-emerald-600 hover:text-emerald-700 flex items-center" href="{{ route('portal.login') }}" wire:navigate>
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                </svg>
                Kembali ke Login
            </a>

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-emerald-600 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-emerald-700 focus:bg-emerald-700 active:bg-emerald-900 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition ease-in-out duration-150">
                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
                Kirim Link
            </button>
        </div>
    </form>
</div>
                    </div>


          <!-- Mobile Footer -->
          <div class="text-center text-sm text-gray-600 mt-auto pt-8 md:hidden">&copy; 2025 ISI yogyakarta</div>
        </div>
      </div>
    </div>

  
  </body>
</html>
