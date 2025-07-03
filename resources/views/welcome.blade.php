<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEIMA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 text-gray-900">

    <!-- NAVBAR PUTIH -->
    <nav class="bg-white shadow-md w-full z-50 fixed top-0 left-0">
        <div class="max-w-7xl mx-auto px-6 sm:px-16 py-4 flex items-center justify-between">
            <!-- Logo (gambar) -->
            <a href="/" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo_3.jpg') }}" alt="Logo SEIMA" class="h-[60px] w-auto>
                <span class="sr-only"></span>
            </a>

            <!-- Tombol Login & Register -->
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="text-blue-800 font-semibold hover:underline">
                    Login
                </a>
                <a href="{{ route('register') }}"
                   class="bg-blue-800 text-white font-bold px-4 py-2 rounded hover:bg-blue-700 transition">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative w-full min-h-screen pt-24">
        <!-- Gambar Background -->
        <img src="{{ asset('images/dashboard.jpg') }}" 
             alt="Dashboard Background"
             class="absolute inset-0 w-full h-full object-cover">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-blue-900 bg-opacity-60"></div>

        <!-- Konten -->
        <div class="relative z-10 flex flex-col justify-center items-start h-full px-8 sm:px-16 pt-12 text-white">
            <h1 class="text-4xl sm:text-6xl font-extrabold leading-tight mb-6 drop-shadow">
                Selamat Datang di SEIMA
            </h1>
            <p class="text-lg sm:text-xl max-w-xl mb-6 text-white/90 drop-shadow">
                Platform informasi lengkap untuk mahasiswa! Temukan peluang magang, volunteer, lomba, dan banyak lagi.
            </p>
            <a href="{{ route('register') }}"
               class="bg-white text-blue-800 font-bold px-6 py-3 rounded-lg hover:bg-gray-100 transition drop-shadow">
                Daftar Sekarang
            </a>
        </div>
    </div>

   

</body>
</html>
