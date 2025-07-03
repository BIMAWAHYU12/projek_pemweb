<x-app-layout>
<div class="relative w-full min-h-screen overflow-hidden">

    <!-- Slider Background -->
    <div id="slider" class="flex absolute inset-0 w-full h-full transition-transform duration-1000 ease-in-out">
        <img src="{{ asset('images/dashboard.jpg') }}" class="w-full h-full object-cover shrink-0" />
        <img src="{{ asset('images/dashboard_2.jpg') }}" class="w-full h-full object-cover shrink-0" />
        <img src="{{ asset('images/dashboard_3.jpg') }}" class="w-full h-full object-cover shrink-0" />
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-blue-900 bg-opacity-60 z-10"></div>

    <!-- Banner Konten -->
    <div class="relative z-20 flex flex-col justify-center items-start h-full px-8 sm:px-16 pt-24 text-white">
        <h1 class="text-4xl sm:text-6xl font-extrabold leading-tight mb-4 drop-shadow font-[Figtree]">
            Selamat Datang di SEIMA
        </h1>
        <p class="text-lg sm:text-xl max-w-2xl mb-6 text-white/90 drop-shadow font-[Figtree]">
            Pusat informasi terdepan untuk mahasiswa Nurul Fikri! Temukan peluang emas seperti magang, volunteer, lomba, kegiatan kampus, dan info menarik lainnya yang bisa membentuk masa depanmu.
        </p>
    </div>
</div>

