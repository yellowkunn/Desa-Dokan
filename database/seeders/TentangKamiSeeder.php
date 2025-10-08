<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class TentangKamiSeeder extends Seeder
{
    public function run(): void
    {
        AboutUs::create([
            'title' => 'Desa Wisata Dokan',
            'background' => 'images/bg2.jpg',
            'content' => "Desa Dokan terletak di Kecamatan Merek, Kabupaten Karo, Sumatra Utara. Berada di dataran tinggi Bukit Barisan dengan topografi perbukitan dan iklim sejuk, desa ini menjadi salah satu daerah paling subur di Karo. Pertanian menjadi tulang punggung perekonomian, dengan hasil utama kopi, jeruk, dan sayuran. Desa ini juga dikenal sebagai desa adat Suku Karo yang masih mempertahankan tradisi leluhur. Daya tarik utama bagi wisatawan adalah keberadaan rumah adat Karo, Rumah Siwaluh Jabu, yang menjadi bukti nyata kekayaan budaya dan arsitektur tradisional. Letaknya yang strategis dan dekat dengan Danau Toba menjadikan Dokan sebagai destinasi budaya dan alam yang menarik.",
            'visi' => 'Visi',
            'visiContent' => 'Menjadi desa wisata budaya unggulan di Sumatera Utara yang melestarikan warisan adat Karo, meningkatkan kesejahteraan masyarakat, dan menarik wisatawan nusantara maupun mancanegara.',
            'misi' => 'Misi',
            'misiContent' => json_encode([
                'Melestarikan rumah adat Siwaluh Jabu dan tradisi seni budaya Karo.',
                'Mengembangkan produk unggulan seperti kopi Dokan dan kuliner khas.',
                'Meningkatkan fasilitas wisata ramah lingkungan, termasuk glamping dan agrowisata.',
                'Memberdayakan masyarakat melalui pelatihan dan keterlibatan langsung dalam pengelolaan wisata.',
                'Membangun promosi wisata berbasis digital dan kolaborasi dengan pemerintah/komunitas.',
            ]),
            'gambar' => 'images/desadokan2.png'
        ]);
    }
}
