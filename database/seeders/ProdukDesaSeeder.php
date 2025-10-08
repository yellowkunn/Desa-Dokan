<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukDesa;

class ProdukDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdukDesa::create([
            'title' => 'Produk Desa',
            'background' => 'images/bg2.jpg',
            'deskripsi' => 'Produk desa merupakan olahan Masyarakat lokal yang mencerminkan pemanfaatan sumber daya alam serta keterampilan tradisional. Produk-produk ini menjadi bagian penting dari identitas desa dan berkontribusi pada perekonomian melalui kegiatan UMKM.',
        ]);

        // Produk-produk UMKM
        $produk = [
            ['cardTitle' => 'Bubuk Kopi Arabika Karo', 'gambar' => 'images/produkdesa/p1.jpg'],
            ['cardTitle' => 'Tenun Tradisional Uis Karo', 'gambar' => 'images/produkdesa/p2.jpg'],
            ['cardTitle' => 'Minyak Karo Laucih', 'gambar' => 'images/produkdesa/p3.jpg'],
            ['cardTitle' => 'Anyaman Bambu Produk  UMKM', 'gambar' => 'images/produkdesa/p4.jpg'],
        ];

        foreach ($produk as $item) {
            ProdukDesa::create($item);
        }
    }
}
