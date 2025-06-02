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
    <meta name="keywords" content="desa digital, login, masuk, akses desa" />
    <meta name="author" content="Desa Digital" />

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
            <img src="/images/LOGO-ISI-JADI-FINAL.png" alt="logo-isi" class="w-16 h-16 object-contain rounded-full bg-white p-1" />
            <div class="ml-4">
              <h1 class="text-xl font-bold"> Institut Seni Indonesia</h1>
              <p class="text-sm text-emerald-50">Sewon, Bantul, Yogyakarta</p>
            </div>
          </div>

          <!-- Middle Area with Image -->
          <div class="flex-grow flex flex-col justify-center py-4">
            <h2 class="text-3xl font-bold mb-2">Helpdesk Ticketing UPA TIK</h2>
            <p class="text-emerald-50 mb-4">Akses informasi dan layanan desa kapan saja dan di mana saja</p>

            <!-- Featured Image - Desktop Only -->
            <div class="w-full mx-auto rounded-xl overflow-hidden shadow-lg">
              <img src="/images/Saraswati.png" alt="ISI Yogyakarta" class="w-full h-auto object-cover" />
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
              <img src="/src/images/logo-desa.jpg" alt="Desa Kedungwungu" class="w-16 h-16 object-contain rounded-full bg-white p-1 shadow-sm" />
              <div class="ml-4">
                <h1 class="text-xl font-bold text-gray-900">Institut Seni Indonesia</h1>
                <p class="text-sm text-emerald-600">Sewon, Bantul, Yogyakrta</p>
              </div>
            </div>
          </div>

          <!-- Main Content -->
          <div>
            <!-- Modern Welcome Header -->
            <div class="mb-8 relative">
              <div class="absolute -top-10 -left-10 w-20 h-20 bg-emerald-100 rounded-full opacity-50"></div>
              <div class="absolute -bottom-4 right-0 w-12 h-12 bg-emerald-100 rounded-full opacity-30"></div>

              <div class="relative">
                <!-- Modern Badge with Home Icon -->
                <div class="flex items-center gap-2 mb-3">
                  <div class="flex items-center bg-gradient-to-r from-emerald-600 to-emerald-400 text-white text-xs font-medium py-1 px-3 rounded-full shadow-sm">
                    <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    <span>Portal Helpdesk Ticketing</span>
                  </div>

                  <!-- Responsive additions for larger screens -->
                  <div class="hidden sm:block bg-gray-200 h-px flex-grow mx-2"></div>
                  <div class="hidden sm:flex gap-1 text-xs text-gray-500">
                    <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Layanan Helpdesk UPA TIK</span>
                  </div>
                </div>

                <h2 class="text-3xl font-bold bg-gradient-to-r from-emerald-700 to-emerald-500 bg-clip-text text-transparent">Selamat Datang!</h2>
                <p class="text-gray-600 mt-2 flex items-center">
                  <svg class="w-4 h-4 mr-1 text-emerald-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd"></path>
                  </svg>
                  Masuk untuk mengakses Helpdesk Ticketing
                </p>
              </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <!-- Session Status (empty div for spacing matching Laravel app) -->
            <div class="mb-4"></div>
            @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif

            <form action="{{ route('portal.login') }}" method="POST" class="space-y-5">
                @csrf
              <!-- Email Address -->
              <div>
                <label for="email" class="text-gray-700 font-medium mb-1 block">Email</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                  </div>
                  <input
                    id="email"
                    class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                    type="email"
                    name="email"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="nama@email.com"
                  />
                </div>
              </div>

              <!-- Password with Toggle Visibility -->
              <div>
                <label for="password" class="text-gray-700 font-medium mb-1 block">Password</label>
                <div class="relative" x-data="{ showPassword: false }">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                  </div>

                  <input
                    id="password"
                    class="block w-full pl-10 pr-10 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="••••••••"
                    x-bind:type="showPassword ? 'text' : 'password'"
                  />

                  <!-- Eye Icon Toggle Button -->
                  <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none" @click="showPassword = !showPassword">
                    <!-- Show password icon (eye open) -->
                    <svg x-show="!showPassword" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>

                    <!-- Hide password icon (eye crossed) -->
                    <svg x-show="showPassword" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>

               @if (Route::has('password.request'))
                    <a class="text-sm font-medium text-emerald-600 hover:text-emerald-700" href="{{ route('password.request') }}">
                        Lupa password?
                    </a>
                @endif

              </div>

              <!-- Submit Button -->
              <div class="pt-2">
                <button
                  type="submit"
                  class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors duration-200"
                >
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                  </svg>
                  Masuk
                </button>
              </div>

              <!-- Honeypot trap for bots (hidden field) -->
              <div class="hidden">
                <input type="text" name="website" tabindex="-1" autocomplete="off" />
              </div>

              <!-- Register Link -->
              <div class="text-center mt-6">
                <p class="text-sm text-gray-600">
                  Belum punya akun?
                  <a class='font-medium text-emerald-600 hover:text-emerald-700' href='/admin/register'> Daftar </a>
                </p>
              </div>
            </form>
          </div>

          <!-- Mobile Footer -->
          <div class="text-center text-sm text-gray-600 mt-auto pt-8 md:hidden">&copy; 2025 ISI Yogyakarta</div>
        </div>
      </div>
    </div>

  
  </body>
</html>
