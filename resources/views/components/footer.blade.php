<footer class="bg-gray-300  text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            
            <!-- Logo SEIMA -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-3 text-gray-700">Tentang Kami</h4>
                <p class="text-sm text-gray-500 leading-relaxed">
SEIMA adalah tempatnya anak STT Nurul Fikri nyari info terkini. Mulai dari volunteer, magang, lomba, sampai acara kampus – semua ada! Yuk, mulai bangun pengalaman dan relasi dari sekarang.            </div>

            <!-- Tim Pengembang -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-3 text-gray-700">Tim Pengembang</h4>
             <ul class="text-sm space-y-1 text-gray-500">
                <li><a href="https://github.com/BIMAWAHYU12" class="hover:text-[#F97316] hover:underline transition">Bima</a></li>
                <li><a href="https://github.com/mohammadfiqri30" class="hover:text-[#F97316] hover:underline transition">M. Fiqri Ramadhan</a></li>
                <li><a href="https://github.com/MuhamadHaikalMuzaki" class="hover:text-[#F97316] hover:underline transition">M. Haikal Muzaki</a></li>
                <li><a href="https://github.com/Adfiansyahhh" class="hover:text-[#F97316] hover:underline transition">Ardika Adfiansyah S.</a></li>
                <li><a href="https://github.com/Syifazakiaqolbi" class="hover:text-[#F97316] hover:underline transition">Syifa Zakia Qolbi</a></li>
                <li><a href="https://github.com/NurulDestiyana" class="hover:text-[#F97316] hover:underline transition">Nurul Destiyana</a></li>
            </ul>

            </div>

            <!-- Navigasi -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-3 text-gray-700">Navigasi</h4>
                <ul class="text-sm space-y-2 text-gray-500">
                    <li><a href="/" class="hover:text-[#F97316] hover:underline transition">Beranda</a></li>
                    <li><a href="/volunteer" class="hover:text-[#F97316] hover:underline transition">Volunteer</a></li>
                    <li><a href="/perlombaan" class="hover:text-[#F97316] hover:underline transition">Perlombaan</a></li>
                    <li><a href="/magang" class="hover:text-[#F97316] hover:underline transition">Tempat Magang</a></li>
                    <li><a href="/kampus" class="hover:text-[#F97316] hover:underline transition">Event Internal kampus</a></li>
                    <li><a href="/lainya" class="hover:text-[#F97316] hover:underline transition">Informasi lainya</a></li>
                </ul>
            </div>

            <!-- Kontak & Sosial -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-3 text-gray-700">Kontak</h4>
                <div class="space-y-2 text-sm text-gray-500">
                    <div class="flex items-center gap-3 justify-center md:justify-start">
                        <img src="{{ asset('images/email.png') }}" alt="Email" class="w-5 h-5">
                        <span>info@seima.com</span>
                    </div>
                    <div class="flex items-center gap-3 justify-center md:justify-start">
                        <img src="{{ asset('images/ig.png') }}" alt="Instagram" class="w-5 h-5">
                        <span>@seima_id</span>
                    </div>
                    <div class="flex items-center gap-3 justify-center md:justify-start">
                        <img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-5 h-5">
                        <a href="https://wa.me/6281319236617" target="_blank" class="text-green-600 hover:text-green-500 transition">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 mt-8 pt-3 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} SEIMA. All rights reserved.
        </div>
    </div>
</footer>