<!-- JS Slider -->
<script>
    const slider = document.getElementById('slider');
    const slides = slider.children;
    const total = slides.length;
    let index = 0;

    function slideNext() {
        index = (index + 1) % total;
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    setInterval(slideNext, 6000);
</script>

<!-- Section: Event -->
<section class="py-16 bg-white text-center px-4 sm:px-8">
    <h2 class="text-3xl font-bold text-blue-800 mb-10">🎯 Siap Mengikuti Event?</h2>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 max-w-6xl mx-auto">
        @php
            $kategori = [
                ['nama' => 'Magang', 'gambar' => 'meeting.png', 'route' => route('magang')],
                ['nama' => 'Volunteer', 'gambar' => 'volunteer.png', 'route' => route('volunteer')],
                ['nama' => 'Lomba', 'gambar' => 'winning.png', 'route' => route('perlombaan')],
                ['nama' => 'Event Kampus', 'gambar' => 'campus.png', 'route' => route('kampus')],
                ['nama' => 'Lainnya', 'gambar' => 'menu.png', 'route' => route('lainya')],
            ];
        @endphp

        @foreach ($kategori as $item)
        <a href="{{ $item['route'] }}" class="flex flex-col items-center justify-center bg-blue-100 rounded-xl py-6 hover:bg-blue-200 transition shadow">
            <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" class="w-16 h-16 mb-2" />
            <span class="mt-1 font-semibold text-blue-800">{{ $item['nama'] }}</span>
        </a>
        @endforeach
    </div>
</section>

<!-- Section: Dokumentasi -->
<section class="py-16 bg-gray-100 text-center">
    <h2 class="text-3xl font-bold text-blue-800 mb-4">Dokumentasi</h2>
    <p class="text-gray-700 max-w-xl mx-auto mb-10">Lihat kembali momen-momen seru dari berbagai event mahasiswa. Abadikan pengalamanmu bersama kami!</p>

    <div class="overflow-x-auto px-4">
        <div class="flex gap-6 w-max">
            @foreach ([
                ['gambar' => 'dashboard_3.jpg', 'judul' => 'Workshop UI/UX'],
                ['gambar' => 'download.jpg', 'judul' => 'Volunteer Bersih Pantai'],
                ['gambar' => 'debat.png', 'judul' => 'Lomba Cerdas Cermat'],
                ['gambar' => 'seminar.png', 'judul' => 'Seminar Karier'],
                ['gambar' => 'magang.jpg', 'judul' => 'Magang di Startup'],
                ['gambar' => 'coding.png', 'judul' => 'Pelatihan Coding'],
            ] as $dok)
          <div class="flex-shrink-0 w-[75vw] sm:w-[550px] rounded-xl overflow-hidden bg-white shadow-lg">
    <img src="{{ asset('images/' . $dok['gambar']) }}" class="w-full h-[400px] object-cover">

                <div class="p-4 text-left">
                    <h3 class="font-bold text-blue-800 text-lg">{{ $dok['judul'] }}</h3>
                    <p class="text-sm text-gray-600">Dokumentasi kegiatan {{ strtolower($dok['judul']) }} yang dilaksanakan bersama mahasiswa NF.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section: Tentang Kami -->
<section class="py-16 bg-white text-center">
    <h2 class="text-3xl font-bold mb-4 text-blue-800">Tentang Kami</h2>
<p class="text-gray-700 max-w-5xl mx-auto mb-10">
    SEIMA (Sebar Informasi Mahasiswa) adalah sebuah platform digital yang dikembangkan oleh sekelompok mahasiswa Teknik Informatika STT Nurul Fikri. SEIMA hadir sebagai tempat untuk mencari dan membagikan informasi seputar kegiatan mahasiswa, seperti lomba, program volunteer, acara internal kampus, hingga info tempat magang yang relevan. Platform ini bertujuan untuk memudahkan mahasiswa dalam mengakses berbagai peluang pengembangan diri, baik di bidang akademik, organisasi, maupun karier. Dengan SEIMA, mahasiswa STT Nurul Fikri bisa tetap up-to-date terhadap informasi penting dan mendapatkan akses yang lebih luas terhadap kesempatan yang bermanfaat.

</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-6 max-w-6xl mx-auto">
        @foreach ([
            ['nama' => 'Bima', 'foto' => 'bima.png', 'nim' => '0110224059', 'link' => 'https://github.com/BIMAWAHYU12'],
            ['nama' => 'Syifa Zakia Qolbi', 'foto' => 'syifa.jpg', 'nim' => '0110224083', 'link' => 'https://github.com/Syifazakiaqolbi'],
            ['nama' => 'Mohammad Fiqri ramadhan', 'foto' => 'fiqri.jpg', 'nim' => '0110220017 ', 'link' => 'https://github.com/mohammadfiqri30'],
            ['nama' => 'Nurul Destiyana', 'foto' => 'nurul.jpg', 'nim' => '0110224154', 'link' => 'https://github.com/NurulDestiyana'],
            ['nama' => 'Ardhika Adfiansyah Setiana', 'foto' => 'dika.jpg', 'nim' => '0110224206', 'link' => 'https://github.com/Adfiansyahhh'],
            ['nama' => 'Muhamad Haikal Muzaki ', 'foto' => 'haikal.jpg', 'nim' => '0110224016', 'link' => 'https://github.com/MuhamadHaikalMuzaki'],
        ] as $dev)
        <div class="bg-gray-50 shadow-md rounded-xl p-4 text-center">
            <a href="{{ $dev['link'] }}" target="_blank" class="block w-fit mx-auto">
                <img src="{{ asset('images/' . $dev['foto']) }}" class="w-32 h-32 object-cover rounded-full mx-auto mb-4 transition-transform duration-300 hover:scale-105" alt="{{ $dev['nama'] }}">
            </a>
            <h3 class="text-xl font-semibold text-blue-900">{{ $dev['nama'] }}</h3>
            <p class="text-gray-600 text-sm mt-1">{{ $dev['nim'] }}</p>
        </div>
        @endforeach
    </div>
</section>

<!-- CTA Hubungi Kami -->
<div class="mt-20 pt-16 mb-20 text-center">
    <h3 class="text-2xl font-semibold text-blue-800 mb-4">Punya Informasi atau Pertanyaan?</h3>
    <p class="text-gray-700 mb-6">Jika kamu ingin membagikan info kegiatan atau butuh bantuan, hubungi kami langsung melalui WhatsApp.</p>

    <a href="https://wa.me/6281319236617?text=Halo%20tim%20SEIMA%2C%20saya%20ingin%20menanyakan%20tentang%20informasi%20event..."
       target="_blank"
       class="inline-flex items-center gap-3 bg-green-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-600 transition drop-shadow">
        <img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-6 h-6">
        Hubungi Kami via WhatsApp
    </a>
</div>

<x-footer />
</x-app-layout>
