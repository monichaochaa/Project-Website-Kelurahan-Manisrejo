<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        $posts = [
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/04/10042025-PANEN-RAYA-PADI-SERENTAK-COVER.png',
                'title'   => 'Panen Raya Serentak bersama Wali Kota Madiun',
                'author'  => 'Dewi Admin',
                'date'    => 'April 10, 2025',
                'excerpt' => 'Panen Raya Serentak dilaksanakan pada Kamis, 10 April 2025 (10.00 WIB) dipimpin langsung oleh Wali Kota Madiun, Dr. Maidi, bersama…',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/04/10/panen-raya-serentak-bersama-wali-kota-madiun/'
            ],
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/04/10042025-APEL-PAGI-COVER.png',
                'title'   => 'Apel Rutin Karyawan Karyawati Kelurahan Manisrejo',
                'author'  => 'Dewi Admin',
                'date'    => 'April 10, 2025',
                'excerpt' => 'Apel Karyawan Karyawati Kelurahan Manisrrejo. Pagi Kamis, 10 April 2025 Pukul 07.00 WIB yang dilaksanakan oleh Karyawan Karyawati Kelurahan Manisrejo…',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/04/10/apel-rutin-karyawan-karyawati-kelurahan-manisrejo/'
            ],
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/04/08042025-RAPAT-PKL-COVER.png',
                'title'   => 'Rapat Koordinasi Dan Penertiban PKL Pagu Indah',
                'author'  => 'Dewi Admin',
                'date'    => 'April 08, 2025',
                'excerpt' => 'Rapat Koordinasi dan Penertiban Pedagang Kaki Lima (PKL) di sepanjang Jalan Pagu Indah, yang dilaksanakan pada Selasa, 08 April 2025…',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/04/08/rapat-koordinasi-dan-penertiban-pkl-pagu-indah/'
            ],
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/04/08042025-PENYALURAN-BANTUAN-COVER.png',
                'title'   => 'Ulur tangan dari Pemerintah Provinsi Jawa Timur dengan Program ASPD',
                'author'  => 'Dewi Admin',
                'date'    => 'April 08, 2025',
                'excerpt' => 'Bantuan dari Provinsi Jawa Timur senilai Rp 900 ribu untuk penyandang disabilitas terkait dengan program Asistensi Sosial Penyandang Disabilitas (ASPD)…',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/04/08/ulur-tangan-dari-pemerintah-provinsi-jawa-timur-dengan-program-aspd/'
            ],
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/04/08042025-HALAL-BIHALAL-COVER.png',
                'title'   => 'Halal Bilahalal Perdana setelah Cuti Bersama',
                'author'  => 'Dewi Admin',
                'date'    => 'April 08, 2025',
                'excerpt' => 'Pemerintah Kota Madiun, menggelar acara Halal Bihalal bersama di Pahlawan Business Center (PBC) Jalan Pahawan Kota Madiun pada Selasa, 08…',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/04/08/halal-bilahalal-perdana-setelah-cuti-bersama/'
            ],
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/03/27032025-RAPAT-KARYAWAN-DAN-KARYAWATI-1.png',
                'title'   => 'Rapat Karyawan Karyawati menjelang Idul Fitri',
                'author'  => 'Dewi Admin',
                'date'    => 'Maret 27, 2025',
                'excerpt' => 'Rapat internal pegawai kelurahan memiliki beberapa tujuan penting yaitu Memastikan semua pegawai memiliki pemahaman yang sama tentang program kerja, target,…',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/03/27/rapat-karyawan-karyawati-menjelang-idul-fitri/'
            ],
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/03/PELAYANAN-AJA.png',
                'title'   => 'Pengumuman Cuti Bersama Idul Fitri Tahun 2025',
                'author'  => 'Dewi Admin',
                'date'    => 'Maret 27, 2025',
                'excerpt' => '',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/03/27/pengumuman-cuti-bersama-idul-fitri-tahun-2025/'
            ],
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/03/26032025-REOG-LAPAK-1.png',
                'title'   => 'Melestarikan Kebudayaan Reog Tampil di Lapak UMKM',
                'author'  => 'Dewi Admin',
                'date'    => 'Maret 26, 2025',
                'excerpt' => 'Antusias Masyarakat luar biasa, berbondong-bondong menyaksikan Seni Pertunjukan tersebut. Kegiatan tersebut di monitoring oleh 3 Pilar Kelurahan Manisrejo bersama Pengurus…',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/03/26/melestarikan-kebudayaan-reog-tampil-di-lapak-umkm/'
            ],
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/03/26032025-PEMBINAAN-KEPEGAWAIAN-KECAMATAN-TAMAN-1.png',
                'title'   => 'Pembinaan Karyawan Karyawati Kecamatan Taman Kota Madiun',
                'author'  => 'Dewi Admin',
                'date'    => 'Maret 26, 2025',
                'excerpt' => 'Pembinaan Karyawan Karyawati yang dilaksanakan pada hari Rabu, 26 Maret 2025 Pukul 13.00 WIB di Aula Kecamatan Taman yang dipimpin…',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/03/26/pembinaan-karyawan-karyawati-kecamatan-taman-kota-madiun/'
            ],
            [
                'image'   => 'https://kelurahan-manisrejo.madiunkota.go.id/wp-content/uploads/2025/03/kelurahan_manisrejo-1.png',
                'title'   => 'Pembinaan Rumah Data Kependudukan oleh PLKB',
                'author'  => 'Dewi Admin',
                'date'    => 'Maret 24, 2025',
                'excerpt' => 'Pembinaan Rumah Data Kependudukan oleh PLKB mengacu pada bimbingan dan dukungan yang diberikan kepada Rumah Data Kependudukan (RDK), yaitu kelompok…',
                'link'    => 'https://kelurahan-manisrejo.madiunkota.go.id/index.php/2025/03/24/pembinaan-rumah-data-kependudukan-oleh-plkb/'
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
