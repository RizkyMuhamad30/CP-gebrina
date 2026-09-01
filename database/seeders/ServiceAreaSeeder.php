<?php

namespace Database\Seeders;

use App\Models\ServiceArea;
use Illuminate\Database\Seeder;

class ServiceAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            // Jakarta Selatan
            ['city' => 'Jakarta Selatan', 'district' => 'Kebayoran Baru'],
            ['city' => 'Jakarta Selatan', 'district' => 'Kebayoran Lama'],
            ['city' => 'Jakarta Selatan', 'district' => 'Cilandak'],
            ['city' => 'Jakarta Selatan', 'district' => 'Pasar Minggu'],
            ['city' => 'Jakarta Selatan', 'district' => 'Jagakarsa'],
            ['city' => 'Jakarta Selatan', 'district' => 'Mampang Prapatan'],
            ['city' => 'Jakarta Selatan', 'district' => 'Pancoran'],
            ['city' => 'Jakarta Selatan', 'district' => 'Tebet'],
            ['city' => 'Jakarta Selatan', 'district' => 'Setiabudi'],
            ['city' => 'Jakarta Selatan', 'district' => 'Pesanggrahan'],

            // Jakarta Timur
            ['city' => 'Jakarta Timur', 'district' => 'Ciracas'],
            ['city' => 'Jakarta Timur', 'district' => 'Pasar Rebo'],
            ['city' => 'Jakarta Timur', 'district' => 'Kramat Jati'],
            ['city' => 'Jakarta Timur', 'district' => 'Duren Sawit'],
            ['city' => 'Jakarta Timur', 'district' => 'Jatinegara'],
            ['city' => 'Jakarta Timur', 'district' => 'Cakung'],
            ['city' => 'Jakarta Timur', 'district' => 'Pulo Gadung'],
            ['city' => 'Jakarta Timur', 'district' => 'Matraman'],
            ['city' => 'Jakarta Timur', 'district' => 'Makasar'],
            ['city' => 'Jakarta Timur', 'district' => 'Cipayung'],

            // Jakarta Barat
            ['city' => 'Jakarta Barat', 'district' => 'Cengkareng'],
            ['city' => 'Jakarta Barat', 'district' => 'Grogol Petamburan'],
            ['city' => 'Jakarta Barat', 'district' => 'Taman Sari'],
            ['city' => 'Jakarta Barat', 'district' => 'Tambora'],
            ['city' => 'Jakarta Barat', 'district' => 'Kebon Jeruk'],
            ['city' => 'Jakarta Barat', 'district' => 'Kalideres'],
            ['city' => 'Jakarta Barat', 'district' => 'Palmerah'],
            ['city' => 'Jakarta Barat', 'district' => 'Kembangan'],

            // Jakarta Pusat
            ['city' => 'Jakarta Pusat', 'district' => 'Tanah Abang'],
            ['city' => 'Jakarta Pusat', 'district' => 'Menteng'],
            ['city' => 'Jakarta Pusat', 'district' => 'Gambir'],
            ['city' => 'Jakarta Pusat', 'district' => 'Kemayoran'],
            ['city' => 'Jakarta Pusat', 'district' => 'Senen'],
            ['city' => 'Jakarta Pusat', 'district' => 'Sawah Besar'],
            ['city' => 'Jakarta Pusat', 'district' => 'Cempaka Putih'],
            ['city' => 'Jakarta Pusat', 'district' => 'Johar Baru'],

            // Jakarta Utara
            ['city' => 'Jakarta Utara', 'district' => 'Penjaringan'],
            ['city' => 'Jakarta Utara', 'district' => 'Pademangan'],
            ['city' => 'Jakarta Utara', 'district' => 'Tanjung Priok'],
            ['city' => 'Jakarta Utara', 'district' => 'Koja'],
            ['city' => 'Jakarta Utara', 'district' => 'Kelapa Gading'],
            ['city' => 'Jakarta Utara', 'district' => 'Cilincing'],

            // Bogor
            ['city' => 'Bogor', 'district' => 'Bogor Timur'],
            ['city' => 'Bogor', 'district' => 'Bogor Selatan'],
            ['city' => 'Bogor', 'district' => 'Bogor Tengah'],
            ['city' => 'Bogor', 'district' => 'Bogor Barat'],
            ['city' => 'Bogor', 'district' => 'Bogor Utara'],
            ['city' => 'Bogor', 'district' => 'Cibinong'],
            ['city' => 'Bogor', 'district' => 'Gunung Putri'],
            ['city' => 'Bogor', 'district' => 'Cileungsi'],
            ['city' => 'Bogor', 'district' => 'Parung'],
            ['city' => 'Bogor', 'district' => 'Bojonggede'],

            // Depok
            ['city' => 'Depok', 'district' => 'Beji / Margonda'],
            ['city' => 'Depok', 'district' => 'Pancoran Mas'],
            ['city' => 'Depok', 'district' => 'Cimanggis'],
            ['city' => 'Depok', 'district' => 'Tapos'],
            ['city' => 'Depok', 'district' => 'Sawangan'],
            ['city' => 'Depok', 'district' => 'Cinere'],
            ['city' => 'Depok', 'district' => 'Limo'],
            ['city' => 'Depok', 'district' => 'Bojongsari'],
            ['city' => 'Depok', 'district' => 'Sukmajaya'],
            ['city' => 'Depok', 'district' => 'Cilodong'],

            // Tangerang & Tangsel
            ['city' => 'Tangerang', 'district' => 'Serpong / BSD'],
            ['city' => 'Tangerang', 'district' => 'Bintaro / Pondok Aren'],
            ['city' => 'Tangerang', 'district' => 'Ciputat & Ciputat Timur'],
            ['city' => 'Tangerang', 'district' => 'Pamulang'],
            ['city' => 'Tangerang', 'district' => 'Ciledug'],
            ['city' => 'Tangerang', 'district' => 'Karawaci'],
            ['city' => 'Tangerang', 'district' => 'Alam Sutera'],
            ['city' => 'Tangerang', 'district' => 'Batuceper'],
            ['city' => 'Tangerang', 'district' => 'Cikupa'],
            ['city' => 'Tangerang', 'district' => 'Balaraja'],

            // Bekasi
            ['city' => 'Bekasi', 'district' => 'Bekasi Barat'],
            ['city' => 'Bekasi', 'district' => 'Bekasi Selatan'],
            ['city' => 'Bekasi', 'district' => 'Bekasi Timur'],
            ['city' => 'Bekasi', 'district' => 'Bekasi Utara'],
            ['city' => 'Bekasi', 'district' => 'Pondok Gede'],
            ['city' => 'Bekasi', 'district' => 'Jatiasih'],
            ['city' => 'Bekasi', 'district' => 'Mustikajaya'],
            ['city' => 'Bekasi', 'district' => 'Cikarang Pusat & Barat'],
            ['city' => 'Bekasi', 'district' => 'Tambun Selatan & Utara'],
            ['city' => 'Bekasi', 'district' => 'Rawalumbu'],
        ];

        foreach ($areas as $area) {
            ServiceArea::firstOrCreate([
                'city' => $area['city'],
                'district' => $area['district']
            ], [
                'coverage_details' => 'Layanan Standar 24 Jam - Siap Meluncur'
            ]);
        }
    }
}
