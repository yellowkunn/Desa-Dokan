<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;

class PaketWisataSeeder extends Seeder
{
    public function run(): void
    {
        PaketWisata::create([
            'title' => 'Paket Wisata',
            'background' => 'images/bg2.jpg',
            'deskripsi' => 'Paket wisata dikabupaten karo umumnya menawarkan pengalaman menyeluruh yang memadukan keindahan alam, petualangan, dan interaksi budaya. Wisatawan dapat menikmati suasana hutan hujan tropis, mengamati satwa liar, menjelajahi pegunungan =, serta mengenal kehiudpan Masyarakat setempat melalui kegiatan budaya dan kuliner. Paket ini dirancang untuk memberikan pengalaman yang autentik sekaligus mendukung pariwisata berkelanjutan dikawasan tersebut.',
        ]);

                $data = [
            [
                'gambar' => 'images/paketwisata/pw1.jpg',
                'cardTitle' => 'Paket Wisata Berastagi 1 Hari (Exnevia Travel)',
                'harga' => 'Rp 400.000',
            ],
            [
                'gambar' => 'images/paketwisata/pw2.jpg',
                'cardTitle' => 'Air Terjun Sikulikap Treaking',
                'harga' => 'Rp 5.000 (pejalan kaki) • Rp 20.000 (motor) • Rp 60.000 (mobil)',
            ],
        ];

        foreach ($data as $item) {
            PaketWisata::create($item);
        }
    }
}
