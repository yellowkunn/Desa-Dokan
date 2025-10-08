<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DestinasiWisata;

class DestinasiWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DestinasiWisata::create([
            'title' => 'Destinasi Wisata',
            'background' => 'images/bg2.jpg',
        ]);
        $data = [
            [
                'title' => 'Destinasi Wisata',
                'background' => 'images/bg2.jpg',
                'cardTitle' => 'Puncak 2000 Siosar',
                'gambar' => 'images/destinasi/destinasi1.jpg',
                'cardContent' => "Puncak 2000 Siosar adalah destinasi alam di Karo dengan elevasi sekitar 2.000 meter di atas permukaan laut. Wisatawan datang untuk menikmati panorama pegunungan, udara sejuk, serta spot foto yang Instagramable. Di kawasan ini juga tersedia fasilitas seperti kolam renang di atas bukit, wahana “mountain slide”, serta penginapan dan warung di sekitar area."
            ],
            [
                'title' => 'Destinasi Wisata',
                'background' => 'images/bg2.jpg',
                'cardTitle' => 'Air Terjun Sikulikap',
                'gambar' => 'images/destinasi/destinasi2.jpg',
                'cardContent' => "Air Terjun Sikulikap berada di Desa Doulu, wilayah Penatapan, Kabupaten Karo, dengan aliran air yang menjulang sekitar 30 meter dan suasana alam yang sangat asri. Untuk mencapai lokasi, pengunjung harus melakukan trekking ringan melalui jalan setapak di hutan selama sekitar 10 hingga 15 menit. Udara di sekitar air terjun terasa sangat sejuk, dengan pepohonan lebat dan panorama alam yang menenangkan. Di kawasan ini juga disediakan berbagai spot foto menarik seperti rumah pohon dan pondok bergaya tradisional. Untuk memasuki kawasan tersebut, tarifnya sangat terjangkau — mulai dari Rp 5.000 (pejalan kaki) hingga Rp 60.000 (mobil) — dan destinasi ini buka setiap hari mulai pagi hingga malam. Tempat ini cocok sebagai destinasi “healing”, untuk menikmati alam, fotografi, piknik ringan, atau bahkan berkemah di alam terbuka."
            ],
        ];

        foreach ($data as $item) {
            DestinasiWisata::create($item);
        }
    }
}
