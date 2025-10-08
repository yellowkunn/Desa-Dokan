<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak;

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        Kontak::create([
            'title' => 'Kontak',
            'background' => 'images/bg2.jpg',
            'instagram' => 'https://www.instagram.com/desa_wisata_budaya_dokan?igsh=MWx2MDFtankyaGI3Nw==',
            'lokasi' => 'Dokan, Kec. Merek, Kabupaten Karo, Sumatera Utara',
            'maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15936.95037798686!2d98.53731130217804!3d3.030798400916961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031aa49a9686999%3A0x9da0597cad8f967f!2sDokan%2C%20Kec.%20Merek%2C%20Kabupaten%20Karo%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1759549286864!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'whatsapp'     => '085374625479',
            'email'  => 'albynexiginting@gmail.com',
        ]);
    }
}
