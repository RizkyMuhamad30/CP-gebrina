<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Sedot WC Rumahan & Perumahan',
                'slug' => 'sedot-wc-rumahan',
                'short_description' => 'Layanan kuras septic tank penuh untuk rumah tinggal, kontrakan, & perumahan dengan truk vakum bertenaga tinggi.',
                'description' => 'Layanan Sedot WC Rumahan dari CV GEBRINA JAYA dirancang khusus untuk mengatasi masalah septic tank penuh pada hunian Anda. Menggunakan armada truk tangki vakum modern berkapasitas besar dan selang hingga 100 meter, kami mampu menjangkau lokasi perkampungan maupun gang sempit tanpa mengganggu kenyamanan tetangga.

Kami menjamin proses kerja yang higienis, bersih, tanpa bau menyengat yang tertinggal, serta tanpa perlu membongkar struktur fisik rumah Anda secara berlebihan.',
                'icon' => 'home',
                'image_path' => 'images/services/service-sedot-wc.jpg',
                'features' => [
                    'Selang ekstra panjang hingga 100+ meter',
                    'Proses sedot cepat & tanpa bau menyengat',
                    'Penanganan profesional tanpa merusak ubin',
                    'Garansi pekerjaan 30 hari',
                ],
                'order' => 1,
            ],
            [
                'name' => 'Sedot WC Kantor, Ruko & Gedung',
                'slug' => 'sedot-wc-kantor-ruko',
                'short_description' => 'Solusi pengurasan septic tank skala besar untuk area komersial, ruko, perkantoran, rumah sakit, & gedung bertingkat.',
                'description' => 'Layanan khusus untuk sektor usaha, kantor, ruko, restoran, dan fasilitas publik. Penanganan septic tank berkapasitas besar membutuhkan armada truk vakum khusus bertekanan tinggi yang siap bekerja di luar jam operasional kantor Anda (malam/akhir pekan) agar tidak mengganggu operasional bisnis.

Tim CV GEBRINA JAYA dibekali APD lengkap dan standar K3 lingkungan yang ketat untuk menjamin keamanan area kerja komersial Anda.',
                'icon' => 'building-office',
                'image_path' => 'images/services/service-kantor.jpg',
                'features' => [
                    'Melayani pengerjaan malam / luar jam kerja',
                    'Armada kapasitas tangki besar (4000-6000 Liter)',
                    'Faktur tagihan & kelengkapan administrasi resmi',
                    'Penanganan standar K3 & ramah lingkungan',
                ],
                'order' => 2,
            ],
            [
                'name' => 'Pelancaran Saluran Mampet (Tanpa Bongkar)',
                'slug' => 'pelancaran-saluran-mampet',
                'short_description' => 'Atasi saluran pipa meluap, wastafel tersumbat, kran mati, atau floor drain mampet dengan teknologi modern tanpa pembongkaran.',
                'description' => 'Saluran pipa tersumbat lemak, sisa makanan, rambut, atau kerak semen? Jangan terburu-buru membongkar keramik lantai Anda! CV GEBRINA JAYA menggunakan mesin *spiral rigid cleaner* canggih dan *high-pressure hydro-jetting* yang mampu menghancurkan sumbatan di dalam saluran pipa PVC tanpa merusak pipa atau struktur bangunan.

Proses pengerjaan cepat (30-60 menit) dan saluran langsung lancar seperti baru kembali.',
                'icon' => 'wrench-screwdriver',
                'image_path' => 'images/services/service-saluran-mampet.jpg',
                'features' => [
                    'Teknologi Spiral Roto-Rooter modern',
                    'Tanpa bongkar lantai & keramik',
                    'Mampu menghancurkan kerak lemak & lemak restoran',
                    'Garansi saluran lancar 100%',
                ],
                'order' => 3,
            ],
            [
                'name' => 'Pembuatan & Perbaikan Septic Tank Baru',
                'slug' => 'pembuatan-septic-tank-baru',
                'short_description' => 'Jasa kontraksi pembuatan septic tank kedap air, sistem resapan biopori modern, & perbaikan dinding septic tank retak.',
                'description' => 'Septic tank lama Anda sering penuh meski baru disedot? Itu tandanya resapan air sudah tersumbat lumpur atau terjadi resapan buruk. CV GEBRINA JAYA melayani jasa pembuatan septic tank baru berstandar SNI dengan sistem filter bio-tech atau beton kedap air yang tahan puluhan tahun.

Kami juga melayani renovasi septic tank lama, pembuatan resapan baru, serta pemasangan pipa ventilasi udara anti-meledak.',
                'icon' => 'cog-6-teeth',
                'image_path' => 'images/services/service-septic-tank.jpg',
                'features' => [
                    'Standar konstruksi SNI & ramah lingkungan',
                    'Sistem bio-filter pencegah bau & cepat rembes',
                    'Termasuk penggalian & kerapian struktur',
                    'Daya tahan puluhan tahun',
                ],
                'order' => 4,
            ],
            [
                'name' => 'Sedot Limbah Industri & Restoran (Fat Trap)',
                'slug' => 'sedot-limbah-industri-restoran',
                'short_description' => 'Pengangkutan limbah cair non-B3, lemak olahan makanan (grease trap) restoran, & pengurasan kolam penampungan.',
                'description' => 'Lumpur olahan makanan (grease trap) pada restoran dan cafe jika dibiarkan dapat menimbulkan bau membusuk dan menyumbat saluran utama. CV GEBRINA JAYA menyediakan kontrak perawatan rutin maupun panggilan darurat pengurasan limbah lemak cair dan limbah pabrik non-B3.

Seluruh limbah yang diangkut akan dibuang ke Tempat Pembuangan Limbah Resmi (IPLT) yang terdaftar pada Dinas Lingkungan Hidup.',
                'icon' => 'beaker',
                'image_path' => 'images/services/service-limbah.jpg',
                'features' => [
                    'Pembersihan total jebakan lemak (grease trap)',
                    'Disposal ke IPLT resmi Pemda',
                    'Tersedia paket langganan bulanan restoran',
                    'Surat keterangan pembuangan resmi',
                ],
                'order' => 5,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }
    }
}
