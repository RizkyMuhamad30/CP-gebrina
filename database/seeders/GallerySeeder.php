<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Armada Truk Tangki Vakum Modern CV GEBRINA JAYA',
                'image_path' => 'images/gallery/truk-armada-1.jpg',
                'category' => 'armada',
                'description' => 'Truk tangki vakum kapasitas 5000 Liter siap melayani kawasan Jakarta & sekitarnya.',
            ],
            [
                'title' => 'Penyedotan Septic Tank Perumahan di Kebayoran Baru',
                'image_path' => 'images/gallery/sedot-wc-rumah-1.jpg',
                'category' => 'sedot-wc',
                'description' => 'Proses pengurasan penuh tanpa bongkar keramik dengan selang jangkauan 50 meter.',
            ],
            [
                'title' => 'Pelancaran Pipa Wastafel Mampet Restoran di BSD Tangerang',
                'image_path' => 'images/gallery/saluran-mampet-1.jpg',
                'category' => 'saluran-mampet',
                'description' => 'Pembersihan endapan lemak membeku menggunakan mesin spiral roto-cleaner.',
            ],
            [
                'title' => 'Pengurasan Grease Trap & Penampungan Lemak Restoran',
                'image_path' => 'images/gallery/limbah-restoran-1.jpg',
                'category' => 'limbah-industri',
                'description' => 'Penyedotan limbah cair lemak restoran secara berkala dengan standar higienis.',
            ],
            [
                'title' => 'Pembuatan Septic Tank Bio-Tech Kedap Air di Depok',
                'image_path' => 'images/gallery/septic-tank-baru-1.jpg',
                'category' => 'septic-tank',
                'description' => 'Konstruksi septic tank biopori ramah lingkungan bebas bau dan tahan bocor.',
            ],
            [
                'title' => 'Tim Teknisi Berpengalaman Siap Bertugas 24/7',
                'image_path' => 'images/gallery/tim-teknisi-1.jpg',
                'category' => 'armada',
                'description' => 'Petugas profesional dibekali seragam dan perlengkapan K3 keselamatan kerja.',
            ],
            [
                'title' => 'Proses Sedot Septic Tank Gedung Perkantoran Cikarang',
                'image_path' => 'images/gallery/sedot-wc-kantor-1.jpg',
                'category' => 'sedot-wc',
                'description' => 'Pengerjaan pengurasan septic tank skala besar pada jam malam di area pabrik.',
            ],
            [
                'title' => 'Pembersihan Saluran Kloset Tersumbat di Perumahan Cibubur',
                'image_path' => 'images/gallery/saluran-mampet-2.jpg',
                'category' => 'saluran-mampet',
                'description' => 'Pelancaran kloset meluap dalam hitungan menit tanpa merusak pipa bawah tanah.',
            ],
        ];

        foreach ($items as $item) {
            GalleryItem::updateOrCreate(['title' => $item['title']], $item);
        }
    }
}
