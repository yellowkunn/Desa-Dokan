<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dashboard;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hero Section
        Dashboard::create([
            'section' => 'hero',
            'title1' => 'DESA WISATA',
            'title2' => 'DESA DOKAN',
            'background' => 'images/bg1.jpg',
        ]);

        // Tentang Desa Wisata
        Dashboard::create([
            'section' => 'tentang',
            'title1' => 'Desa Wisata',
            'title2' => 'Dokan',
            'konten' => 'Desa Dokan adalah sebuah desa yang terletak di Kecamatan Merek, Kabupaten Karo, Sumatra Utara. Berada di dataran tinggi Bukit Barisan, desa ini diberkahi dengan topografi perbukitan dan iklim sejuk, menjadikannya salah satu daerah paling subur di Kabupaten Karo. Kondisi geografis ini sangat mendukung sektor pertanian, yang menjadi tulang punggung perekonomian masyarakatnya.',
            'background' => 'images/desadokan1.jpg',
        ]);

        // Destinasi Wisata Section
        Dashboard::create([
            'section' => 'destinasi',
            'title1' => 'Destinasi Wisata Dokan',
            'konten' => 'Objek Wisata Desa Dokan adalah Puncak 2000 Siosar dan Air Terjun Sikulikap',
        ]);

        // Paket Wisata Section
        Dashboard::create([
            'section' => 'paket',
            'title1' => 'Paket Wisata Pilihan',
        ]);
    }
}
