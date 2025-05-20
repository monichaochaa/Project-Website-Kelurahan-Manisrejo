<footer class="bg-gray-900 text-white py-6">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Peta Wilayah -->
        <div>
            <h2 class="text-lg font-semibold mb-2">📍 Peta Wilayah Manisrejo</h2>
            <img src="{{ asset('https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2023/10/MANISREJO-1-min.jpg') }}" alt="Peta Wilayah Manisrejo" class="w-full">
        </div>

        <!-- Kalender -->
        <div>
            <h2 class="text-lg font-semibold mb-2">📅 KALENDER</h2>
            <!-- Kalender buatan manual atau bisa pakai library -->
            <div class="text-sm">
                <strong>Mei 2025</strong>
                <div class="grid grid-cols-7 gap-1 text-center mt-2">
                    <div>S</div><div>S</div><div>R</div><div>K</div><div>J</div><div>S</div><div>M</div>
                    @for ($i = 1; $i <= 31; $i++)
                        <div>{{ $i }}</div>
                    @endfor
                </div>
                <a href="#" class="text-blue-400 underline block mt-2">&laquo; Apr</a>
            </div>
        </div>

        <!-- Kategori dan Index Berita -->
        <div>
            <h2 class="text-lg font-semibold mb-2">📂 Kategori</h2>
            <select class="w-full text-black p-2 rounded">
                <option>Pilih Kategori</option>
            </select>
            <h2 class="text-lg font-semibold mt-4 mb-2">📰 Index Berita</h2>
            <ul class="text-sm space-y-1">
                <li><a href="#" class="hover:underline">Panen Raya Serentak bersama Wali Kota Madiun</a></li>
                <li><a href="#" class="hover:underline">Apel Rutin Karyawan Karyawati Kelurahan Manisrejo</a></li>
                <li><a href="#" class="hover:underline">Rapat Koordinasi dan Penertiban PKL Pagu Indah</a></li>
                <li><a href="#" class="hover:underline">Ulur tangan dari Pemerintah Provinsi Jawa Timur dengan Program ASPD</a></li>
                <li><a href="#" class="hover:underline">Halal Bihalal Perdana setelah Cuti Bersama</a></li>
            </ul>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center mt-6 border-t border-gray-700 pt-4 text-sm">
        Copyright © 2025 Website Resmi Kelurahan Manisrejo | Mindful Blog by Ascendoor | Powered by WordPress.
        <br>
        <a href="#" class="text-blue-400 hover:underline">Back to Top ⮝</a>
    </div>
</footer>
