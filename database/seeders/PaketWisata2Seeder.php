<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata2;
use App\Models\Itinerary;

class PaketWisata2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ============================
        // PAKET WISATA 3D2N
        // ============================
        $paket3d2n = PaketWisata2::create(['label' => '3D2N']);

        $itineraries3d2n = [
            ['Hari 1', '06.00 – 07.00', 'Berkumpul di Lapangan Merdeka Medan, registrasi peserta, briefing singkat perjalanan'],
            ['Hari 1', '07.00 – 07.30', 'Kunjungan ke Masjid Raya Al Mashun, peninggalan Kesultanan Deli dengan desain interior perpaduan Melayu, Eropa & Timur Tengah'],
            ['Hari 1', '07.30 – 08.00', 'Kunjungan ke Istana Maimun, melihat kemegahan bangunan kerajaan Kesultanan Deli & berbelanja souvenir khas Melayu'],
            ['Hari 1', '08.00 – 11.00', 'Perjalanan menuju Berastagi'],
            ['Hari 1', '11.00 – 11.30', 'Pasar Buah Berastagi – melihat pusat kota, wisata menunggang kuda, membeli buah lokal'],
            ['Hari 1', '11.30 – 11.45', 'Perjalanan menuju Bukit Gundaling'],
            ['Hari 1', '11.45 – 12.30', 'Bukit Gundaling – panorama Gunung Sinabung & Sibayak'],
            ['Hari 1', '12.30 – 12.50', 'Perjalanan menuju restoran'],
            ['Hari 1', '12.50 – 13.40', 'Makan siang di restoran lokal khas Karo'],
            ['Hari 1', '13.40 – 14.30', 'Taman Alam Lumbini – melihat kemegahan pagoda emas khas Myanmar, foto & sewa kostum'],
            ['Hari 1', '14.30 – 15.30', 'Perjalanan menuju Desa Dokan'],
            ['Hari 1', '15.30 – 17.00', 'Desa Dokan – tur budaya, melihat rumah adat Karo, belajar musik tradisional, hasil olahan lokal (madu)'],
            ['Hari 1', '17.00 – 17.30', 'Perjalanan menuju hotel'],
            ['Hari 1', '17.30 – Malam', 'Tiba di Hotel 4* Sidikalang (Dairi), check-in, makan malam, free program'],

            ['Hari 2', '08.00 – 08.30', 'Hotel – sarapan, check-out, briefing singkat'],
            ['Hari 2', '08.30 – 09.30', 'Kunjungan ke Noxi Coffee, menikmati kopi khas Sidikalang'],
            ['Hari 2', '09.30 – 10.30', 'Perjalanan menuju Air Terjun Lae Mbilu-Lu'],
            ['Hari 2', '10.30 – 12.00', 'Air Terjun Lae Mbilu-Lu – air terjun kembar dengan panorama alam'],
            ['Hari 2', '12.00 – 13.00', 'Makan siang di restoran lokal'],
            ['Hari 2', '13.00 – 14.30', 'Perjalanan menuju Rumah Adat Pakpak Bharat'],
            ['Hari 2', '14.30 – 16.00', 'Rumah Adat Pakpak (Sopo Jojong) – mengenal budaya & asal suku Pakpak'],
            ['Hari 2', '16.00 – 16.20', 'Perjalanan menuju Salak'],
            ['Hari 2', '16.20 – Malam', 'Tiba di Hotel 4* Salak, check-in, makan malam, free program'],

            ['Hari 3', '09.00 – 11.30', 'Hotel – sarapan, check-out, briefing, perjalanan menuju Air Terjun Sipiso-piso'],
            ['Hari 3', '11.30 – 14.00', 'Kunjungan ke Air Terjun Sipiso-piso'],
            ['Hari 3', '14.00 – 15.30', 'Perjalanan menuju Bukit Indah Simarjarunjung'],
            ['Hari 3', '15.30 – 16.00', 'Foto & bersantai di Bukit Indah Simarjarunjung'],
            ['Hari 3', '16.00 – 19.00', 'Perjalanan kembali menuju Medan'],
            ['Hari 3', '19.00', 'Perjalanan selesai'],
        ];

        foreach ($itineraries3d2n as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket3d2n->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }

        // ============================
        // PAKET WISATA 2D1N
        // ============================
        $paket2d1n = PaketWisata2::create(['label' => '2D1N']);

        $itineraries2d1n = [
            ['Hari 1', '06.00 – 07.00', 'Berkumpul di Lapangan Merdeka Medan, registrasi peserta, briefing singkat perjalanan'],
            ['Hari 1', '07.00 – 07.30', 'Singgah ke Masjid Raya Al Mashun – peninggalan Kesultanan Deli dengan desain interior perpaduan Melayu, Eropa & Timur Tengah'],
            ['Hari 1', '07.30 – 08.00', 'Kunjungan ke Istana Maimun – melihat kemegahan bangunan kerajaan Kesultanan Deli dan berbelanja souvenir khas Melayu'],
            ['Hari 1', '08.00 – 11.00', 'Perjalanan menuju Brastagi'],
            ['Hari 1', '11.00 – 11.30', 'Pasar Buah Berastagi – melihat pusat kota, wisata menunggang kuda, membeli buah asli Tanah Karo'],
            ['Hari 1', '11.30 – 11.45', 'Perjalanan menuju Bukit Gundaling'],
            ['Hari 1', '11.45 – 12.30', 'Bukit Gundaling – menikmati panorama Gunung Sinabung & Gunung Sibayak'],
            ['Hari 1', '12.30 – 12.50', 'Perjalanan menuju restoran'],
            ['Hari 1', '12.50 – 13.40', 'Makan siang di restoran lokal khas Karo'],
            ['Hari 1', '13.40 – 14.30', 'Taman Alam Lumbini – melihat kemegahan pagoda khas Myanmar, berfoto, sewa kostum Hanbok'],
            ['Hari 1', '14.30 – 15.30', 'Perjalanan menuju Desa Dokan'],
            ['Hari 1', '15.30 – 17.00', 'Desa Dokan – tur budaya, melihat rumah adat tradisional Karo, belajar alat musik tradisional, melihat hasil olahan lokal seperti madu'],
            ['Hari 1', '17.00 – 17.30', 'Perjalanan menuju hotel'],
            ['Hari 1', '17.30 – Malam', 'Tiba di Hotel 4* Sidikalang (Dairi), check-in, makan malam, free program'],

            ['Hari 2', '08.00 – 08.30', 'Sarapan di hotel, check-out, briefing singkat'],
            ['Hari 2', '08.30 – 09.30', 'Air Terjun Lae Mbilu-Lu – keindahan alam air terjun kembar'],
            ['Hari 2', '09.30 – 11.00', 'Perjalanan menuju Rumah Adat Pakpak Bharat'],
            ['Hari 2', '11.00 – 12.00', 'Rumah Adat Pakpak Bharat (Sopo Jojong) – mengenal lebih dalam asal suku Pakpak dan budaya masyarakat setempat'],
            ['Hari 2', '12.00 – 13.00', 'Makan siang di restoran lokal'],
            ['Hari 2', '13.00 – 16.00', 'Perjalanan menuju Bukit Indah Simarjarunjung'],
            ['Hari 2', '16.00 – 16.30', 'Berfoto dan bersantai di Bukit Indah Simarjarunjung sebelum menuju Medan'],
            ['Hari 2', '16.30 – 19.30', 'Perjalanan menuju Medan'],
            ['Hari 2', '19.30', 'Perjalanan selesai'],
        ];

        foreach ($itineraries2d1n as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket2d1n->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }

        // ============================
        // PAKET WISATA 1D
        // ============================
        $paket1d = PaketWisata2::create(['label' => '1D']);

        $itineraries1d = [
            ['Hari 1', '06.00 – 07.00', 'Berkumpul di Lapangan Merdeka Medan, registrasi peserta, briefing singkat perjalanan'],
            ['Hari 1', '07.00 – 10.00', 'Perjalanan menuju Brastagi'],
            ['Hari 1', '10.00 – 10.30', 'Pasar Buah Berastagi – melihat pusat kota, wisata menunggang kuda, membeli buah asli Tanah Karo'],
            ['Hari 1', '10.30 – 10.45', 'Perjalanan menuju Bukit Gundaling'],
            ['Hari 1', '10.45 – 11.30', 'Bukit Gundaling – menikmati panorama Gunung Sinabung & Gunung Sibayak'],
            ['Hari 1', '11.30 – 12.00', 'Perjalanan menuju Taman Alam Lumbini'],
            ['Hari 1', '12.00 – 12.45', 'Taman Alam Lumbini – melihat kemegahan pagoda khas Myanmar, berfoto, dan menyewa kostum Hanbok'],
            ['Hari 1', '12.45 – 13.30', 'Makan siang di restoran lokal khas Karo'],
            ['Hari 1', '13.30 – 14.30', 'Perjalanan menuju Desa Dokan'],
            ['Hari 1', '14.30 – 16.00', 'Desa Dokan – tur budaya, melihat rumah adat tradisional Karo, belajar alat musik, melihat hasil olahan lokal seperti madu'],
            ['Hari 1', '16.00 – 19.00', 'Perjalanan kembali menuju Medan via Brastagi'],
            ['Hari 1', '19.00', 'Perjalanan selesai'],
        ];

        foreach ($itineraries1d as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket1d->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }
    }
}
